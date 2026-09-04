@extends('layouts.app')

@section('title', 'Hospital to Home Care Nottingham | Caretaz Healthcare')
@section('description', 'Hospital to Home care in Nottingham from Caretaz Healthcare — smoother discharge support with personal care, meals, medication prompts and mobility help from ward to front door.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero" aria-labelledby="sd-hero-heading">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-health-check.jpg')" aria-hidden="true"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span>
          <a href="{{ route('home') }}">Services</a> <span>/</span>
          <span>Hospital to Home</span>
        </nav>
        <p class="sd-brand">Caretaz Healthcare · Hospital Discharge Support</p>
        <h1 id="sd-hero-heading">From ward to front door — <em>smoother</em>.</h1>
        <p class="sd-hero__lead">Hospital to Home care across Nottingham that bridges clinical discharge with settled support at home — so recovery starts safely, not alone.</p>
        <div class="btn-row">
          <a class="btn btn--teal" href="#appointment">Book Assessment</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="sd-trust">
      <div class="container">
        <div class="sd-trust__grid">
          <div class="sd-trust__card reveal">
            <strong>Discharge-ready</strong>
            <span class="sd-trust__label">Support when you leave</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Fully regulated</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Nottingham</strong>
            <span class="sd-trust__label">City &amp; surrounding areas</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Fast start</strong>
            <span class="sd-trust__label">Same-day where possible</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="about-service">
      <div class="container">
        <div class="sd-split">
          <div class="sd-split__media reveal-left">
            <img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="Hospital to Home care after discharge with Caretaz Healthcare" width="720" height="540" loading="eager">
            <div class="sd-split__float">
              <strong>Settled</strong>
              <span>From discharge day</span>
            </div>
          </div>
          <div class="sd-split__copy reveal-right">
            <p class="eyebrow">About this service</p>
            <h2 id="about-service">Support that starts when hospital ends.</h2>
            <p>Leaving hospital can feel abrupt. Hospital to Home care from Caretaz Healthcare gives people the practical help they need after discharge — personal care, meals, medication prompts and mobility support — so the first days at home feel managed, not overwhelming.</p>
            <p>We coordinate with family and, where helpful, ward teams so routines, risks and preferences are understood before the front door opens. That continuity reduces gaps that can raise readmission risk.</p>
            <p>Whether discharge is planned or sudden, our Nottingham team aims to put carers in place quickly so recovery can focus on healing — not scrambling for help.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i></i> Discharge support</span>
              <span class="sd-pill"><i></i> Personal care</span>
              <span class="sd-pill"><i></i> Meals &amp; meds</span>
              <span class="sd-pill"><i></i> Mobility help</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--navy" href="{{ route('appointment') }}">Make Appointment</a>
              <a class="btn btn--outline-teal" href="{{ route('home') }}">All Services</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog" aria-labelledby="includes-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">What’s included</p>
          <h2 id="includes-heading">Support shaped around discharge day</h2>
          <p>Every package is personalised after assessment — these are the building blocks families ask for most after hospital.</p>
        </div>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Timing</span>
            <h3>Same-day start where possible</h3>
            <p>We work to carers arriving as soon as discharge is confirmed — often the same day.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care &amp; dressing</h3>
            <p>Wash, dress and settle with dignity while strength and confidence return.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Nutrition</span>
            <h3>Meals &amp; kitchen support</h3>
            <p>Preparation, prompting and companionship at mealtimes so nutrition stays on track.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Wellbeing</span>
            <h3>Medication prompts</h3>
            <p>Timely reminders aligned with discharge medicines so nothing is missed at home.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Mobility</span>
            <h3>Moving with confidence</h3>
            <p>Steadying assistance around the home while recovery and confidence rebuild.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Coordination</span>
            <h3>Family &amp; ward liaison</h3>
            <p>Clear updates for relatives and, where useful, handover notes that bridge clinical to home.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink" aria-labelledby="why-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose this</p>
          <h2 id="why-heading">Impact you can feel after discharge</h2>
          <p>More than a service label — a standard of how we show up.</p>
        </div>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Continuity of care</h3>
            <p>Familiar carers and a clear plan so the jump from ward to home feels joined-up.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Local Nottingham team</h3>
            <p>Carers who know the area and can respond quickly around discharge windows.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Regulated standards</h3>
            <p>CQC-registered delivery with trained, vetted carers you can trust.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Clinical to home bridge</h3>
            <p>Practical support that turns discharge advice into safe daily routines.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="process-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">How it starts</p>
          <h2 id="process-heading">Three clear steps to care</h2>
          <p>No jargon. No pressure — just a path that feels human.</p>
        </div>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">01</div>
            <h3>Make contact</h3>
            <p>Call, email or book online. Tell us the discharge date and what support is needed.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">02</div>
            <h3>Assessment</h3>
            <p>We meet at home (or virtually) to understand routines, risks and goals.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">03</div>
            <h3>Care begins</h3>
            <p>Agree the plan, meet your carers, and start support that feels settled.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog" aria-labelledby="faq-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">Good to know</p>
          <h2 id="faq-heading">Questions families ask first</h2>
          <p>Straight answers before you book.</p>
        </div>
        <div class="sd-faq">
          <details class="reveal">
            <summary>How quickly can Hospital to Home care start after discharge?</summary>
            <div class="sd-faq__body">Where possible we aim for same-day or next-day start once discharge timing is confirmed. Call us as soon as a discharge date is discussed so we can assess and schedule carers ready for arrival home.</div>
          </details>
          <details class="reveal">
            <summary>What support do you provide after leaving hospital?</summary>
            <div class="sd-faq__body">Personal care, meals, medication prompts, mobility assistance around the home, and liaison with family and ward staff so the transition from clinical care to home life feels coordinated and calm.</div>
          </details>
          <details class="reveal">
            <summary>Can Hospital to Home care help reduce readmission risk?</summary>
            <div class="sd-faq__body">Yes. Early support with daily living, medication prompts and mobility helps people settle safely after discharge — addressing common gaps that can lead to unplanned returns to hospital.</div>
          </details>
          <details class="reveal">
            <summary>Is Hospital to Home care CQC-regulated?</summary>
            <div class="sd-faq__body">Yes. All Caretaz discharge support is delivered under our CQC registration by trained, vetted carers based in Nottingham.</div>
          </details>
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="related-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">Explore further</p>
          <h2 id="related-heading">Related care pathways</h2>
          <p>Many families combine services as needs evolve.</p>
        </div>
        <div class="sd-related">
          <a class="reveal" href="{{ route('services.show', 'urgent-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Urgent Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Rapid</span>
              <h3>Urgent Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Hourly Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Visiting</span>
              <h3>Hourly Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'overnight-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-evening-comfort.jpg') }}" alt="Overnight Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Night support</span>
              <h3>Overnight Care</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <div class="cqc-banner reveal-zoom">
          <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
          <div>
            <h3>Fully Regulated by The Care Quality Commission (CQC)</h3>
            <p>Caretaz Healthcare is registered with and regulated by the CQC, the independent body overseeing health and social care in England, with our practices routinely assessed against national standards.</p>
            <p>We're also proudly registered with the ICO, reflecting our commitment to protecting your personal information.</p>
          </div>
          <div class="badge-row"><img src="{{ asset('assets/images/ico.png') }}" alt="ICO registered"></div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-finale reveal">
          <div>
            <p class="eyebrow" style="color:var(--teal);">Ready when you are</p>
            <h2>Ready for a smoother discharge home?</h2>
            <p>Tell us the expected discharge date — we’ll propose clear Hospital to Home support that settles recovery from day one.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="{{ route('appointment') }}">Make an Appointment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Hospital to Home caregiver support" width="560" height="360" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment</h2>
          <p>Share a few details and we’ll arrange a conversation as soon as possible. For urgent needs, please telephone.</p>
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
                <option>Urgent Care</option>
                <option>Hourly Care</option>
                <option>Overnight Care</option>
                <option>24-Hour Care</option>
                <option>Dementia Care</option>
                <option>Parkinson's Care</option>
                <option>Stroke Care</option>
                <option>Cancer Care</option>
                <option>Palliative / End-of-Life Care</option>
                <option>Supported Living</option>
                <option>Live-In Care For Couples</option>
                <option>Hospital to Home Care</option>
                <option selected>Hospital to Home</option>
                <option>Companionship Care</option>
                <option>Carer Respite</option>
                <option>Holiday Companionship</option>
                <option>Housekeeping Services</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us a little about the support you need…"></textarea></div>
          </div>
          <button class="btn btn--teal" type="submit" style="margin-top:.75rem;">Make Appointment</button>
          <p class="form-note">For urgent needs, please telephone 0333 034 4121.</p>
        </form>
      </div>
    </section>
</main>
@endsection

@push('scripts')
  <script src="{{ versioned_asset('js/service-detail.js') }}"></script>
@endpush
