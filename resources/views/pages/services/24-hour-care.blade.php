@extends('layouts.app')

@section('title', '24-Hour Home Care in Nottingham | Continuous Care at Home | Caretaz Healthcare')
@section('description', '24-hour home care in Nottingham with rotating carers — continuous support as a care home alternative. CQC-regulated round-the-clock care from Caretaz Healthcare.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/hero-banner.jpg')"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>24-Hour Care</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Continuous home support</span>
        <h1>Round-the-clock care — in the home you <em>love</em></h1>
        <p class="sd-hero__lead">24-hour care with a small rotating team of carers — continuous presence day and night as a regulated alternative to a care home, across Nottingham.</p>
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
            <strong>Continuous</strong>
            <span class="sd-trust__label">Day &amp; night presence</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>2–3 carers</strong>
            <span class="sd-trust__label">Small rotating team</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated home care provider</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Home first</strong>
            <span class="sd-trust__label">Care home alternative</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-split reveal">
          <div class="sd-split__media">
            <img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="24-hour home care with rotating carers supporting a client in Nottingham" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>24/7</strong>
              <span>Support that does not stop</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Always someone there</p>
            <h2>Continuous care without leaving home</h2>
            <p>When needs are constant — night wandering, high fall risk, complex personal care or simply the need for someone always nearby — visiting calls alone are not enough. 24-hour care means a carer is present around the clock in your own home.</p>
            <p>We typically use a rotating team of two to three familiar carers on planned shifts. That keeps support sustainable for staff and consistent for you — handovers cover preferences, medication and what a good day looks like. As a CQC-regulated Nottingham provider, every shift is documented and supervised.</p>
            <p>For many families this is the realistic alternative to a care home: same bed, same kitchen, same street — with professional care woven through every hour.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Day &amp; night cover</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Rotating team</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Meals &amp; meds</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Night reassurance</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Household help</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Arrange 24-hour care</a>
              <a class="btn btn--navy" href="tel:03330344121">Speak to the team</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">What's included</p>
          <h2>What continuous care can cover</h2>
          <p>Packages are built at assessment — these are the pillars of most 24-hour plans.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Presence</span>
            <h3>Round-the-clock cover</h3>
            <p>Day and night shifts so help is available for transfers, toileting, anxiety or emergencies at any hour.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Team</span>
            <h3>Rotating 2–3 carers</h3>
            <p>A small familiar rota — not endless strangers — with clear handovers between every shift.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care &amp; dressing</h3>
            <p>Full support with washing, grooming and dressing at the pace that protects dignity and comfort.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Nutrition</span>
            <h3>Meals &amp; hydration</h3>
            <p>Preparing food, prompting drinks and keeping the kitchen workable across the whole day.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication &amp; monitoring</h3>
            <p>Prompts and observation aligned with your care plan, with records for family and clinicians.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Home</span>
            <h3>Household &amp; companionship</h3>
            <p>Light domestic help plus conversation and presence that keeps the house feeling like home.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>24-hour care that still feels personal</h2>
          <p>Continuous cover with the warmth of a known team — not an institution.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Stay at home</h3>
            <p>A genuine care home alternative when continuous support is needed.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Small rota</h3>
            <p>Two to three carers you recognise — consistency built into the model.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Clear handovers</h3>
            <p>Shift notes keep everyone aligned — including relatives at a distance.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>CQC regulated</h3>
            <p>Recruitment, training and supervision to registered provider standards.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How 24-hour care begins</h2>
          <p>From first conversation to continuous cover in your home.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Make contact</h3>
            <p>Call, email or use the form. Tell us about night needs, risks and what staying home means to you.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Assessment</h3>
            <p>A care manager visits to design a rota, sleep arrangements for carers and a full care plan.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Care begins</h3>
            <p>Your rotating team starts continuous cover, with reviews as needs evolve.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>24-hour care — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>How does 24-hour care work at home?</summary>
            <div class="sd-faq__body">A small team of typically two to three carers rotates through planned shifts so someone is present day and night. You stay in your own home with continuous support for personal care, meals, medication and reassurance.</div>
          </details>
          <details>
            <summary>Is 24-hour care an alternative to a care home?</summary>
            <div class="sd-faq__body">For many people, yes. Continuous home care can provide the safety and help of residential care while keeping familiar rooms, pets, neighbours and routines — under CQC regulation.</div>
          </details>
          <details>
            <summary>Will I have the same carers every day?</summary>
            <div class="sd-faq__body">We use a small, consistent rota rather than a revolving door of strangers. You get to know the team; handovers keep preferences and risks clear between shifts.</div>
          </details>
          <details>
            <summary>Can we start with fewer hours and step up to 24-hour care?</summary>
            <div class="sd-faq__body">Yes. Many families begin with hourly or overnight visits and move to continuous cover when needs increase. We manage the step-up under one registered Nottingham provider.</div>
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
          <a class="reveal" href="{{ route('services.show', 'overnight-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-evening-comfort.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Night support</span>
              <h3>Overnight Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'live-in-care-for-couples') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Couples</span>
              <h3>Live-In Care For Couples</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'dementia-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Specialist</span>
              <h3>Dementia Care</h3>
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
            <p class="eyebrow" style="color:var(--teal);">Ready when you are</p>
            <h2>Let's plan continuous care at home</h2>
            <p>Free assessment, honest advice about rotas and costs, and no obligation to proceed.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Book assessment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-evening-comfort.jpg') }}" alt="24-hour home care in Nottingham" width="480" height="320" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment with us</h2>
          <p>We can arrange a home visit across Nottingham as soon as possible.</p>
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
                <option selected>24-Hour Care</option>
                <option>Hourly Care</option>
                <option>Overnight Care</option>
                <option>Supported Living</option>
                <option>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option>Live-In Care For Couples</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us about night needs, risks and continuous support required…"></textarea></div>
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
