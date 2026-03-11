<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPost extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'published_at',
        'views',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(PostImage::class)->orderBy('order');
    }

    public function activeImages(): HasMany
    {
        return $this->hasMany(PostImage::class)->where('is_active', true)->orderBy('order');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(BlogPostComment::class)->whereNull('parent_id');
    }

    public function allComments(): HasMany
    {
        return $this->hasMany(BlogPostComment::class);
    }

    public function approvedComments(): HasMany
    {
        return $this->hasMany(BlogPostComment::class)
            ->where('is_approved', true)
            ->whereNull('parent_id')
            ->latest();
    }
}
