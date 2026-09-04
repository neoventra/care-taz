<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin login | Caretaz Healthcare</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="{{ versioned_asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="admin-login-body">
  <div class="login-shell">
    <aside class="login-aside" aria-hidden="false">
      <div class="login-aside__glow" aria-hidden="true"></div>
      <div class="login-aside__brand">
        <img src="{{ asset('assets/images/logo-ltd-transparent.png') }}" alt="Caretaz Healthcare">
        <span>Care operations console</span>
      </div>
      <h2>Look after the team that looks after families.</h2>
      <p>Secure admin access for enquiries, content and day-to-day care coordination.</p>
      <ul class="login-aside__points">
        <li><i class="bi bi-shield-check"></i> Idle logout after 10 minutes</li>
        <li><i class="bi bi-inbox"></i> Contact enquiries inbox</li>
        <li><i class="bi bi-journal-richtext"></i> Blog publishing tools</li>
      </ul>
    </aside>

    <div class="login-card">
      <div class="login-brand">
        <span class="admin-brand-mark-wrap">
          <img src="{{ asset('assets/images/logo-ltd-transparent.png') }}" alt="" class="admin-brand-mark">
        </span>
        <div>
          <strong>Caretaz</strong>
          <small>Staff sign-in</small>
        </div>
      </div>

      <h1>Welcome back</h1>
      <p class="login-lead">Use your admin username and password to continue.</p>

      @if (session('status'))
        <div class="login-alert">{{ session('status') }}</div>
      @endif

      @if ($errors->any())
        <div class="login-alert is-error">{{ $errors->first() }}</div>
      @endif

      <form method="post" action="{{ route('admin.login.store') }}" class="login-form">
        @csrf
        <label for="username">Username</label>
        <div class="login-input">
          <i class="bi bi-person" aria-hidden="true"></i>
          <input id="username" name="username" type="text" value="{{ old('username') }}" required autofocus autocomplete="username" placeholder="admin">
        </div>

        <label for="password">Password</label>
        <div class="login-input">
          <i class="bi bi-lock" aria-hidden="true"></i>
          <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="••••••••">
        </div>

        <button type="submit">Enter admin panel <i class="bi bi-arrow-right" aria-hidden="true"></i></button>
      </form>

      <p class="login-foot">
        <a href="{{ route('home') }}" target="_blank" rel="noopener">View public website</a>
      </p>
    </div>
  </div>
</body>
</html>
