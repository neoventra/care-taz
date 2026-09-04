<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends Model
{
    protected $fillable = [
        'blog_category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'status',
        'is_featured',
        'author_name',
        'meta_title',
        'meta_description',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function isPublished(): bool
    {
        return $this->status === 'published'
            && $this->published_at
            && $this->published_at->lte(now());
    }

    public function coverUrl(): string
    {
        $image = $this->featured_image;

        if (! $image) {
            return asset('assets/images/care-meal-support.jpg');
        }

        if (str_contains($image, '/')) {
            return asset($image);
        }

        return asset('uploads/blog/'.$image);
    }

    public function readingMinutes(): int
    {
        $words = str_word_count(strip_tags($this->body));

        return max(1, (int) ceil($words / 200));
    }

    public function seoTitle(): string
    {
        return $this->meta_title ?: $this->title.' | Caretaz Healthcare';
    }

    public function seoDescription(): string
    {
        return $this->meta_description ?: $this->excerpt;
    }
}
