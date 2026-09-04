<div class="topbar">
    <div class="container topbar__inner">
      <div class="topbar__contacts">
        <a href="tel:03330344121">0333 034 4121</a>
        <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a>
      </div>
      <div class="topbar__social">
        <span>Follow Us :</span>
        <a class="social-dot" href="#" aria-label="Facebook">f</a>
        <a class="social-dot" href="#" aria-label="LinkedIn">in</a>
        <a class="social-dot" href="#" aria-label="YouTube">yt</a>
      </div>
    </div>
  </div>
  <header class="site-header">
    <div class="container site-header__inner">
      <a class="logo" href="{{ route('home') }}" aria-label="Caretaz Healthcare Ltd. home">
        <img src="{{ asset('assets/images/logo-ltd-transparent.png') }}" alt="Caretaz Healthcare Ltd.">
      </a>
      <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
      <nav class="nav" aria-label="Primary">
        <a @if(request()->routeIs('home')) class="is-active" @endif href="{{ route('home') }}">Home</a>
        <a @if(request()->routeIs('about-us')) class="is-active" @endif href="{{ route('about-us') }}">About Us</a>
        <div class="nav__dropdown">
          <a @if(request()->routeIs('services.*')) class="is-active" @endif href="{{ route('services.index') }}">Services</a>
          <div class="nav__menu">
            <a href="{{ route('services.show', 'urgent-care') }}">Urgent Care</a>
            <a href="{{ route('services.show', '24-hour-care') }}">24-Hour Care</a>
            <a href="{{ route('services.show', 'hourly-care') }}">Hourly Care</a>
            <a href="{{ route('services.show', 'live-in-care-for-couples') }}">Live-In Care For Couples</a>
            <a href="{{ route('services.show', 'overnight-care') }}">Overnight Care</a>
            <a href="{{ route('services.show', 'palliative-care') }}">Palliative / End-of-Life Care</a>
            <a href="{{ route('services.show', 'dementia-care') }}">Dementia Care</a>
            <a href="{{ route('services.show', 'parkinsons-disease') }}">Parkinson’s Disease</a>
            <a href="{{ route('services.show', 'supported-living') }}">Supported Living</a>
            <a href="{{ route('services.show', 'holiday-companionship') }}">Holiday Companionship Care Breaks</a>
            <a href="{{ route('services.show', 'carer-respite') }}">Carer Respite Break Cover</a>
            <a href="{{ route('services.show', 'stroke-care') }}">Stroke Care</a>
            <a href="{{ route('services.show', 'cancer-care') }}">Cancer Care</a>
            <a href="{{ route('services.show', 'hospital-to-home') }}">Hospital to Home Care</a>
            <a href="{{ route('services.show', 'companionship-care') }}">Companionship Care</a>
            <a href="{{ route('services.show', 'housekeeping-services') }}">Housekeeping Services</a>
          </div>
        </div>
        <a @if(request()->routeIs('pricing')) class="is-active" @endif href="{{ route('pricing') }}">Pricing</a>
        <a @if(request()->routeIs('faqs')) class="is-active" @endif href="{{ route('faqs') }}">FAQs</a>
        <a @if(request()->routeIs('join-us')) class="is-active" @endif href="{{ route('join-us') }}">Join Us</a>
        <div class="nav__dropdown">
          <a @if(request()->routeIs('contact-us')) class="is-active" @endif href="{{ route('contact-us') }}">Contact Us</a>
          <div class="nav__menu">
            <a href="{{ route('appointment') }}">Appointment</a>
          </div>
        </div>
      </nav>
      <div class="header-cta"><a class="btn btn--teal" href="{{ route('appointment') }}">Make an Appointment</a></div>
    </div>
  </header>
