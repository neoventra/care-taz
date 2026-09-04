<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\ContactEnquiry;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'enquiryCount' => ContactEnquiry::count(),
            'todayCount' => ContactEnquiry::whereDate('created_at', today())->count(),
            'weekCount' => ContactEnquiry::where('created_at', '>=', now()->startOfWeek())->count(),
            'latestEnquiry' => ContactEnquiry::latest()->first(),
            'recentEnquiries' => ContactEnquiry::latest()->take(5)->get(),
            'postCount' => BlogPost::count(),
            'publishedCount' => BlogPost::where('status', 'published')->count(),
            'recentPosts' => BlogPost::with('category')->latest('updated_at')->take(4)->get(),
        ]);
    }
}
