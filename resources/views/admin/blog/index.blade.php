@extends('admin.layouts.app')

@section('title', 'Blog')
@section('heading', 'Blog')

@section('content')
  @if (session('status'))
    <div class="admin-flash">{{ session('status') }}</div>
  @endif

  <div class="blog-admin-toolbar">
    <div class="blog-admin-tabs">
      <a href="{{ route('admin.blog.index') }}" class="{{ !request('status') ? 'is-active' : '' }}">All <span>{{ $counts['all'] }}</span></a>
      <a href="{{ route('admin.blog.index', ['status' => 'published']) }}" class="{{ request('status') === 'published' ? 'is-active' : '' }}">Published <span>{{ $counts['published'] }}</span></a>
      <a href="{{ route('admin.blog.index', ['status' => 'draft']) }}" class="{{ request('status') === 'draft' ? 'is-active' : '' }}">Drafts <span>{{ $counts['draft'] }}</span></a>
    </div>
    <form class="blog-admin-search" method="get">
      @if (request('status'))
        <input type="hidden" name="status" value="{{ request('status') }}">
      @endif
      <input type="search" name="q" value="{{ request('q') }}" placeholder="Search posts">
    </form>
    <a href="{{ route('admin.blog.create') }}" class="admin-gold-btn"><i class="bi bi-plus-lg"></i> New post</a>
  </div>

  @if ($posts->isEmpty())
    <div class="admin-panel blog-admin-empty">
      <i class="bi bi-journal-text"></i>
      <h2>No posts yet</h2>
      <p>Write your first article for the Caretaz website.</p>
      <a href="{{ route('admin.blog.create') }}" class="admin-gold-btn">Create a post</a>
    </div>
  @else
    <div class="blog-admin-grid">
      @foreach ($posts as $post)
        <article class="blog-admin-card">
          <div class="blog-admin-cover">
            <img src="{{ $post->coverUrl() }}" alt="">
            <span class="blog-status is-{{ $post->status }}">{{ $post->status }}</span>
            @if ($post->is_featured)
              <span class="blog-featured-pill">Featured</span>
            @endif
          </div>
          <div class="blog-admin-card-body">
            <span class="blog-admin-cat">{{ $post->category?->name }}</span>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->excerpt }}</p>
            <div class="blog-admin-meta">
              {{ $post->published_at?->format('d M Y') ?? 'Not scheduled' }}
              · {{ $post->readingMinutes() }} min read
            </div>
            <div class="blog-admin-actions">
              <a href="{{ route('admin.blog.edit', $post) }}">Edit</a>
              @if ($post->isPublished())
                <a href="{{ route('blog.show', $post->slug) }}" target="_blank" rel="noopener">View</a>
              @endif
              <form method="post" action="{{ route('admin.blog.destroy', $post) }}" onsubmit="return confirm('Delete this post?')">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </div>
          </div>
        </article>
      @endforeach
    </div>
    {{ $posts->links() }}
  @endif
@endsection
