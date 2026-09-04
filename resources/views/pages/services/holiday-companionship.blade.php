@extends('layouts.app')

@section('title', 'Holiday Companionship Care Breaks | Travel Support Nottingham | Caretaz Healthcare')
@section('description', 'Holiday companionship care breaks from Nottingham — a trusted carer travels with you so short breaks and holidays feel possible again. CQC-regulated travel companionship.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-garden-outdoors.jpg')"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>Holiday Companionship</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Travel companionship</span>
        <h1>Take the break — with care that <em>travels</em></h1>
        <p class="sd-hero__lead">Holiday companionship care breaks so short getaways and longer trips feel possible again — a trusted CQC-regulated carer beside you for company, confidence and the practical help that keeps the holiday yours.</p>
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
            <strong>Travel-ready</strong>
            <span class="sd-trust__label">Companionship away from home</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated home care provider</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Nottingham</strong>
            <span class="sd-trust__label">Planned from our local team</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Matched carers</strong>
            <span class="sd-trust__label">Familiar faces where possible</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-split reveal">
          <div class="sd-split__media">
            <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Holiday companionship carer supporting a client on a care break" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>Breaks</strong>
              <span>Short trips to longer holidays</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Care that comes with you</p>
            <h2>Holidays and short breaks without leaving support behind</h2>
            <p>Many people stop travelling because care at home cannot simply pause. Holiday companionship fills that gap — a carer who knows your routines travels with you so personal care, medication prompts and mobility help continue away from Nottingham.</p>
            <p>We plan the break with you: destination practicalities, pacing of days, what support you want visible and what you prefer discreet. As a CQC-regulated provider, the same standards apply on the coast or in the city as they do on Mansfield Road.</p>
            <p>Families use holiday companionship for anniversary trips, seaside weeks or simply a change of scene — knowing someone reliable is there overnight and through the day.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Travel companion</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Medication prompts</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Mobility help</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Day pacing</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Overnight presence</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Plan a care break</a>
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
          <h2>What holiday companionship can cover</h2>
          <p>Every trip is planned at assessment — these are the supports families most often request.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Company</span>
            <h3>Travel companionship</h3>
            <p>A familiar presence for journeys, meals out and quieter evenings — so you are never managing alone away from home.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care on the go</h3>
            <p>Washing, dressing and dignity-focused help in hotels, cottages or relatives' homes — adapted to unfamiliar bathrooms.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication &amp; routines</h3>
            <p>Prompts and timing kept consistent with your usual plan so treatment does not slip because you are on holiday.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Movement</span>
            <h3>Mobility &amp; confidence</h3>
            <p>Support getting around attractions, transport hubs and new rooms — reducing falls risk without spoiling the day.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Pace</span>
            <h3>Energy management</h3>
            <p>Help structuring rest, meals and outings so the break energises rather than exhausts.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Planning</span>
            <h3>Pre-trip coordination</h3>
            <p>Clear discussion of care hours, carer lodging and costs before you book — so logistics feel settled early.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>Breaks that feel free — not fragile</h2>
          <p>Regulated care with the warmth of a team that plans every detail with you.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Planned, not rushed</h3>
            <p>We match carers and map practicalities well before departure day.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Same standards abroad or UK</h3>
            <p>CQC-regulated practice travels with the carer — documentation and dignity included.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Your holiday, your pace</h3>
            <p>Support steps forward when needed and stays discreet when you want space.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Home care continuity</h3>
            <p>Return to Nottingham with routines intact — often with the same carers who know you.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How a holiday care break begins</h2>
          <p>From first idea to packing day — a clear path with no guesswork.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Share the trip</h3>
            <p>Tell us dates, destination and the support you need. We listen and outline what is realistic.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Assessment &amp; match</h3>
            <p>A care manager assesses needs and matches a suitable carer — ideally someone already familiar.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Travel with confidence</h3>
            <p>Your companion joins for the break, with costs and hours agreed in writing beforehand.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>Holiday companionship — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>Can a carer travel with me on holiday?</summary>
            <div class="sd-faq__body">Yes. We arrange companionship care breaks where a matched carer accompanies you for the trip — helping with personal care, medication prompts, mobility and company so the holiday stays enjoyable rather than exhausting.</div>
          </details>
          <details>
            <summary>How far in advance should we book a holiday care break?</summary>
            <div class="sd-faq__body">As early as you can. Matching a familiar carer, agreeing travel logistics and confirming accommodation needs takes planning — especially for peak seasons or complex support.</div>
          </details>
          <details>
            <summary>Does holiday companionship include personal care?</summary>
            <div class="sd-faq__body">Where assessed and agreed, yes — washing, dressing, medication prompts and mobility support can travel with you, delivered to the same CQC-regulated standards as care at home in Nottingham.</div>
          </details>
          <details>
            <summary>Who pays for the carer's travel and accommodation?</summary>
            <div class="sd-faq__body">Care hours, travel and suitable accommodation for the carer are discussed transparently before you book. We outline costs clearly so there are no surprises mid-trip.</div>
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
          <a class="reveal" href="{{ route('services.show', 'carer-respite') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Family cover</span>
              <h3>Carer Respite Break Cover</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'companionship-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Social wellbeing</span>
              <h3>Companionship Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-mobility-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Visiting care</span>
              <h3>Hourly Care</h3>
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
            <h2>Let's plan a break that feels possible</h2>
            <p>Honest advice on timing, carer matching and costs — with no obligation to book.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Book assessment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Holiday companionship care break support" width="480" height="320" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment with us</h2>
          <p>We can discuss your trip and care needs as soon as possible.</p>
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
                <option>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option selected>Holiday Companionship</option>
                <option>Carer Respite</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us about dates, destination and support needed…"></textarea></div>
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
