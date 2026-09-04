<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $query = BlogPost::query()
            ->published()
            ->with('category')
            ->latest('published_at');

        $activeCategory = null;
        if ($request->filled('category')) {
            $activeCategory = BlogCategory::where('slug', $request->string('category'))->first();
            if ($activeCategory) {
                $query->where('blog_category_id', $activeCategory->id);
            }
        }

        $featured = null;
        if (! $activeCategory && ! $request->filled('page')) {
            $featured = (clone $query)->where('is_featured', true)->first();
            if ($featured) {
                $query->where('id', '!=', $featured->id);
            }
        }

        return view('pages.blog.index', [
            'featured' => $featured,
            'posts' => $query->paginate(9)->withQueryString(),
            'categories' => BlogCategory::whereHas('posts', fn ($q) => $q->published())->orderBy('name')->get(),
            'activeCategory' => $activeCategory,
        ]);
    }

    public function show(string $slug): View
    {
        $post = BlogPost::query()
            ->published()
            ->with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        $related = BlogPost::query()
            ->published()
            ->with('category')
            ->where('id', '!=', $post->id)
            ->where('blog_category_id', $post->blog_category_id)
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($related->count() < 3) {
            $related = $related->merge(
                BlogPost::query()
                    ->published()
                    ->with('category')
                    ->where('id', '!=', $post->id)
                    ->whereNotIn('id', $related->pluck('id'))
                    ->latest('published_at')
                    ->take(3 - $related->count())
                    ->get()
            );
        }

        return view('pages.blog.show', [
            'post' => $post,
            'related' => $related,
        ]);
    }
}
