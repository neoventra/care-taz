@extends('layouts.app')

@section('title', 'Page not found | Caretaz Healthcare Ltd.')
@section('body_class', '')

@section('content')
<main class="section" style="min-height:60vh;display:grid;place-items:center;text-align:center;padding:3rem 1.25rem;">
<div>
      <p class="eyebrow" style="margin-bottom:0.5rem;">404</p>
      <h1 style="margin-bottom:0.75rem;">Page not found</h1>
      <p style="margin-bottom:1.5rem;max-width:28rem;">That link may be outdated or mistyped. Head back to the homepage or browse our care services.</p>
      <p style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a class="btn btn--teal" href="{{ route('home') }}">Home</a>
        <a class="btn btn--outline-navy" href="{{ route('services.index') }}">Services</a>
        <a class="btn btn--outline-navy" href="{{ route('contact-us') }}">Contact</a>
      </p>
    </div>
</main>
@endsection
