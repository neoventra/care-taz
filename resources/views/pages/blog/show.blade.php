@extends('layouts.app')

@section('title', $post->seoTitle())
@section('description', $post->seoDescription())
@section('body_class', 'page-blog page-blog-article')

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
        <a href="{{ route('blog.index') }}">Blog</a> <span>/</span>
        <span>{{ $post->title }}</span>
      </div>
      <p class="page-hero__brand">{{ $post->category?->name ?? 'Caretaz Healthcare' }}</p>
      <p class="eyebrow">Article</p>
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->excerpt }}</p>
      <p>{{ $post->author_name }} · {{ $post->published_at?->format('d M Y') }} · {{ $post->readingMinutes() }} min read</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:48rem;">
      @if ($post->featured_image)
        <img src="{{ $post->coverUrl() }}" alt="{{ $post->title }}" style="width:100%;border-radius:14px;margin-bottom:1.5rem;aspect-ratio:16/9;object-fit:cover;">
      @endif
      <div class="blog-article-body">
        {!! $post->body !!}
      </div>
      <p style="margin-top:2rem;">
        <a class="btn btn--teal" href="{{ route('contact-us') }}">Talk to our care team</a>
      </p>
    </div>
  </section>

  @if ($related->isNotEmpty())
    <section class="section section--navy">
      <div class="container">
        <div class="section-head">
          <h2>Related reading</h2>
        </div>
        <div class="contact-hub">
          @foreach ($related as $item)
            <article class="hub-card reveal">
              <a href="{{ route('blog.show', $item->slug) }}" style="text-decoration:none;color:inherit;">
                <strong>{{ $item->category?->name }}</strong>
                <h3 style="margin:0.35rem 0;">{{ $item->title }}</h3>
                <p>{{ $item->excerpt }}</p>
              </a>
            </article>
          @endforeach
        </div>
      </div>
    </section>
  @endif
</main>
@endsection
