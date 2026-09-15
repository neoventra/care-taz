@extends('layouts.app')

@section('title', 'Contact Us | Caretaz Healthcare')
@section('description', 'Contact Caretaz Healthcare in Nottingham — phone, email or send a message.')
@section('body_class', 'page-contact')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <span>Contact Us</span></div>
        <p class="page-hero__brand">Caretaz Healthcare</p>
        <p class="eyebrow">Get In Touch</p>
        <h1>Don't Hesitate To Call For Our Care Services</h1>
        <p>We respond to all queries promptly. Stay in touch with our Nottingham care team.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="contact-hub">
          <article class="hub-card reveal">
            <div class="hub-card__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <strong>Location</strong>
            <p>Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
          </article>
          <article class="hub-card reveal">
            <div class="hub-card__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <strong>Email</strong>
            <p><a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a></p>
          </article>
          <article class="hub-card reveal">
            <div class="hub-card__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <strong>Call</strong>
            <p><a href="tel:03330344121">0333 034 4121</a></p>
          </article>
        </div>

        <div class="contact-split">
          <div class="contact-split__visual reveal-left">
            <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Contact Caretaz Healthcare">
            <div class="perk-stack">
              <span>Assessments arranged promptly</span>
              <span>Advice on suitable care packages</span>
              <span>Support for families planning care</span>
              <span>Urgent cover discussions by phone</span>
            </div>
          </div>
          <form class="book-form" id="contactForm" action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="book-form__glow" aria-hidden="true"></div>
            <div class="form-grid">
              <div class="form-field"><label for="name">Name</label><input id="name" name="name" required autocomplete="name" maxlength="255" placeholder="Your full name"></div>
              <div class="form-field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" inputmode="numeric" pattern="[0-9]+" title="Please enter numbers only" required autocomplete="tel" maxlength="15" placeholder="e.g. 07123456789"></div>
              <div class="form-field form-field--full"><label for="email">Email</label><input id="email" name="email" type="email" required autocomplete="email" maxlength="255" placeholder="you@example.com"></div>
              <div class="form-field form-field--full"><label for="subject">Subject</label><input id="subject" name="subject" required maxlength="255" placeholder="What is your enquiry about?"></div>
              <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" required maxlength="800" placeholder="Tell us a little about the care support you need…"></textarea></div>
              <div class="form-field form-field--full captcha-field">
                <label for="captcha">Security check</label>
                <div class="captcha-row">
                  <img src="{{ captcha_src() }}" alt="Captcha" id="captchaImage" class="captcha-image" width="260" height="52">
                  <button type="button" class="captcha-refresh" id="captchaRefresh" aria-label="Reload captcha">↻</button>
                </div>
                <input id="captcha" name="captcha" type="text" required autocomplete="off" inputmode="numeric" placeholder="Type the answer">
              </div>
            </div>
            <button class="btn btn--teal" type="submit" id="contactSubmit">Send My Message</button>
            <p class="form-note">If your enquiry is urgent, please telephone 0333 034 4121.</p>
            <div class="success-msg" id="successMsg" hidden>
              <strong>Message received.</strong>
              <span>Thank you — a member of the team will be in touch shortly.</span>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="section section--navy">
      <div class="container">
        <div class="section-head">
          <h2>Office Details</h2>
        </div>
        <div class="office-strip">
          <article class="office-tile reveal">
            <h3>Address</h3>
            <p>Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
          </article>
          <article class="office-tile reveal">
            <h3>Phone &amp; Email</h3>
            <p>0333 034 4121<br><a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a></p>
          </article>
          <article class="office-tile reveal">
            <h3>Website</h3>
            <p><a href="https://www.caretazhealthcare.co.uk/">www.caretazhealthcare.co.uk</a><br>Registered with CQC &amp; ICO</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section care-spotlight" aria-labelledby="contact-spotlight-heading">
      <div class="container care-spotlight__inner reveal">
        <div class="care-spotlight__copy">
          <p class="eyebrow">24/7 Caregiver</p>
          <h2 id="contact-spotlight-heading">We are dedicated to maintaining quality in personal care</h2>
          <p>Our caregivers respond every time with a big warm smile. We guarantee a safe environment for your loved ones.</p>
          <a class="btn btn--teal" href="{{ route('about-us') }}">Discover More</a>
        </div>
        <div class="care-spotlight__media">
          <div class="care-spotlight__shine" aria-hidden="true"></div>
          <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Caregiver">
        </div>
      </div>
    </section>

    <section class="section journey" aria-labelledby="contact-process-heading">
      <div class="journey__mesh" aria-hidden="true"></div>
      <div class="container">
        <div class="journey__head reveal">
          <p class="eyebrow">Our Approach</p>
          <h2 id="contact-process-heading">Our Home Care Process</h2>
          <p class="journey__lead">From first conversation to care in the home — a clear path designed to feel calm, personal and in your control.</p>
        </div>

        <div class="journey__track" data-journey>
          <svg class="journey__path" viewBox="0 0 1000 120" preserveAspectRatio="none" aria-hidden="true">
            <path class="journey__path-bg" pathLength="1" d="M80 60 C 220 60, 280 60, 500 60 S 780 60, 920 60"/>
            <path class="journey__path-draw" pathLength="1" data-journey-line d="M80 60 C 220 60, 280 60, 500 60 S 780 60, 920 60"/>
          </svg>

          <ol class="journey__steps">
            <li class="journey-step reveal" data-journey-step style="--i:0">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">01</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">1st Step</span>
                <h3>Make Appointment</h3>
                <p>Fill in the form, send us an email or book a call to discuss your requirements.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:1">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">02</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">2nd Step</span>
                <h3>Schedule Assessment</h3>
                <p>We will arrange an in-person assessment to discuss your care needs.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:2">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">03</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">3rd Step</span>
                <h3>Start the Care</h3>
                <p>Once we agree on a care plan and other considerations, we will start the care.</p>
              </div>
            </li>
          </ol>
        </div>

        <div class="journey__cta reveal">
          <a class="btn btn--teal" href="{{ route('appointment') }}">Book your first step</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="section trust-seal" aria-labelledby="contact-trust-heading">
      <div class="trust-seal__wash" aria-hidden="true"></div>
      <div class="container">
        <div class="trust-seal__card reveal-zoom">
          <div class="trust-seal__logos">
            <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
            <img src="{{ asset('assets/images/ico.png') }}" alt="ICO">
          </div>
          <div class="trust-seal__copy">
            <p class="eyebrow">Independent Oversight</p>
            <h3 id="contact-trust-heading">Fully Regulated by The Care Quality Commission (CQC)</h3>
            <p>Caretaz Healthcare is registered with and regulated by the CQC, the independent body overseeing health and social care in England, with our practices routinely assessed against national standards.</p>
            <p>We're also proudly registered with the ICO, reflecting our commitment to protecting your personal information.</p>
          </div>
          <div class="trust-seal__marks" aria-hidden="true">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
(function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  const successMsg = document.getElementById('successMsg');
  const submitBtn = document.getElementById('contactSubmit');
  const originalLabel = submitBtn.innerHTML;
  const phoneInput = document.getElementById('phone');
  const captchaImage = document.getElementById('captchaImage');
  const captchaRefresh = document.getElementById('captchaRefresh');
  const captchaSrcBase = '{{ url("captcha/default") }}';

  function digitsOnly(value) {
    return String(value || '').replace(/\D+/g, '');
  }

  phoneInput.addEventListener('input', function () {
    this.value = digitsOnly(this.value);
  });

  phoneInput.addEventListener('paste', function (e) {
    e.preventDefault();
    var pasted = (e.clipboardData || window.clipboardData).getData('text');
    var start = this.selectionStart;
    var end = this.selectionEnd;
    var next = digitsOnly(this.value.slice(0, start) + pasted + this.value.slice(end)).slice(0, this.maxLength || 15);
    this.value = next;
  });

  function refreshCaptcha() {
    captchaImage.src = captchaSrcBase + '?' + Date.now();
    const captchaInput = document.getElementById('captcha');
    if (captchaInput) captchaInput.value = '';
  }

  function setSubmitting(isSubmitting) {
    submitBtn.disabled = isSubmitting;
    submitBtn.setAttribute('aria-busy', isSubmitting ? 'true' : 'false');
    if (isSubmitting) {
      submitBtn.innerHTML = '<span class="btn-spinner" aria-hidden="true"></span><span>Sending…</span>';
    } else {
      submitBtn.innerHTML = originalLabel;
    }
  }

  captchaRefresh.addEventListener('click', refreshCaptcha);

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    setSubmitting(true);
    fetch(form.action, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        'X-Requested-With': 'XMLHttpRequest'
      },
      body: new FormData(form)
    })
      .then(function (res) {
        return res.json().then(function (data) { return { ok: res.ok, data: data }; });
      })
      .then(function (result) {
        refreshCaptcha();
        if (!result.ok) {
          var firstError = result.data.errors
            ? Object.values(result.data.errors)[0][0]
            : (result.data.message || 'Please check the form and try again.');
          alert(firstError);
          return;
        }
        successMsg.hidden = false;
        form.reset();
        successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
      })
      .catch(function () {
        refreshCaptcha();
        alert('Something went wrong. Please try again.');
      })
      .finally(function () {
        setSubmitting(false);
      });
  });
})();
</script>
@endpush
