<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPostComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = BlogPostComment::with(['blogPost', 'user'])
            ->latest()
            ->paginate(20);
        
        return view('admin.comments.index', compact('comments'));
    }

    public function approve(BlogPostComment $comment)
    {
        $comment->update(['is_approved' => true]);

        return back()->with('success', 'Comment approved successfully.');
    }

    public function unapprove(BlogPostComment $comment)
    {
        $comment->update(['is_approved' => false]);

        return back()->with('success', 'Comment unapproved successfully.');
    }

    public function destroy(BlogPostComment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }
}
