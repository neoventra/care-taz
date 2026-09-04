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

  <script src="{{ versioned_asset('js/main.js') }}"></script>
  @stack('scripts')
  @yield('scripts')
</body>
</html>
