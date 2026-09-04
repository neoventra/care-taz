@extends('layouts.app')

@section('title', 'Book a Free Care Assessment | Caretaz Healthcare Nottingham')
@section('description', 'Book a free, no-obligation home care assessment with Caretaz Healthcare in Nottingham. Tell us what you need — we\'ll listen, explain your options and help you plan the next step.')
@section('body_class', 'page-appointment')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('contact-us') }}">Contact Us</a> <span>/</span> <span>Appointment</span></div>
        <p class="page-hero__brand">Caretaz Healthcare</p>
        <p class="eyebrow">Free Care Assessment</p>
        <h1>Let's talk about care — <span>without the pressure.</span></h1>
        <p>Booking an appointment is simply a conversation. Tell us what's going on at home, ask the questions that matter, and leave with a clearer picture of the support that could help — with no obligation to proceed.</p>
      </div>
    </section>

    <section class="section" id="book">
      <div class="container">
        <div class="book-focus">
          <div class="book-focus__info reveal">
            <p class="eyebrow">Start Here</p>
            <h2>Request your free assessment</h2>
            <p>Share a little about the situation and how we can reach you. A member of our Nottingham team will respond promptly to arrange a time that works — by phone or in person.</p>
            <p>Prefer to speak now? Call <a href="tel:03330344121">0333 034 4121</a> or email <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a>.</p>
            <ol class="book-focus__steps">
              <li>
                <span class="book-focus__num" aria-hidden="true">1</span>
                <div class="book-focus__step">
                  <strong>You reach out</strong>
                  <p>Use the form, call or email. Urgent needs are best handled by phone.</p>
                </div>
              </li>
              <li>
                <span class="book-focus__num" aria-hidden="true">2</span>
                <div class="book-focus__step">
                  <strong>We listen properly</strong>
                  <p>A free assessment explores routines, preferences, risks and the kind of help that would feel right.</p>
                </div>
              </li>
              <li>
                <span class="book-focus__num" aria-hidden="true">3</span>
                <div class="book-focus__step">
                  <strong>You decide the pace</strong>
                  <p>We agree a care plan together. Support only starts when you're ready.</p>
                </div>
              </li>
            </ol>
            <p style="margin-top:1.1rem;font-size:0.92rem;color:var(--muted);"><strong>Office:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
          </div>
          <form class="book-form reveal-right" data-appointment-form>
            <div class="book-form__glow" aria-hidden="true"></div>
            <p class="eyebrow" style="margin-bottom:0.85rem;">Booking form</p>
            <div class="form-grid">
              <div class="form-field"><label for="name">Your name</label><input id="name" name="name" autocomplete="name" required placeholder="Full name"></div>
              <div class="form-field"><label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" required placeholder="name@example.com"></div>
              <div class="form-field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" autocomplete="tel" required placeholder="Best number to reach you"></div>
              <div class="form-field"><label for="service">Care you're exploring</label>
                <select id="service" name="service" required>
                  <option value="">Select an option…</option>
                  <option>Hourly / visiting care</option>
                  <option>Overnight care</option>
                  <option>24-hour / live-in care</option>
                  <option>Urgent or short-notice care</option>
                  <option>Dementia care</option>
                  <option>Palliative / end-of-life care</option>
                  <option>Parkinson's support</option>
                  <option>Supported living</option>
                  <option>Not sure yet — I'd like advice</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-field form-field--full"><label for="message">Tell us a little about the situation</label><textarea id="message" name="message" rows="4" placeholder="Who needs support, what a typical day looks like, and anything urgent we should know…"></textarea></div>
            </div>
            <button class="btn btn--teal" type="submit">Request assessment</button>
            <p class="form-note">This is a request, not a commitment. For urgent cover, please call 0333 034 4121 directly.</p>
          </form>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">What You Can Expect</p>
          <h2>Why families feel confident booking with us</h2>
          <p>An assessment with Caretaz is designed to feel calm, practical and respectful — so you can make decisions with clearer information, not sales pressure.</p>
        </div>
        <div class="pick-grid">
          <article class="pick-card reveal">
            <p class="pick-card__num">01</p>
            <h3>Safeguarding first</h3>
            <p>DBS-checked carers, careful matching and clear safeguarding practices — so trust is built into every placement from day one.</p>
          </article>
          <article class="pick-card reveal">
            <p class="pick-card__num">02</p>
            <h3>People, not a rota</h3>
            <p>We look for carers with the right skill and temperament for your loved one — consistency matters more than a revolving door of faces.</p>
          </article>
          <article class="pick-card reveal">
            <p class="pick-card__num">03</p>
            <h3>Care that fits real life</h3>
            <p>Visit lengths and schedules are shaped around mornings, evenings, nights and weekends as they actually happen at home.</p>
          </article>
          <article class="pick-card reveal">
            <p class="pick-card__num">04</p>
            <h3>A plan that belongs to you</h3>
            <p>Every care plan starts with listening: preferences, routines, culture and what “a good day” looks like for the person receiving support.</p>
          </article>
          <article class="pick-card reveal">
            <p class="pick-card__num">05</p>
            <h3>Families kept in the loop</h3>
            <p>Clear, honest updates for clients and relatives — so nobody is left guessing about how care is going.</p>
          </article>
          <article class="pick-card reveal">
            <p class="pick-card__num">06</p>
            <h3>When things change quickly</h3>
            <p>We respond promptly when plans shift, including urgent cover where capacity allows — because life rarely waits for a perfect schedule.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section journey" aria-labelledby="process-heading">
      <div class="journey__mesh" aria-hidden="true"></div>
      <div class="container">
        <div class="journey__head reveal">
          <p class="eyebrow">After You Book</p>
          <h2 id="process-heading">From first message to care at home</h2>
          <p class="journey__lead">Three calm steps — always at your pace, with space to ask questions before anything begins.</p>
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
                <span class="journey-step__label">Step one</span>
                <h3>Get in touch</h3>
                <p>Send the form, email us or call. We'll acknowledge your enquiry and agree a convenient time to talk properly.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:1">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">02</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">Step two</span>
                <h3>Meet for assessment</h3>
                <p>We visit at home to understand needs, routines and hopes for care — then outline options and a transparent estimate.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:2">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">03</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">Step three</span>
                <h3>Begin when ready</h3>
                <p>If you choose to go ahead, we match a suitable carer and start support with a clear plan you both recognise.</p>
              </div>
            </li>
          </ol>
        </div>

        <div class="journey__cta reveal">
          <a class="btn btn--teal" href="#book">Back to the booking form</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="section care-spotlight" aria-labelledby="spotlight-heading">
      <div class="container care-spotlight__inner reveal">
        <div class="care-spotlight__copy">
          <p class="eyebrow">Still Weighing Things Up?</p>
          <h2 id="spotlight-heading">An assessment is a conversation — not a contract.</h2>
          <p>Many families contact us simply to understand what's possible. We'll explain how Caretaz works, what CQC regulation means for your peace of mind, and which services might fit — so you can decide with confidence.</p>
          <a class="btn btn--teal" href="{{ route('about-us') }}">Learn more about us</a>
        </div>
        <div class="care-spotlight__media">
          <div class="care-spotlight__shine" aria-hidden="true"></div>
          <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Caretaz carer offering calm, professional support at home">
        </div>
      </div>
    </section>

    <section class="section trust-seal" aria-labelledby="trust-heading">
      <div class="trust-seal__wash" aria-hidden="true"></div>
      <div class="container">
        <div class="trust-seal__card reveal-zoom">
          <div class="trust-seal__logos">
            <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
            <img src="{{ asset('assets/images/ico.png') }}" alt="ICO">
          </div>
          <div class="trust-seal__copy">
            <p class="eyebrow">Independent Oversight</p>
            <h3 id="trust-heading">Fully Regulated by The Care Quality Commission (CQC)</h3>
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
