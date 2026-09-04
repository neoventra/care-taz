<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(Request $request): View
    {
        $query = BlogPost::query()->with('category')->latest('updated_at');

        if ($request->string('status')->isNotEmpty() && in_array($request->status, ['published', 'draft'], true)) {
            $query->where('status', $request->status);
        }

        if ($request->filled('q')) {
            $search = $request->string('q')->toString();
            $query->where(function ($builder) use ($search) {
                $builder->where('title', 'like', '%'.$search.'%')
                    ->orWhere('excerpt', 'like', '%'.$search.'%');
            });
        }

        return view('admin.blog.index', [
            'posts' => $query->paginate(9)->withQueryString(),
            'counts' => [
                'all' => BlogPost::count(),
                'published' => BlogPost::where('status', 'published')->count(),
                'draft' => BlogPost::where('status', 'draft')->count(),
            ],
        ]);
    }

    public function create(): View
    {
        return view('admin.blog.create', [
            'post' => new BlogPost([
                'status' => 'draft',
                'author_name' => 'Caretaz Healthcare',
                'published_at' => now(),
            ]),
            'categories' => BlogCategory::orderBy('name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['featured_image'] = $this->storeImage($request);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['title']);
        $data['published_at'] = $this->publishedAt($data);

        BlogPost::create($data);

        return redirect()->route('admin.blog.index')->with('status', 'Post saved.');
    }

    public function edit(BlogPost $blog): View
    {
        return view('admin.blog.edit', [
            'post' => $blog,
            'categories' => BlogCategory::orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, BlogPost $blog): RedirectResponse
    {
        $data = $this->validated($request, $blog->id);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['title'], $blog->id);
        $data['published_at'] = $this->publishedAt($data, $blog);

        if ($request->hasFile('featured_image')) {
            $this->deleteUploadedImage($blog->featured_image);
            $data['featured_image'] = $this->storeImage($request);
        }

        $blog->update($data);

        return redirect()->route('admin.blog.index')->with('status', 'Post updated.');
    }

    public function destroy(BlogPost $blog): RedirectResponse
    {
        $this->deleteUploadedImage($blog->featured_image);
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('status', 'Post deleted.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:180'],
            'slug' => ['nullable', 'string', 'max:180', Rule::unique('blog_posts', 'slug')->ignore($ignoreId)],
            'excerpt' => ['required', 'string', 'max:500'],
            'body' => ['required', 'string'],
            'blog_category_id' => ['nullable', 'exists:blog_categories,id'],
            'new_category' => ['nullable', 'string', 'max:80'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'is_featured' => ['nullable', 'boolean'],
            'author_name' => ['required', 'string', 'max:120'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:180'],
            'meta_description' => ['nullable', 'string', 'max:320'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
        ]);

        if (filled($data['new_category'] ?? null)) {
            $category = BlogCategory::firstOrCreate(
                ['slug' => Str::slug($data['new_category'])],
                ['name' => $data['new_category']]
            );
            $data['blog_category_id'] = $category->id;
        }

        if (empty($data['blog_category_id'])) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'blog_category_id' => 'Please choose or add a category.',
            ]);
        }

        $data['is_featured'] = $request->boolean('is_featured');
        unset($data['new_category'], $data['featured_image']);

        return $data;
    }

    private function uniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $slug = Str::slug($value) ?: 'post';
        $base = $slug;
        $i = 2;

        while (
            BlogPost::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base.'-'.$i;
            $i++;
        }

        return $slug;
    }

    private function publishedAt(array $data, ?BlogPost $existing = null): ?string
    {
        if ($data['status'] !== 'published') {
            return $data['published_at'] ?? null;
        }

        return $data['published_at'] ?? $existing?->published_at?->toDateTimeString() ?? now()->toDateTimeString();
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('featured_image')) {
            return null;
        }

        $directory = public_path('uploads/blog');
        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $file = $request->file('featured_image');
        $name = Str::uuid().'.'.$file->getClientOriginalExtension();
        $file->move($directory, $name);

        return $name;
    }

    private function deleteUploadedImage(?string $image): void
    {
        if (! $image || str_contains($image, '/')) {
            return;
        }

        $path = public_path('uploads/blog/'.$image);
        if (is_file($path)) {
            unlink($path);
        }
    }
}
