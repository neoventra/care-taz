@extends('layouts.app')

@section('title', ($activeCategory ? $activeCategory->name.' | ' : '').'Blog | Caretaz Healthcare')
@section('description', 'Care insights and guidance from Caretaz Healthcare in Nottingham.')
@section('body_class', 'page-blog')

@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
  <section class="page-hero">
    <div class="container">
      <div class="breadcrumbs">
        <a href="{{ route('home') }}">Home</a> <span>/</span>
        @if ($activeCategory)
          <a href="{{ route('blog.index') }}">Blog</a> <span>/</span> <span>{{ $activeCategory->name }}</span>
        @else
          <span>Blog</span>
        @endif
      </div>
      <p class="page-hero__brand">Caretaz Healthcare</p>
      <p class="eyebrow">Insights</p>
      <h1>{{ $activeCategory ? $activeCategory->name : 'Care notes from our Nottingham team' }}</h1>
      <p>Practical guidance for families planning home care — written by the Caretaz team.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      @if ($categories->isNotEmpty())
        <p style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-bottom:1.5rem;">
          <a class="btn {{ $activeCategory ? 'btn--outline-teal' : 'btn--teal' }}" href="{{ route('blog.index') }}">All</a>
          @foreach ($categories as $category)
            <a class="btn {{ $activeCategory?->id === $category->id ? 'btn--teal' : 'btn--outline-teal' }}" href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
          @endforeach
        </p>
      @endif

      @if ($featured)
        <article class="hub-card reveal" style="margin-bottom:2rem;">
          <a href="{{ route('blog.show', $featured->slug) }}" style="text-decoration:none;color:inherit;display:grid;gap:1rem;grid-template-columns:minmax(0,1.1fr) minmax(0,1.2fr);align-items:center;">
            <img src="{{ $featured->coverUrl() }}" alt="{{ $featured->title }}" style="width:100%;border-radius:12px;aspect-ratio:16/10;object-fit:cover;">
            <div>
              <strong>{{ $featured->category?->name }}</strong>
              <h2 style="margin:0.35rem 0;">{{ $featured->title }}</h2>
              <p>{{ $featured->excerpt }}</p>
              <span>{{ $featured->published_at?->format('d M Y') }} · {{ $featured->readingMinutes() }} min read</span>
            </div>
          </a>
        </article>
      @endif

      @if ($posts->isEmpty() && ! $featured)
        <p>No articles in this category yet.</p>
      @else
        <div class="contact-hub">
          @foreach ($posts as $post)
            <article class="hub-card reveal">
              <a href="{{ route('blog.show', $post->slug) }}" style="text-decoration:none;color:inherit;">
                <img src="{{ $post->coverUrl() }}" alt="{{ $post->title }}" style="width:100%;border-radius:10px;aspect-ratio:16/10;object-fit:cover;margin-bottom:0.75rem;">
                <strong>{{ $post->category?->name }}</strong>
                <h3 style="margin:0.35rem 0;">{{ $post->title }}</h3>
                <p>{{ $post->excerpt }}</p>
                <span>{{ $post->published_at?->format('d M Y') }} · {{ $post->readingMinutes() }} min read</span>
              </a>
            </article>
          @endforeach
        </div>
        <div style="margin-top:2rem;">{{ $posts->links() }}</div>
      @endif
    </div>
  </section>
</main>
@endsection
