@php
  $isEdit = $post->exists;
@endphp

<form method="post" action="{{ $isEdit ? route('admin.blog.update', $post) : route('admin.blog.store') }}" enctype="multipart/form-data" class="blog-editor" id="blogEditorForm">
  @csrf
  @if ($isEdit)
    @method('PUT')
  @endif

  <div class="blog-editor-main">
    <div class="admin-panel">
      @if ($errors->any())
        <div class="login-alert is-error">{{ $errors->first() }}</div>
      @endif

      <label class="admin-field-label" for="title">Title</label>
      <input class="admin-input admin-input-title" id="title" name="title" value="{{ old('title', $post->title) }}" required maxlength="180" placeholder="Post title">

      <label class="admin-field-label" for="slug">Slug</label>
      <input class="admin-input" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" maxlength="180" placeholder="auto-generated-from-title">

      <label class="admin-field-label" for="excerpt">Excerpt</label>
      <textarea class="admin-input" id="excerpt" name="excerpt" rows="3" required maxlength="500" placeholder="Short summary shown on listing cards">{{ old('excerpt', $post->excerpt) }}</textarea>

      <label class="admin-field-label" for="body">Content</label>
      <textarea id="body" name="body">{{ old('body', $post->body) }}</textarea>
    </div>
  </div>

  <aside class="blog-editor-side">
    <div class="admin-panel">
      <h2>Publish</h2>
      <label class="admin-field-label" for="status">Status</label>
      <select class="admin-input" id="status" name="status">
        <option value="draft" @selected(old('status', $post->status) === 'draft')>Draft</option>
        <option value="published" @selected(old('status', $post->status) === 'published')>Published</option>
      </select>

      <label class="admin-field-label" for="published_at">Publish date</label>
      <input class="admin-input" id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}">

      <label class="admin-check">
        <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $post->is_featured))>
        Featured on blog home
      </label>

      <label class="admin-field-label" for="author_name">Author</label>
      <input class="admin-input" id="author_name" name="author_name" value="{{ old('author_name', $post->author_name ?: 'Caretaz Healthcare') }}" required>

      <button type="submit" class="admin-gold-btn blog-save-btn">{{ $isEdit ? 'Update post' : 'Save post' }}</button>
      <a href="{{ route('admin.blog.index') }}" class="admin-ghost-btn blog-cancel-btn">Cancel</a>
    </div>

    <div class="admin-panel">
      <h2>Category</h2>
      <label class="admin-field-label" for="blog_category_id">Existing</label>
      <select class="admin-input" id="blog_category_id" name="blog_category_id">
        <option value="">Select category</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" @selected((string) old('blog_category_id', $post->blog_category_id) === (string) $category->id)>{{ $category->name }}</option>
        @endforeach
      </select>
      <label class="admin-field-label" for="new_category">Or add new</label>
      <input class="admin-input" id="new_category" name="new_category" value="{{ old('new_category') }}" placeholder="e.g. VAT">
    </div>

    <div class="admin-panel">
      <h2>Cover image</h2>
      <div class="blog-cover-preview" id="coverPreview">
        @if ($post->featured_image)
          <img src="{{ $post->coverUrl() }}" alt="">
        @else
          <span>No image selected</span>
        @endif
      </div>
      <input class="admin-input" id="featured_image" name="featured_image" type="file" accept="image/*">
    </div>

    <div class="admin-panel">
      <h2>SEO</h2>
      <label class="admin-field-label" for="meta_title">Meta title</label>
      <input class="admin-input" id="meta_title" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}" maxlength="180">
      <label class="admin-field-label" for="meta_description">Meta description</label>
      <textarea class="admin-input" id="meta_description" name="meta_description" rows="3" maxlength="320">{{ old('meta_description', $post->meta_description) }}</textarea>
    </div>
  </aside>
</form>
