@extends('layouts.app')

@section('title', 'Pricing | Caretaz Healthcare')
@section('description', 'Caretaz Healthcare care pricing, estimates and package examples.')
@section('body_class', 'page-pricing')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <span>Pricing</span></div>
        <p class="eyebrow" style="color:var(--teal);">Cost of Care</p>
        <h1>Care priced <span>honestly</span>, built around your day.</h1>
        <p>Caretaz Healthcare is a CQC-regulated home care provider in Nottingham. There are no hidden fees, no confusing tiers, and no surprise invoices; your rate is agreed before care begins and confirmed in writing after a free assessment.</p>
      </div>
    </section>

    <section class="section">
      <div class="container price-story">
        <div class="price-story__main reveal">
          <p class="eyebrow" style="color:var(--teal);">Transparent Pricing</p>
          <h2>Why families trust our pricing</h2>
          <p>No hidden fees. No small print designed to catch you out. No call-centre runaround when you ask a simple question. At Caretaz Healthcare, every price is built the same way you'd want your care delivered openly, and with you fully in the picture.</p>
          <p>Arranging care for yourself or someone you love is rarely simple. So we've made sure the pricing isn't. Your rate starts from a clear, single hourly figure for one-to-one care — no tiers to decode, no asterisks buried in a footnote. It flexes only where your circumstances genuinely require it: by location, by the nature of the care, and by whether support falls on a weekday afternoon or a bank holiday night.</p>
          <p>One call gets you a straight answer. Speak to our team today and walk away with a free, tailored estimate; not a sales pitch.</p>
          <h3>What actually moves the number</h3>
          <ol class="rate-factors">
            <li>
              <span class="rate-factors__num">01</span>
              <div><strong>Visit length and frequency</strong><span>A quick daily check-in costs differently than an hour of hands-on care</span></div>
            </li>
            <li>
              <span class="rate-factors__num">02</span>
              <div><strong>Time of day</strong><span>Daytime, evening, overnight and weekend support each carry their own rate</span></div>
            </li>
            <li>
              <span class="rate-factors__num">03</span>
              <div><strong>Location and travel</strong><span>Where you are shapes how a visit fits into a carer's day</span></div>
            </li>
            <li>
              <span class="rate-factors__num">04</span>
              <div><strong>Level of care required</strong><span>Personal care and specialist conditions may call for more experienced hands</span></div>
            </li>
            <li>
              <span class="rate-factors__num">05</span>
              <div><strong>Duration</strong><span>Short-term respite and long-term ongoing care are structured differently, and priced accordingly</span></div>
            </li>
          </ol>
        </div>
        <aside class="estimate-card reveal-right">
          <p class="estimate-card__pulse"><i aria-hidden="true"></i> Free estimate</p>
          <h3>Request a free estimate</h3>
          <p>Tell us what you need and we will provide a clear, no-obligation quotation.</p>
          <p><strong>0333 034 4121</strong><br>info@caretazhealthcare.co.uk</p>
          <div class="estimate-card__actions">
            <a class="btn btn--teal" href="tel:03330344121">Call 0333 034 4121</a>
            <a class="btn btn--outline" href="{{ route('appointment') }}">Make an Appointment</a>
          </div>
        </aside>
      </div>
    </section>

    <section class="section section--mist">
      <div class="container">
        <div class="section-head">
          <p class="eyebrow">Example Packages</p>
          <h2>How support can be structured</h2>
          <p>Final pricing is confirmed after assessment. These examples show typical package styles.</p>
        </div>
        <div class="price-tiers">
          <article class="tier reveal">
            <h3>Hourly / Visiting Care</h3>
            <div class="tier__price">From quote <span>/ hour</span></div>
            <ul>
              <li>Flexible visit lengths</li>
              <li>Personal care &amp; companionship</li>
              <li>No hidden fees</li>
              <li>Free assessment</li>
            </ul>
            <a class="btn btn--navy" href="{{ route('contact-us') }}">Enquire</a>
          </article>
          <article class="tier tier--featured reveal">
            <span class="tier__badge">Popular</span>
            <h3>Overnight Care</h3>
            <div class="tier__price">Custom <span>/ night</span></div>
            <ul>
              <li>Sleeping or waking nights</li>
              <li>Night-time safety support</li>
              <li>Weekend rates may vary</li>
              <li>Tailored to night needs</li>
            </ul>
            <a class="btn btn--teal" href="{{ route('contact-us') }}">Enquire</a>
          </article>
          <article class="tier reveal">
            <h3>24-Hour / Live-in</h3>
            <div class="tier__price">Bespoke <span>/ package</span></div>
            <ul>
              <li>Continuous support</li>
              <li>Personalised care plan</li>
              <li>Complex needs welcome</li>
              <li>Free assessment</li>
            </ul>
            <a class="btn btn--navy" href="{{ route('contact-us') }}">Enquire</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section why-showcase" aria-labelledby="why-choose-heading">
      <div class="why-showcase__glow why-showcase__glow--a" aria-hidden="true"></div>
      <div class="why-showcase__glow why-showcase__glow--b" aria-hidden="true"></div>
      <div class="container">
        <div class="why-showcase__head reveal">
          <p class="eyebrow">Why Choose Us</p>
          <h2 id="why-choose-heading">Tailored &amp; Person-Centred Approach</h2>
        </div>
        <div class="why-showcase__grid" data-why-tilt>
          <article class="why-panel reveal" data-why-panel style="--i:0">
            <span class="why-panel__watermark" aria-hidden="true">01</span>
            <div class="why-panel__icon" aria-hidden="true">
              <span class="why-panel__ring"></span>
              <svg viewBox="0 0 48 48" fill="none"><path d="M12 28c0-6.6 5.4-12 12-12s12 5.4 12 12" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><path d="M18 28h12M24 16v4M16 34h16" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><circle cx="24" cy="12" r="2.5" fill="currentColor"/></svg>
            </div>
            <h3>Flexibility &amp; Pricing</h3>
            <p>Transparent, honest pricing with flexible call lengths built around your schedule. Get in touch for a free, no-obligation care estimate today.</p>
          </article>
          <article class="why-panel why-panel--featured reveal" data-why-panel style="--i:1">
            <span class="why-panel__watermark" aria-hidden="true">02</span>
            <div class="why-panel__icon" aria-hidden="true">
              <span class="why-panel__ring"></span>
              <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="16" r="6" stroke="currentColor" stroke-width="2.4"/><path d="M10 38c2.5-7 8-11 14-11s11.5 4 14 11" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><path d="M33 14l3 3 6-7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3>Professional Carers</h3>
            <p>Every carer is rigorously trained, DBS-checked and genuinely invested in the people they support; the difference between a service and real, lasting care.</p>
          </article>
          <article class="why-panel reveal" data-why-panel style="--i:2">
            <span class="why-panel__watermark" aria-hidden="true">03</span>
            <div class="why-panel__icon" aria-hidden="true">
              <span class="why-panel__ring"></span>
              <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="14" stroke="currentColor" stroke-width="2.4"/><path d="M24 14v11l7 4" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3>Always Available</h3>
            <p>Responsive, round-the-clock support for clients and families alike, with clear communication and reliable arrangements you can count on; whenever you need us.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section care-spotlight" aria-labelledby="spotlight-heading">
      <div class="container care-spotlight__inner reveal">
        <div class="care-spotlight__copy">
          <p class="eyebrow">24/7 Compassionate Care</p>
          <h2 id="spotlight-heading">Quality You Can Trust. Personal Care You Can Feel.</h2>
          <p>Every visit begins with a warm smile and genuine attention. We guarantee a safe, supportive environment for your loved ones; delivered with professionalism, kindness and true continuity of care, every single time.</p>
          <a class="btn btn--teal" href="{{ route('services.index') }}">Discover More</a>
        </div>
        <div class="care-spotlight__media">
          <div class="care-spotlight__shine" aria-hidden="true"></div>
          <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Professional caregiver">
        </div>
      </div>
    </section>

    <section class="section journey" aria-labelledby="process-heading">
      <div class="journey__mesh" aria-hidden="true"></div>
      <div class="container">
        <div class="journey__head reveal">
          <p class="eyebrow">Our Approach</p>
          <h2 id="process-heading">Our Home Care Process</h2>
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
                <p>We visit in person to build a care plan around your loved one's exact needs, routines and preferences.</p>
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
                <p>Care begins with the right carer matched and ready — reliable support from day one.</p>
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

    <section class="section book-panel" id="appointment" aria-labelledby="book-heading">
      <div class="container book-panel__grid">
        <div class="book-panel__info reveal-left">
          <p class="eyebrow">Make Appointment</p>
          <h2 id="book-heading">Book an appointment with us</h2>
          <p class="book-panel__lead">We can arrange an assessment with you as soon as possible.</p>
          <ul class="book-contacts">
            <li>
              <span class="book-contacts__label">Phone</span>
              <a href="tel:03330344121">0333 034 4121</a>
            </li>
            <li>
              <span class="book-contacts__label">Email</span>
              <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a>
            </li>
            <li>
              <span class="book-contacts__label">Address</span>
              <span>Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</span>
            </li>
          </ul>
        </div>
        <form class="book-form reveal-right" data-appointment-form>
          <div class="book-form__glow" aria-hidden="true"></div>
          <div class="form-grid">
            <div class="form-field"><label for="name">Name</label><input id="name" name="name" required></div>
            <div class="form-field"><label for="email">Email</label><input id="email" name="email" type="email" required></div>
            <div class="form-field"><label for="phone">Phone</label><input id="phone" name="phone" required></div>
            <div class="form-field"><label for="service">Select Services</label>
              <select id="service" name="service" required>
                <option value="">Choose a service</option>
                <option>Hourly Care</option>
                <option>Overnight Care</option>
                <option>24-Hour Care</option>
                <option>Supported Living</option>
                <option>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" rows="4"></textarea></div>
          </div>
          <button class="btn btn--teal" type="submit">Make Appointment</button>
          <p class="form-note">For urgent needs, please telephone 0333 034 4121.</p>
        </form>
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
