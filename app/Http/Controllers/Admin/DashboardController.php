<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'total_posts' => BlogPost::count(),
            'published_posts' => BlogPost::where('status', 'published')->count(),
            'draft_posts' => BlogPost::where('status', 'draft')->count(),
            'total_contacts' => Contact::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
            'total_visitors' => Visitor::count(),
            'today_visitors' => Visitor::whereDate('created_at', today())->count(),
        ];

        $recent_contacts = Contact::latest()->take(5)->get();
        $recent_visitors = Visitor::latest()->take(10)->get();
        $popular_posts = BlogPost::where('status', 'published')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_contacts', 'recent_visitors', 'popular_posts'));
    }
}
