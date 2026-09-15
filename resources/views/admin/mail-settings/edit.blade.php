@extends('admin.layouts.app')

@section('title', 'Mail settings')
@section('heading', 'Mail settings')
@section('kicker', 'SMTP')

@section('content')
  @if (session('status'))
    <div class="admin-flash">{{ session('status') }}</div>
  @endif

  <form method="post" action="{{ route('admin.mail-settings.update') }}" class="admin-panel" style="max-width:720px;">
    @csrf
    @method('PUT')

    <p style="margin:0 0 1rem;color:var(--admin-muted);font-size:0.9rem;">
      These settings are stored in the database and used by the site for outgoing email. Leave the password blank to keep the current one.
    </p>

    <div class="row g-3">
      <div class="col-md-8">
        <label class="admin-field-label" for="host">SMTP host</label>
        <input class="admin-input" id="host" name="host" value="{{ old('host', $settings->host) }}" required>
        @error('host')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-md-4">
        <label class="admin-field-label" for="port">Port</label>
        <input class="admin-input" id="port" name="port" type="number" min="1" max="65535" value="{{ old('port', $settings->port) }}" required>
        @error('port')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-md-4">
        <label class="admin-field-label" for="encryption">Security</label>
        <select class="admin-input" id="encryption" name="encryption" required>
          <option value="tls" @selected(old('encryption', $settings->encryption) === 'tls')>TLS</option>
          <option value="ssl" @selected(old('encryption', $settings->encryption) === 'ssl')>SSL</option>
          <option value="none" @selected(old('encryption', $settings->encryption) === 'none')>None</option>
        </select>
        @error('encryption')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-md-8">
        <label class="admin-field-label" for="username">SMTP username</label>
        <input class="admin-input" id="username" name="username" value="{{ old('username', $settings->username) }}" required autocomplete="username">
        @error('username')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-12">
        <label class="admin-field-label" for="password">SMTP password</label>
        <input class="admin-input" id="password" name="password" type="password" value="" autocomplete="new-password" placeholder="{{ $settings->exists && filled($settings->password) ? '•••••••••••• (leave blank to keep)' : 'App password' }}">
        @error('password')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-md-6">
        <label class="admin-field-label" for="from_address">From email</label>
        <input class="admin-input" id="from_address" name="from_address" type="email" value="{{ old('from_address', $settings->from_address) }}" required>
        @error('from_address')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
      <div class="col-md-6">
        <label class="admin-field-label" for="from_name">From display name</label>
        <input class="admin-input" id="from_name" name="from_name" value="{{ old('from_name', $settings->from_name) }}" required>
        @error('from_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
      </div>
    </div>

    <div style="margin-top:1.25rem;display:flex;gap:0.6rem;flex-wrap:wrap;">
      <button type="submit" class="admin-gold-btn">Save mail settings</button>
    </div>
  </form>
@endsection
