<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['user', 'activeImages'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::with(['user', 'activeImages', 'approvedComments.user', 'approvedComments.replies'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Increment views
        $post->increment('views');

        // Get recent posts for sidebar
        $recentPosts = BlogPost::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'recentPosts'));
    }

    public function storeComment(Request $request, BlogPost $post)
    {
        // Different validation rules for authenticated vs guest users
        if (auth()->check()) {
            $validated = $request->validate([
                'content' => 'required|max:1000',
                'parent_id' => 'nullable|exists:blog_post_comments,id',
            ]);
        } else {
            $validated = $request->validate([
                'content' => 'required|max:1000',
                'author_name' => 'required|max:255',
                'author_email' => 'required|email|max:255',
                'parent_id' => 'nullable|exists:blog_post_comments,id',
            ]);
        }

        $validated['blog_post_id'] = $post->id;
        $validated['user_id'] = auth()->id();
        $validated['is_approved'] = false; // Requires admin approval

        $post->allComments()->create($validated);

        return back()->with('success', 'Comment submitted successfully and awaiting approval.');
    }
}
