<script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.4/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#body',
    height: 440,
    menubar: false,
    branding: false,
    plugins: 'lists link autolink',
    toolbar: 'undo redo | blocks | bold italic underline | bullist numlist | link | removeformat',
    block_formats: 'Paragraph=p; Heading 2=h2; Heading 3=h3',
    content_style: 'body { font-family: Inter, system-ui, sans-serif; font-size: 14px; line-height: 1.6; color: #16110b; }'
  });

  document.getElementById('blogEditorForm').addEventListener('submit', function () {
    if (window.tinymce) tinymce.triggerSave();
  });

  var title = document.getElementById('title');
  var slug = document.getElementById('slug');
  var slugTouched = {{ $post->exists ? 'true' : 'false' }};
  slug.addEventListener('input', function () { slugTouched = true; });
  title.addEventListener('input', function () {
    if (slugTouched && slug.value) return;
    slug.value = title.value.toLowerCase().trim()
      .replace(/[^a-z0-9\s-]/g, '')
      .replace(/\s+/g, '-')
      .replace(/-+/g, '-');
  });

  document.getElementById('featured_image').addEventListener('change', function (event) {
    var file = event.target.files[0];
    if (!file) return;
    var preview = document.getElementById('coverPreview');
    preview.innerHTML = '';
    var img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    preview.appendChild(img);
  });
</script>
