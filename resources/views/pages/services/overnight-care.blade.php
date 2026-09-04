@extends('layouts.app')

@section('title', 'Overnight Home Care in Nottingham | Caretaz Healthcare')
@section('description', 'Overnight care in Nottingham that keeps people safe and comfortable through the night — sleeping or waking cover from CQC-regulated Caretaz carers.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero" aria-labelledby="sd-hero-heading">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-evening-comfort.jpg')" aria-hidden="true"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span>
          <a href="{{ route('home') }}">Services</a> <span>/</span>
          <span>Overnight Care</span>
        </nav>
        <p class="sd-brand">Caretaz Healthcare · Overnight Home Care</p>
        <h1 id="sd-hero-heading">Safer nights. <em>Quieter</em> minds.</h1>
        <p class="sd-hero__lead">Night-time presence that protects sleep, safety and family peace of mind — without leaving home.</p>
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
            <strong>Nights</strong>
            <span class="sd-trust__label">Sleeping or waking</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Safe</strong>
            <span class="sd-trust__label">Checks &amp; reassurance</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Meds</strong>
            <span class="sd-trust__label">Night-time prompts</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated support</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="about-service">
      <div class="container">
        <div class="sd-split">
          <div class="sd-split__media reveal-left">
            <img src="{{ asset('assets/images/care-evening-comfort.jpg') }}" alt="Overnight Care at home with Caretaz Healthcare" width="720" height="540" loading="eager">
            <div class="sd-split__float">
              <strong>Night</strong>
              <span>Sleeping or waking cover</span>
            </div>
          </div>
          <div class="sd-split__copy reveal-right">
            <p class="eyebrow">About this service</p>
            <h2 id="about-service">When darkness arrives, support stays.</h2>
            <p>Overnight care from Caretaz means a trained carer is present through the night so your loved one can remain at home with autonomy intact.</p>
            <p>Carers typically arrive before bedtime and support short-term challenges or ongoing night needs — from bathroom visits and repositioning to night medication prompts.</p>
            <p>Whether you need a sleeping night with response on call, or a waking night with active monitoring, we design cover that matches risk and preference.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i></i> Bedtime routines</span>
              <span class="sd-pill"><i></i> Night checks</span>
              <span class="sd-pill"><i></i> Toileting support</span>
              <span class="sd-pill"><i></i> Family reassurance</span>
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
          <h2 id="includes-heading">Support shaped around real life</h2>
          <p>Every package is personalised after assessment — these are the building blocks families ask for most.</p>
        </div>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Evening</span>
            <h3>Bedtime &amp; morning routines</h3>
            <p>Settling for sleep and a calm start to the day.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Safety</span>
            <h3>Night checks &amp; response</h3>
            <p>Monitoring and prompt help if someone wakes unsettled.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Comfort</span>
            <h3>Toileting &amp; repositioning</h3>
            <p>Support that protects skin integrity and dignity overnight.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication prompts</h3>
            <p>Night-time doses given or prompted as prescribed.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Calm</span>
            <h3>Reassurance &amp; company</h3>
            <p>A steady presence when anxiety spikes after dark.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Flex</span>
            <h3>Short or ongoing cover</h3>
            <p>Temporary nights after illness, or regular overnight packages.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink" aria-labelledby="why-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose this</p>
          <h2 id="why-heading">Impact you can feel at home</h2>
          <p>More than a service label — a standard of how we show up.</p>
        </div>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Sleeping or waking nights</h3>
            <p>Choose the level of overnight alertness that matches need.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Safer nights</h3>
            <p>Reduce fall risk and night-time distress at home.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Medication support</h3>
            <p>Prompts and assistance when night doses matter.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Family reassurance</h3>
            <p>Rest knowing someone trusted is present.</p>
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
            <p>Call, email or book online. Tell us what you need and how soon.</p>
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
            <summary>What is the difference between sleeping and waking nights?</summary>
            <div class="sd-faq__body">A sleeping night means the carer can rest but responds when needed. A waking night means the carer stays alert throughout for higher dependency or frequent support.</div>
          </details>
          <details class="reveal">
            <summary>Can overnight care be temporary?</summary>
            <div class="sd-faq__body">Yes. Many families book nights after hospital discharge, during illness, or while arranging longer-term packages.</div>
          </details>
          <details class="reveal">
            <summary>Will overnight care disrupt the household?</summary>
            <div class="sd-faq__body">We work around your home’s layout and routines, with clear handovers so mornings feel settled, not chaotic.</div>
          </details>
          <details class="reveal">
            <summary>Can overnight link with daytime visits?</summary>
            <div class="sd-faq__body">Absolutely. Overnight cover often sits alongside hourly daytime care for a fuller safety net.</div>
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
          <a class="reveal" href="{{ route('services.show', '24-hour-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="24-Hour Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Continuous</span>
              <h3>24-Hour Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="Hourly Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Daytime</span>
              <h3>Hourly Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'dementia-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Dementia Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Specialist</span>
              <h3>Dementia Care</h3>
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
            <h2>Sleep easier knowing nights are covered.</h2>
            <p>Tell us what nights feel hardest — we’ll recommend sleeping or waking cover that fits.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="{{ route('appointment') }}">Make an Appointment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="Caretaz caregiver" width="560" height="360" loading="lazy">
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
                <option selected>Overnight Care</option>
                <option>24-Hour Care</option>
                <option>Dementia Care</option>
                <option>Parkinson's Care</option>
                <option>Stroke Care</option>
                <option>Cancer Care</option>
                <option>Palliative / End-of-Life Care</option>
                <option>Supported Living</option>
                <option>Live-In Care For Couples</option>
                <option>Hospital to Home Care</option>
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
