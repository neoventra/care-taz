<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Caretaz Healthcare')</title>
  @hasSection('description')
  <meta name="description" content="@yield('description')">
  @endif
  <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@400;500;600&family=Figtree:wght@400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ versioned_asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/site-theme.css') }}">
  @stack('styles')
  @yield('head')
</head>
<body class="@yield('body_class')">
  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <a class="whatsapp-float"
     href="https://wa.me/447869706646"
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Chat with Caretaz Healthcare on WhatsApp">
    <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false">
      <path fill="currentColor" d="M16.01 3.2C9.05 3.2 3.4 8.85 3.4 15.81c0 2.22.58 4.38 1.68 6.29L3.2 28.8l6.9-1.81a12.55 12.55 0 0 0 5.91 1.5h.01c6.96 0 12.61-5.65 12.61-12.61S22.97 3.2 16.01 3.2zm0 22.98h-.01a10.45 10.45 0 0 1-5.32-1.46l-.38-.23-4.09 1.07 1.09-3.99-.25-.41a10.45 10.45 0 0 1-1.61-5.55c0-5.77 4.7-10.47 10.48-10.47s10.47 4.7 10.47 10.47-4.69 10.47-10.38 10.47zm5.74-7.84c-.31-.16-1.85-.91-2.14-1.02-.29-.1-.5-.16-.71.16-.21.31-.82 1.02-1 1.23-.18.21-.37.23-.68.08-.31-.16-1.32-.49-2.51-1.55-.93-.83-1.55-1.85-1.73-2.16-.18-.31-.02-.48.14-.63.14-.14.31-.37.47-.55.16-.18.21-.31.31-.52.1-.21.05-.39-.03-.55-.08-.16-.71-1.71-.97-2.34-.26-.63-.52-.52-.71-.53h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.08-1.1 2.63s1.13 3.05 1.29 3.26c.16.21 2.22 3.39 5.38 4.75.75.32 1.34.52 1.8.66.76.24 1.45.2 2 .12.61-.09 1.85-.76 2.11-1.49.26-.73.26-1.36.18-1.49-.08-.13-.29-.21-.61-.37z"/>
    </svg>
  </a>

  <script src="{{ versioned_asset('js/main.js') }}"></script>
  @stack('scripts')
  @yield('scripts')
</body>
</html>
