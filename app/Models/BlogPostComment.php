<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPostComment extends Model
{
    protected $fillable = [
        'blog_post_id',
        'user_id',
        'author_name',
        'author_email',
        'content',
        'is_approved',
        'parent_id',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    public function blogPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(BlogPostComment::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(BlogPostComment::class, 'parent_id');
    }
}
