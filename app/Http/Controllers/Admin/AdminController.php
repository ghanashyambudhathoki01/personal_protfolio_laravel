<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $blogCount = \App\Models\Blog::count();
        $enquiryCount = \App\Models\Enquiry::count();
        $recentEnquiries = \App\Models\Enquiry::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('blogCount', 'enquiryCount', 'recentEnquiries'));
    }
}
