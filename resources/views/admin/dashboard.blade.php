@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')
  <div class="admin-cards">
    <article class="admin-stat-card">
      <div class="admin-stat-icon"><i class="bi bi-envelope-heart"></i></div>
      <span>Total enquiries</span>
      <strong>{{ $enquiryCount }}</strong>
      <a href="{{ route('admin.contact-us.index') }}">Open inbox <i class="bi bi-arrow-right"></i></a>
    </article>
    <article class="admin-stat-card">
      <div class="admin-stat-icon is-gold"><i class="bi bi-brightness-high"></i></div>
      <span>Received today</span>
      <strong>{{ $todayCount }}</strong>
    </article>
    <article class="admin-stat-card">
      <div class="admin-stat-icon is-ink"><i class="bi bi-calendar-week"></i></div>
      <span>This week</span>
      <strong>{{ $weekCount }}</strong>
    </article>
    <article class="admin-stat-card">
      <div class="admin-stat-icon is-soft"><i class="bi bi-person-hearts"></i></div>
      <span>Latest contact</span>
      <strong class="admin-stat-name">{{ $latestEnquiry?->name ?? '—' }}</strong>
    </article>
  </div>

  <div class="admin-cards admin-cards-two">
    <section class="admin-panel">
      <div class="admin-panel-head">
        <h2>Recent enquiries</h2>
        <a href="{{ route('admin.contact-us.index') }}" class="admin-ghost-btn">View all</a>
      </div>
      <div class="admin-recent-list">
        @forelse ($recentEnquiries as $enquiry)
          <article class="admin-recent-item">
            <span class="dt-avatar">{{ collect(preg_split('/\s+/', $enquiry->name))->filter()->take(2)->map(fn ($p) => strtoupper(substr($p, 0, 1)))->implode('') }}</span>
            <div class="admin-recent-copy">
              <strong>{{ $enquiry->name }}</strong>
              <span>{{ $enquiry->subject ?: 'General enquiry' }} · {{ $enquiry->email }}</span>
            </div>
            <time>{{ $enquiry->created_at?->format('d M, H:i') }}</time>
          </article>
        @empty
          <p class="admin-empty">No enquiries yet.</p>
        @endforelse
      </div>
    </section>

    <section class="admin-panel">
      <div class="admin-panel-head">
        <h2>Blog</h2>
        <a href="{{ route('admin.blog.index') }}" class="admin-ghost-btn">Manage</a>
      </div>
      <p class="admin-blog-count">{{ $publishedCount }} published · {{ $postCount }} total</p>
      <div class="admin-recent-list">
        @forelse ($recentPosts as $post)
          <article class="admin-recent-item">
            <span class="blog-status is-{{ $post->status }}">{{ $post->status }}</span>
            <div class="admin-recent-copy">
              <strong>{{ $post->title }}</strong>
              <span>{{ $post->category?->name }}</span>
            </div>
            <a href="{{ route('admin.blog.edit', $post) }}" class="admin-ghost-btn">Edit</a>
          </article>
        @empty
          <p class="admin-empty">No posts yet.</p>
        @endforelse
      </div>
    </section>
  </div>
@endsection
