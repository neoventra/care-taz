@extends('layouts.app')

@section('title', 'Home Care Services in Nottingham | Caretaz Healthcare')
@section('description', 'Explore CQC-regulated home care services in Nottingham from Caretaz Healthcare — hourly visiting care, dementia support, 24-hour live-in care, respite, hospital-to-home and specialist packages tailored to you.')
@section('body_class', 'services-hub')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/services-page.css') }}">
@endpush

@section('content')
<main>
<section class="svc-hero" aria-labelledby="svc-hero-heading">
      <div class="svc-hero__bg" aria-hidden="true"></div>
      <div class="svc-hero__mesh" aria-hidden="true"></div>
      <div class="svc-hero__inner">
        <nav class="svc-hero__crumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <span>Services</span>
        </nav>
        <p class="svc-brand">Caretaz <span>Healthcare</span></p>
        <h1 id="svc-hero-heading">Home care that protects independence.</h1>
        <p class="svc-hero__lead">Sixteen person-centred services across Nottingham — designed around real lives, regulated by the CQC, delivered with warmth.</p>
        <div class="btn-row">
          <a class="btn btn--teal" href="#all-services">Browse Services</a>
          <a class="btn btn--outline" href="{{ route('appointment') }}">Book Assessment</a>
        </div>
      </div>
      <div class="svc-hero__scroll" aria-hidden="true">Explore</div>
    </section>

    <section class="svc-intro">
      <div class="container">
        <div class="svc-intro__panel reveal-zoom">
          <div class="svc-intro__copy">
            <p class="eyebrow">Nottingham domiciliary care</p>
            <h2>Support that feels personal — never institutional.</h2>
            <p>Whether you need a few trusted visiting hours, specialist clinical support, or continuous live-in care, every Caretaz package begins with listening. We match trained carers to your routines, preferences and pace of life.</p>
            <div class="svc-pill-row">
              <span class="svc-pill"><i></i> CQC regulated</span>
              <span class="svc-pill"><i></i> Person-centred plans</span>
              <span class="svc-pill"><i></i> Flexible call lengths</span>
              <span class="svc-pill"><i></i> Family-first communication</span>
            </div>
          </div>
          <div class="svc-intro__visual">
            <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Caretaz carer supporting a client at home in Nottingham" width="640" height="480" loading="eager">
            <div class="svc-intro__float">
              <strong>16</strong>
              <span>Specialist care pathways</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="svc-section svc-section--fog" id="all-services" aria-labelledby="services-heading">
      <div class="container">
        <div class="svc-head svc-head--center reveal">
          <p class="eyebrow">Our services</p>
          <h2 id="services-heading">Find the care that fits your life</h2>
          <p>Filter by need, explore featured pathways, then dive into the full catalogue of Caretaz home care across Nottingham.</p>
        </div>

        <div class="svc-filters" role="tablist" aria-label="Filter services by category">
          <button type="button" class="svc-filter__btn is-active" role="tab" aria-selected="true" data-filter="all">All <span class="svc-filter__count">(16)</span></button>
          <button type="button" class="svc-filter__btn" role="tab" aria-selected="false" data-filter="visiting">Visiting Care <span class="svc-filter__count">(4)</span></button>
          <button type="button" class="svc-filter__btn" role="tab" aria-selected="false" data-filter="specialist">Specialist <span class="svc-filter__count">(5)</span></button>
          <button type="button" class="svc-filter__btn" role="tab" aria-selected="false" data-filter="livein">Live-In &amp; 24hr <span class="svc-filter__count">(3)</span></button>
          <button type="button" class="svc-filter__btn" role="tab" aria-selected="false" data-filter="family">Family &amp; Practical <span class="svc-filter__count">(4)</span></button>
        </div>

        <div class="svc-bento" data-spotlight>
          <a class="svc-spotlight reveal" href="{{ route('services.show', 'urgent-care') }}" data-categories="visiting">
            <div class="svc-spotlight__media">
              <img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="Urgent home care support" width="800" height="1000" loading="lazy">
            </div>
            <div class="svc-spotlight__body">
              <p class="eyebrow" style="color:var(--teal);">Featured · Visiting</p>
              <h3>Urgent Care</h3>
              <p>When plans change overnight, we arrange prompt, personalised cover so your loved one stays safe and settled at home.</p>
              <span class="svc-tile__cta">Explore urgent care <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>
          <a class="svc-side-feature reveal" href="{{ route('services.show', '24-hour-care') }}" data-categories="livein">
            <img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="Round-the-clock home care" width="640" height="400" loading="lazy">
            <div class="svc-side-feature__body">
              <h3>24-Hour Care</h3>
              <p>Continuous reassurance when independence at home still matters most.</p>
            </div>
          </a>
          <a class="svc-side-feature reveal" href="{{ route('services.show', 'hourly-care') }}" data-categories="visiting">
            <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Flexible hourly visiting care" width="640" height="400" loading="lazy">
            <div class="svc-side-feature__body">
              <h3>Hourly Care</h3>
              <p>Visiting care that flexes with daily life — scheduled around your rhythm.</p>
            </div>
          </a>
        </div>

        <div class="svc-grid" id="svc-grid" aria-live="polite">

          <a class="svc-tile reveal" href="{{ route('services.show', 'urgent-care') }}" data-categories="visiting">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Visiting</span>
              <img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="Urgent home care support" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Urgent Care</h3>
              <p>When plans change overnight, we arrange prompt, personalised cover so your loved one stays safe and settled at home.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', '24-hour-care') }}" data-categories="livein">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Live-In</span>
              <img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="24-hour live-in style care" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>24-Hour Care</h3>
              <p>Round-the-clock support for people who need continuous help while remaining in the home they love.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'hourly-care') }}" data-categories="visiting">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Visiting</span>
              <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Flexible hourly visiting care" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Hourly Care</h3>
              <p>Visiting care that flexes with daily life — from a few hours a week to multiple calls each day, built around your rhythm.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'live-in-care-for-couples') }}" data-categories="livein">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Live-In</span>
              <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Live-in care for couples" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Live-In Care For Couples</h3>
              <p>Stay together at home with personalised live-in support designed around both of you — not just one care plan.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'overnight-care') }}" data-categories="visiting">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Visiting</span>
              <img src="{{ asset('assets/images/care-overnight-muslim.jpg') }}" alt="Overnight care at home" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Overnight Care</h3>
              <p>Night-time presence that protects sleep, safety and confidence — for clients and for the families who worry after dark.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'palliative-care') }}" data-categories="specialist">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Specialist</span>
              <img src="{{ asset('assets/images/care-palliative-grid.jpg') }}" alt="Palliative and end-of-life care" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Palliative / End-of-Life Care</h3>
              <p>Gentle, respectful care centred on comfort, presence and family reassurance in the most meaningful moments.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'companionship-care') }}" data-categories="visiting">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Visiting</span>
              <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Companionship care reducing loneliness" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Companionship Care</h3>
              <p>Warm, reliable company that lifts spirits, eases loneliness and keeps everyday wellbeing front and centre.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'dementia-care') }}" data-categories="specialist">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Specialist</span>
              <img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="Dementia care at home" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Dementia Care</h3>
              <p>Compassionate, routine-led support that honours identity, reduces distress and keeps home feeling familiar.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'parkinsons-disease') }}" data-categories="specialist">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Specialist</span>
              <img src="{{ asset('assets/images/care-mobility-support.jpg') }}" alt="Parkinson's disease home care" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Parkinson’s Disease Care</h3>
              <p>Thoughtful help with mobility, medication timing and daily living so confidence can grow alongside independence.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'stroke-care') }}" data-categories="specialist">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Specialist</span>
              <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Stroke recovery care at home" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Stroke Care</h3>
              <p>Home-based recovery support focused on rebuilding strength, communication and the small wins that restore pride.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'cancer-care') }}" data-categories="specialist">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Specialist</span>
              <img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="Cancer care support at home" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Cancer Care</h3>
              <p>Sensitive practical support through treatment and recovery — comfort, dignity and space for what matters most.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'supported-living') }}" data-categories="livein">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Live-In</span>
              <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Supported living for independence" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Supported Living</h3>
              <p>Empowering support that champions choice, everyday confidence and the freedom to live life on your terms.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'hospital-to-home') }}" data-categories="family">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Family</span>
              <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Hospital discharge home care" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Hospital to Home Care</h3>
              <p>Reassuring transition support from ward to front door — so recovery continues safely where it belongs.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'carer-respite') }}" data-categories="family">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Family</span>
              <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Carer respite break cover" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Carer Respite Break Cover</h3>
              <p>Trusted cover that gives family carers space to rest, while loved ones remain supported without disruption.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'holiday-companionship') }}" data-categories="family">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Family</span>
              <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Holiday companionship care breaks" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Holiday Companionship Care Breaks</h3>
              <p>Companionship and practical help so holidays and short breaks feel possible again — with confidence built in.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          <a class="svc-tile reveal" href="{{ route('services.show', 'housekeeping-services') }}" data-categories="family">
            <div class="svc-tile__media">
              <span class="svc-tile__cat">Practical</span>
              <img src="{{ asset('assets/images/service-cleaning.jpg') }}" alt="Housekeeping and domestic home help" width="640" height="400" loading="lazy">
            </div>
            <div class="svc-tile__body">
              <h3>Housekeeping Services</h3>
              <p>Essential domestic help that keeps homes clean, organised and manageable — freeing energy for living well.</p>
              <span class="svc-tile__cta">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>

          

          <p class="svc-empty">No services in this category — try another filter.</p>
        </div>
      </div>
    </section>

    <section class="svc-section svc-section--ink" aria-labelledby="why-heading">
      <div class="container">
        <div class="svc-head svc-head--center reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2 id="why-heading">Care with clarity, craft and heart</h2>
          <p>Beyond a list of services — a standard of how we show up for people every single day.</p>
        </div>
        <div class="svc-values">
          <article class="svc-value reveal">
            <div class="svc-value__num">01</div>
            <h3>Assessed, never assumed</h3>
            <p>Every package starts with a proper conversation and assessment — so support matches the person, not a template.</p>
          </article>
          <article class="svc-value reveal">
            <div class="svc-value__num">02</div>
            <h3>Trained, trusted carers</h3>
            <p>Continuously developed professionals who bring skill, reliability and genuine kindness into the home.</p>
          </article>
          <article class="svc-value reveal">
            <div class="svc-value__num">03</div>
            <h3>Flexible &amp; transparent</h3>
            <p>Clear estimates and adaptable call lengths so care can grow, reduce or change as needs evolve.</p>
          </article>
          <article class="svc-value reveal">
            <div class="svc-value__num">04</div>
            <h3>Always reachable</h3>
            <p>Responsive arrangements and open communication for clients and families — including when urgency strikes.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="svc-section" aria-labelledby="process-heading">
      <div class="container">
        <div class="svc-head svc-head--center reveal">
          <p class="eyebrow">Our approach</p>
          <h2 id="process-heading">From first call to confident care</h2>
          <p>Three clear steps. No jargon. No pressure — just a path that feels human.</p>
        </div>
        <div class="svc-process">
          <article class="svc-step reveal">
            <div class="svc-step__num">01</div>
            <h3>Make contact</h3>
            <p>Call, email or book online. Tell us what you need — urgent cover, ongoing visits, or specialist support.</p>
          </article>
          <article class="svc-step reveal">
            <div class="svc-step__num">02</div>
            <h3>Schedule assessment</h3>
            <p>We meet you at home (or virtually if preferred) to understand routines, risks, preferences and goals.</p>
          </article>
          <article class="svc-step reveal">
            <div class="svc-step__num">03</div>
            <h3>Begin care</h3>
            <p>Agree the plan, meet your carers, and start support that feels settled from day one.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="svc-section svc-section--fog" aria-labelledby="story-heading">
      <div class="container">
        <div class="svc-story">
          <div class="svc-story__media reveal-left">
            <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Caretaz Healthcare carer providing person-centred support" width="720" height="540" loading="lazy">
          </div>
          <div class="svc-story__copy reveal-right">
            <p class="eyebrow">The Caretaz difference</p>
            <h2 id="story-heading">Independence first. Dignity always.</h2>
            <p>Our ethos is simple: care should never diminish a person’s choice, rights or sense of self. We help adults — particularly older people and those with long-term conditions — keep living life exactly as they choose, with safety woven in.</p>
            <ul class="svc-checklist">
              <li>Person-centred plans reviewed as needs change</li>
              <li>CQC-regulated practices and ICO registration</li>
              <li>Support from hourly visits to continuous live-in care</li>
              <li>Local Nottingham teams who know the community</li>
            </ul>
            <div class="btn-row">
              <a class="btn btn--navy" href="{{ route('about-us') }}">About Caretaz</a>
              <a class="btn btn--outline-teal" href="{{ route('pricing') }}">View Pricing</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="svc-section svc-section--ink" aria-labelledby="stats-heading">
      <div class="container">
        <div class="svc-head svc-head--center reveal">
          <p class="eyebrow" style="color:var(--teal);">Trusted locally</p>
          <h2 id="stats-heading">Numbers that reflect real care</h2>
        </div>
        <div class="svc-stats reveal">
          <div class="svc-stat"><strong data-counter="98" data-suffix="%">0%</strong><span>Homecare Score</span></div>
          <div class="svc-stat"><strong data-counter="5" data-suffix="+">0+</strong><span>Years Experience</span></div>
          <div class="svc-stat"><strong data-counter="50" data-suffix="+">0+</strong><span>Professional Carers</span></div>
          <div class="svc-stat"><strong data-counter="16" data-suffix="">0</strong><span>Care Pathways</span></div>
        </div>
      </div>
    </section>

    <section class="svc-section" aria-labelledby="faq-heading">
      <div class="container">
        <div class="svc-head svc-head--center reveal">
          <p class="eyebrow">Good to know</p>
          <h2 id="faq-heading">Questions families ask first</h2>
          <p>Straight answers before you book — so the next step feels lighter.</p>
        </div>
        <div class="svc-faq">
          <details class="reveal">
            <summary>What home care services do you provide in Nottingham?</summary>
            <div class="svc-faq__body">We deliver domiciliary care including hourly visiting, overnight and 24-hour support, dementia and other specialist pathways, live-in care for couples, hospital-to-home transitions, companionship, respite cover and housekeeping.</div>
          </details>
          <details class="reveal">
            <summary>Are you regulated by the CQC?</summary>
            <div class="svc-faq__body">Yes. Caretaz Healthcare is regulated by the Care Quality Commission. Our practices are assessed against national standards, and we are also registered with the ICO for data protection.</div>
          </details>
          <details class="reveal">
            <summary>How quickly can care begin?</summary>
            <div class="svc-faq__body">After assessment we aim to start promptly. For sudden changes in circumstance, our urgent care pathway can help arrange cover as soon as staffing allows — call 0333 034 4121.</div>
          </details>
          <details class="reveal">
            <summary>Can you tailor a package for complex needs?</summary>
            <div class="svc-faq__body">Absolutely. Care plans are built around the individual — clinical needs, cultural preferences, routines and family involvement — and reviewed as circumstances evolve.</div>
          </details>
        </div>
      </div>
    </section>

    <section class="svc-section svc-section--fog">
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

    <section class="svc-section">
      <div class="container">
        <div class="svc-finale reveal">
          <div>
            <p class="eyebrow" style="color:var(--teal);">Ready when you are</p>
            <h2>Let’s design care that feels like coming home.</h2>
            <p>Speak with our Nottingham team today — we’ll listen first, then build a plan that protects independence with warmth and professionalism.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="{{ route('appointment') }}">Make an Appointment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="svc-finale__media">
            <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Friendly Caretaz caregiver" width="560" height="360" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment with us</h2>
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
                <option value="">Choose a service…</option>
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
  <script src="{{ versioned_asset('js/services-page.js') }}"></script>
@endpush
