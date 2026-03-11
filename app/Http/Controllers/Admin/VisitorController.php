<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::latest()->paginate(50);
        
        $stats = [
            'total' => Visitor::count(),
            'today' => Visitor::whereDate('created_at', today())->count(),
            'this_week' => Visitor::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'this_month' => Visitor::whereMonth('created_at', now()->month)->count(),
        ];

        $top_pages = Visitor::select('url', DB::raw('count(*) as visits'))
            ->groupBy('url')
            ->orderBy('visits', 'desc')
            ->limit(10)
            ->get();

        return view('admin.visitors.index', compact('visitors', 'stats', 'top_pages'));
    }
}
