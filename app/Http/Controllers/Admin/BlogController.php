<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \App\Models\Blog::with('category')->latest()->paginate(20);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title) . '-' . time();
        $validated['is_published'] = $request->has('is_published');

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        \App\Models\Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(\App\Models\Blog $blog)
    {
        $categories = \App\Models\Category::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    public function update(\Illuminate\Http\Request $request, \App\Models\Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['is_published'] = $request->has('is_published');

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($blog->featured_image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(\App\Models\Blog $blog)
    {
        if ($blog->featured_image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->featured_image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted.');
    }
}
