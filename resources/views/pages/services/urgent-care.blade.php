@extends('layouts.app')

@section('title', 'Urgent Home Care in Nottingham | Same-Day Short-Notice Cover | Caretaz Healthcare')
@section('description', 'Urgent home care in Nottingham — same-day and short-notice cover, typically arranged within 24–48 hours. CQC-regulated carers when plans change overnight.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/urgent-care-banner.jpg')"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>Urgent Care</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Same-day &amp; short-notice</span>
        <h1>When plans change — care that <em>moves fast</em></h1>
        <p class="sd-hero__lead">Urgent home care across Nottingham for same-day and short-notice needs — typically arranged within 24–48 hours so your loved one stays safe and settled when life does not wait.</p>
        <div class="btn-row">
          <a class="btn btn--teal" href="#appointment">Book assessment</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="sd-trust" aria-label="Trust highlights">
      <div class="container">
        <div class="sd-trust__grid">
          <div class="sd-trust__card reveal">
            <strong>24–48h</strong>
            <span class="sd-trust__label">Typical start window</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Same-day</strong>
            <span class="sd-trust__label">Where capacity allows</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated even at speed</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Nottingham</strong>
            <span class="sd-trust__label">Local rapid response</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-split reveal">
          <div class="sd-split__media">
            <img src="{{ asset('assets/images/urgent-care-banner.jpg') }}" alt="Urgent short-notice home care support arriving in Nottingham" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>Fast</strong>
              <span>Cover when you need it</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Short-notice visiting care</p>
            <h2>Prompt cover without cutting corners</h2>
            <p>A family carer falls ill. Discharge comes sooner than expected. A regular agency cancels. Urgent care is for those moments — we mobilise CQC-regulated carers for personal care, meals, medication prompts and reassurance as quickly as capacity allows.</p>
            <p>Most packages begin within 24–48 hours after a rapid assessment. Same-day starts are possible when we have available carers and a clear picture of needs. Speed never means skipping safeguarding, documentation or dignity.</p>
            <p>Call us early in the day if you can — the sooner we know, the sooner we can match cover across Nottingham.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Same-day where possible</span>
              <span class="sd-pill"><i aria-hidden="true"></i> 24–48h typical</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Meals &amp; meds</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Temporary cover</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Bridge to ongoing</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Request urgent cover</a>
              <a class="btn btn--navy" href="tel:03330344121">Call now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">What's included</p>
          <h2>What urgent visits can cover</h2>
          <p>Scoped quickly at assessment — focused on safety and settling someone at home.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Speed</span>
            <h3>Rapid mobilisation</h3>
            <p>Short-notice rota filling and a fast path from first call to the first visit at the door.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care</h3>
            <p>Washing, dressing and toileting support so dignity is protected even when arrangements are sudden.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Nutrition</span>
            <h3>Meals &amp; hydration</h3>
            <p>Hot food, snacks and drink prompts when nobody else can get there in time.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication prompts</h3>
            <p>Timely reminders aligned with what you tell us from pharmacy blister packs or charts.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Safety</span>
            <h3>Welfare &amp; presence</h3>
            <p>Reassurance visits that reduce isolation and spot risks until longer-term care is in place.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Continuity</span>
            <h3>Bridge to planned care</h3>
            <p>Urgent cover can roll into hourly, overnight or hospital-to-home packages without changing provider.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>Fast response you can still trust</h2>
          <p>Urgency with regulated standards — not a scramble that cuts corners.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Local capacity</h3>
            <p>Nottingham-based team who can often redeploy carers the same day or next.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Honest timelines</h3>
            <p>We tell you what is realistic within 24–48 hours — not empty promises.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Same CQC bar</h3>
            <p>Urgent carers meet the same recruitment and supervision standards as planned care.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>One provider after</h3>
            <p>Stay with us for ongoing visiting care once the crisis settles.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How urgent care begins</h2>
          <p>Phone first when time is tight — then we move.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Call now</h3>
            <p>Telephone 0333 034 4121 with dates, address and what support is needed today or tomorrow.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Rapid assessment</h3>
            <p>We gather essentials on risk, access and routines so carers arrive prepared.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Cover starts</h3>
            <p>Matched carers begin visits — typically within 24–48 hours, sooner when capacity allows.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>Urgent care — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>How quickly can urgent care start?</summary>
            <div class="sd-faq__body">We aim to arrange same-day or short-notice cover where capacity allows. Most urgent packages begin within 24–48 hours after we understand needs and complete a rapid assessment.</div>
          </details>
          <details>
            <summary>What situations is urgent care for?</summary>
            <div class="sd-faq__body">Sudden carer illness, delayed hospital discharge support, a family emergency, or a gap while longer-term care is organised — any time someone needs safe help at home without waiting weeks.</div>
          </details>
          <details>
            <summary>Is urgent care still CQC-regulated?</summary>
            <div class="sd-faq__body">Yes. Speed does not lower standards. Caretaz Healthcare is CQC-registered; urgent carers are recruited, trained and supervised like our planned visiting services.</div>
          </details>
          <details>
            <summary>Can urgent cover become ongoing care?</summary>
            <div class="sd-faq__body">Often yes. Many families start urgently and then settle into a regular hourly, overnight or hospital-to-home plan under the same provider.</div>
          </details>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Related services</p>
          <h2>You may also need</h2>
        </header>
        <div class="sd-related">
          <a class="reveal" href="{{ route('services.show', 'hospital-to-home') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Discharge</span>
              <h3>Hospital to Home Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Visiting care</span>
              <h3>Hourly Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'carer-respite') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Family cover</span>
              <h3>Carer Respite</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="section section--mist">
      <div class="container">
        <div class="cqc-banner reveal-zoom">
          <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
          <div>
            <h3>Fully Regulated by The Care Quality Commission (CQC)</h3>
            <p>Caretaz Healthcare is registered with and regulated by the CQC, the independent body overseeing health and social care in England, with our practices routinely assessed against national standards.</p>
            <p>We're also proudly registered with the ICO, reflecting our commitment to protecting your personal information.</p>
          </div>
          <div class="badge-row"><img src="{{ asset('assets/images/ico.png') }}" alt="ICO"></div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-finale reveal">
          <div>
            <p class="eyebrow" style="color:var(--teal);">Need help soon?</p>
            <h2>Call us — we will move as fast as we can</h2>
            <p>Telephone first for urgent cover. Assessment forms welcome for near-term starts.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="tel:03330344121">Call 0333 034 4121</a>
              <a class="btn btn--outline" href="#appointment">Book assessment</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="Urgent home care in Nottingham" width="480" height="320" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment with us</h2>
          <p>For same-day needs, please telephone. Otherwise we can arrange a visit quickly.</p>
          <p><strong>Phone:</strong> <a href="tel:03330344121">0333 034 4121</a><br>
             <strong>Email:</strong> <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a><br>
             <strong>Address:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
        </div>
        <form class="form-card reveal" data-appointment-form>
          <div class="form-grid">
            <div class="form-field"><label for="name">Name</label><input id="name" name="name" required autocomplete="name"></div>
            <div class="form-field"><label for="email">Email</label><input id="email" name="email" type="email" required autocomplete="email"></div>
            <div class="form-field"><label for="phone">Phone</label><input id="phone" name="phone" required autocomplete="tel"></div>
            <div class="form-field"><label for="service">Select Services</label>
              <select id="service" name="service" required>
                <option>24-Hour Care</option>
                <option>Hourly Care</option>
                <option>Overnight Care</option>
                <option>Supported Living</option>
                <option selected>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option>Hospital to Home</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us when you need cover and what support is urgent…"></textarea></div>
          </div>
          <button class="btn btn--teal" type="submit" style="margin-top:.75rem;width:100%;">Book my free assessment</button>
          <p class="form-note">For urgent needs, please telephone 0333 034 4121.</p>
        </form>
      </div>
    </section>
</main>
@endsection

@push('scripts')
  <script src="{{ versioned_asset('js/service-detail.js') }}"></script>
@endpush
