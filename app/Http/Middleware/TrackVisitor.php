<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only track GET requests and exclude admin routes, API routes, and assets
        if ($request->isMethod('get') && 
            !$request->is('admin/*') && 
            !$request->is('api/*') &&
            !$request->is('*.js') &&
            !$request->is('*.css') &&
            !$request->is('*.jpg') &&
            !$request->is('*.png') &&
            !$request->is('*.gif') &&
            !$request->is('*.svg')) {
            
            try {
                // Get or create visitor ID from cookie
                $visitorId = $request->cookie('visitor_id');
                
                if (!$visitorId) {
                    // Create a unique visitor ID based on IP and user agent
                    $visitorId = md5($request->ip() . $request->userAgent() . time());
                }
                
                // Parse user agent to get browser info
                $userAgent = $request->userAgent();
                $browserInfo = $this->parseBrowser($userAgent);
                
                // Check if visitor already exists
                $visitor = Visitor::where('visitor_id', $visitorId)->first();
                
                if ($visitor) {
                    // Update existing visitor
                    $visitor->update([
                        'visit_count' => $visitor->visit_count + 1,
                        'last_visit' => now(),
                        'url' => $request->fullUrl(), // Update to latest URL visited
                    ]);
                } else {
                    // Create new visitor record
                    Visitor::create([
                        'visitor_id' => $visitorId,
                        'ip_address' => $request->ip(),
                        'user_agent' => $userAgent,
                        'browser' => $browserInfo['browser'],
                        'platform' => $browserInfo['platform'],
                        'device_type' => $browserInfo['device_type'],
                        'url' => $request->fullUrl(),
                        'referer' => $request->header('referer'),
                        'country' => null, // You can integrate with a GeoIP service later
                        'city' => null,
                        'visit_count' => 1,
                        'last_visit' => now(),
                    ]);
                }
                
                // Set cookie for 1 year
                cookie()->queue('visitor_id', $visitorId, 525600);
                
            } catch (\Exception $e) {
                // Silently fail if tracking fails
                \Log::error('Visitor tracking failed: ' . $e->getMessage());
            }
        }

        return $next($request);
    }
    
    /**
     * Parse browser information from user agent string
     */
    private function parseBrowser($userAgent)
    {
        $browser = 'Unknown';
        $platform = 'Unknown';
        $deviceType = 'Desktop';
        
        // Detect Browser
        if (preg_match('/MSIE/i', $userAgent) || preg_match('/Trident/i', $userAgent)) {
            $browser = 'Internet Explorer';
        } elseif (preg_match('/Edge/i', $userAgent)) {
            $browser = 'Microsoft Edge';
        } elseif (preg_match('/Chrome/i', $userAgent) && !preg_match('/Edg/i', $userAgent)) {
            $browser = 'Google Chrome';
        } elseif (preg_match('/Safari/i', $userAgent) && !preg_match('/Chrome/i', $userAgent)) {
            $browser = 'Safari';
        } elseif (preg_match('/Firefox/i', $userAgent)) {
            $browser = 'Mozilla Firefox';
        } elseif (preg_match('/Opera|OPR/i', $userAgent)) {
            $browser = 'Opera';
        }
        
        // Detect Platform/OS
        if (preg_match('/Windows NT 10/i', $userAgent)) {
            $platform = 'Windows 10';
        } elseif (preg_match('/Windows NT 11/i', $userAgent)) {
            $platform = 'Windows 11';
        } elseif (preg_match('/Windows/i', $userAgent)) {
            $platform = 'Windows';
        } elseif (preg_match('/Macintosh|Mac OS X/i', $userAgent)) {
            $platform = 'Mac OS';
        } elseif (preg_match('/Linux/i', $userAgent)) {
            $platform = 'Linux';
        } elseif (preg_match('/Android/i', $userAgent)) {
            $platform = 'Android';
        } elseif (preg_match('/iPhone|iPad|iPod/i', $userAgent)) {
            $platform = 'iOS';
        }
        
        // Detect Device Type
        if (preg_match('/Mobile|Android|iPhone|iPod|BlackBerry|IEMobile/i', $userAgent)) {
            $deviceType = 'Mobile';
        } elseif (preg_match('/Tablet|iPad/i', $userAgent)) {
            $deviceType = 'Tablet';
        }
        
        return [
            'browser' => $browser,
            'platform' => $platform,
            'device_type' => $deviceType,
        ];
    }
}
