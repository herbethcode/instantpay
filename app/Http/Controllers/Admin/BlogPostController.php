<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['user', 'images', 'allComments'])->latest()->paginate(15);
        return view('admin.blog-posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog-posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'featured_image' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'captions.*' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']);
        
        if ($validated['status'] === 'published' && !isset($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $blogPost = BlogPost::create($validated);

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('blog-posts', 'public');
                
                PostImage::create([
                    'blog_post_id' => $blogPost->id,
                    'image_path' => $path,
                    'caption' => $request->captions[$index] ?? null,
                    'is_active' => true,
                    'order' => $index,
                ]);
            }
        }

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog post created successfully.');
    }

    public function show(BlogPost $blogPost)
    {
        $blogPost->load(['images', 'approvedComments.replies', 'approvedComments.user']);
        return view('admin.blog-posts.show', compact('blogPost'));
    }

    public function edit(BlogPost $blogPost)
    {
        $blogPost->load('images');
        return view('admin.blog-posts.edit', compact('blogPost'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'featured_image' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'captions.*' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        if ($validated['status'] === 'published' && !$blogPost->published_at) {
            $validated['published_at'] = now();
        }

        $blogPost->update($validated);

        // Handle new image uploads
        if ($request->hasFile('images')) {
            $currentMaxOrder = $blogPost->images()->max('order') ?? -1;
            
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('blog-posts', 'public');
                
                PostImage::create([
                    'blog_post_id' => $blogPost->id,
                    'image_path' => $path,
                    'caption' => $request->captions[$index] ?? null,
                    'is_active' => true,
                    'order' => $currentMaxOrder + $index + 1,
                ]);
            }
        }

        return redirect()->route('admin.blog-posts.edit', $blogPost)
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blogPost)
    {
        // Delete all associated images from storage
        foreach ($blogPost->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }
        
        $blogPost->delete();

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog post deleted successfully.');
    }

    public function deleteImage(PostImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }

    public function toggleImageStatus(PostImage $image)
    {
        $image->update(['is_active' => !$image->is_active]);

        return back()->with('success', 'Image status updated successfully.');
    }
}
