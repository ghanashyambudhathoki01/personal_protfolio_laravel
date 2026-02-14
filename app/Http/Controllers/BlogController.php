<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Blog::with('category')->where('is_published', true)->latest()->paginate(9);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = \App\Models\Blog::with('category')->where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
