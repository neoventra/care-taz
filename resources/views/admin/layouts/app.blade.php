<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Admin') | Caretaz Healthcare</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.11/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="{{ versioned_asset('css/admin.css') }}" rel="stylesheet">
  @yield('head')
</head>
<body class="admin-body">
  <aside class="admin-sidebar">
    <a href="{{ route('admin.dashboard') }}" class="admin-brand">
      <span class="admin-brand-mark-wrap">
        <img src="{{ asset('assets/images/logo-ltd-transparent.png') }}" alt="" class="admin-brand-mark">
      </span>
      <span>
        <strong>Caretaz</strong>
        <small>Care console</small>
      </span>
    </a>

    <p class="admin-nav-label">Workspace</p>
    <nav class="admin-nav" aria-label="Admin">
      <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
      <a href="{{ route('admin.contact-us.index') }}" class="{{ request()->routeIs('admin.contact-us.*') ? 'is-active' : '' }}">
        <i class="bi bi-chat-heart"></i>
        <span>Contact Us</span>
      </a>
      <a href="{{ route('admin.appointments.index') }}" class="{{ request()->routeIs('admin.appointments.*') ? 'is-active' : '' }}">
        <i class="bi bi-calendar2-heart"></i>
        <span>Appointments</span>
      </a>
      <a href="{{ route('admin.blog.index') }}" class="{{ request()->routeIs('admin.blog.*') ? 'is-active' : '' }}">
        <i class="bi bi-newspaper"></i>
        <span>Blog</span>
      </a>
      <a href="{{ route('admin.mail-settings.edit') }}" class="{{ request()->routeIs('admin.mail-settings.*') ? 'is-active' : '' }}">
        <i class="bi bi-envelope-at"></i>
        <span>Mail settings</span>
      </a>
    </nav>
  </aside>

  <div class="admin-main">
    <header class="admin-topbar">
      <div>
        @hasSection('kicker')
          <p class="admin-kicker">@yield('kicker')</p>
        @endif
        <h1>@yield('heading', 'Admin')</h1>
      </div>
      <div class="admin-topbar-right">
        <div class="admin-user-menu" id="adminUserMenu">
          <button type="button" class="admin-user" id="adminUserToggle" aria-expanded="false" aria-haspopup="true">
            <span class="admin-user-avatar">{{ collect(preg_split('/\s+/', trim(auth()->user()->name)))->filter()->take(2)->map(fn ($p) => strtoupper(substr($p, 0, 1)))->implode('') }}</span>
            <span class="admin-user-copy">
              <strong>{{ auth()->user()->name }}</strong>
              <small>{{ '@'.auth()->user()->username }}</small>
            </span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="admin-user-dropdown" id="adminUserDropdown" hidden>
            <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-box-arrow-up-right"></i>
              View website
            </a>
            <button type="submit" form="admin-logout-form">
              <i class="bi bi-box-arrow-left"></i>
              Sign out
            </button>
          </div>
        </div>
      </div>
    </header>
    <div class="admin-content">
      @yield('content')
    </div>
  </div>

  <form id="admin-logout-form" method="post" action="{{ route('admin.logout') }}" hidden>
    @csrf
  </form>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.11/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.11/js/dataTables.bootstrap5.min.js"></script>
  @yield('scripts')
  <script>
    (function () {
      var menu = document.getElementById('adminUserMenu');
      var toggle = document.getElementById('adminUserToggle');
      var dropdown = document.getElementById('adminUserDropdown');
      function closeMenu() {
        menu.classList.remove('is-open');
        dropdown.hidden = true;
        toggle.setAttribute('aria-expanded', 'false');
      }
      function openMenu() {
        menu.classList.add('is-open');
        dropdown.hidden = false;
        toggle.setAttribute('aria-expanded', 'true');
      }
      toggle.addEventListener('click', function (event) {
        event.stopPropagation();
        if (menu.classList.contains('is-open')) closeMenu();
        else openMenu();
      });
      document.addEventListener('click', function (event) {
        if (!menu.contains(event.target)) closeMenu();
      });
      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') closeMenu();
      });

      var idleMs = 10 * 60 * 1000;
      var timer;
      var form = document.getElementById('admin-logout-form');
      function signOut() {
        if (form) form.submit();
      }
      function resetIdle() {
        clearTimeout(timer);
        timer = setTimeout(signOut, idleMs);
      }
      ['mousemove', 'keydown', 'click', 'scroll', 'touchstart'].forEach(function (eventName) {
        window.addEventListener(eventName, resetIdle, { passive: true });
      });
      resetIdle();
    })();
  </script>
</body>
</html>
