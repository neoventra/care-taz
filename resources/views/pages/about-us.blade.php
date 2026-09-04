@extends('layouts.app')

@section('title', 'About Us | Caretaz Healthcare')
@section('description', 'About Caretaz Healthcare — Nottingham home care provider.')
@section('body_class', 'page-about')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <span>About Us</span></div>
        <p class="page-hero__brand">Caretaz Healthcare</p>
        <p class="eyebrow">Who We Are</p>
        <h1>Home care that moves at the pace of your day</h1>
        <p>Caretaz Healthcare is a CQC-regulated home care provider based in Nottingham, built around one idea: people are more themselves at home. We bring reliable, person-centred care into that home, on a schedule shaped around the person receiving it.</p>
      </div>
    </section>

    <section class="section story" aria-labelledby="about-story-heading">
      <div class="container story__grid">
        <div class="story__visual reveal-left">
          <div class="story__frame">
            <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Caretaz carer and client sharing a warm moment at home">
          </div>
          <div class="story__float story__float--a" aria-hidden="true">
            <strong>5+</strong>
            <span>Years Experience</span>
          </div>
          <div class="story__float story__float--b reveal">
            <img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="">
          </div>
        </div>
        <div class="story__copy reveal-right">
          <p class="eyebrow">About Us</p>
          <h2 id="about-story-heading">A Nottingham home care company built on trust</h2>
          <p>We're a trusted domiciliary care provider built on reliability, safety, warmth and genuine commitment. Our ethos is simple: every person we support deserves independence, choice, dignity and the right to belong in their own community.</p>
          <p>What sets us apart is who delivers our care. Caretaz is led by fully registered social workers and experienced private carers who bring specialist knowledge from across the health and social care sector; not just training, but real expertise in understanding people's needs and championing their rights.</p>
          <p>As one of Nottingham's most trusted home care providers, we deliver the continuity that makes all the difference: familiar faces, consistent support, and care built around each person's life; not the other way around. Comfort and wellbeing sit at the heart of everything we do.</p>
          <p>We take pride in delivering consistently high-quality care — for the people we support, and for the families who trust us with those they love most.</p>
          <a class="btn btn--teal" href="{{ route('services.index') }}">Services</a>
        </div>
      </div>
    </section>

    <section class="section impact" aria-labelledby="about-impact-heading">
      <div class="impact__grid-bg" aria-hidden="true"></div>
      <div class="container">
        <div class="impact__head reveal">
          <p class="eyebrow">Proof in Practice</p>
          <h2 id="about-impact-heading">Countless Happy Service Users</h2>
        </div>
        <div class="impact__stats">
          <div class="impact-stat reveal" data-ring="98">
            <div class="impact-stat__ring" style="--p:0">
              <strong data-counter="98" data-suffix="%">0%</strong>
            </div>
            <span>Homecare Score</span>
          </div>
          <div class="impact-stat reveal" data-ring="100">
            <div class="impact-stat__ring" style="--p:0">
              <strong data-counter="5" data-suffix="+">0+</strong>
            </div>
            <span>Years of Experience</span>
          </div>
          <div class="impact-stat reveal" data-ring="85">
            <div class="impact-stat__ring" style="--p:0">
              <strong data-counter="50" data-suffix="+">0+</strong>
            </div>
            <span>Professional Carers</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section compass" aria-labelledby="compass-heading">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">What Guides Us</p>
          <h2 id="compass-heading">Vision, Mission &amp; Motto</h2>
          <p>Three short statements that shape every visit, every care plan, every conversation.</p>
        </div>
        <div class="compass__grid">
          <article class="compass-card reveal">
            <span class="compass-card__tag">Vision</span>
            <h3>Vision</h3>
            <p>To empower every individual we support to live with independence, dignity, choice and full inclusion in their community; on their own terms.</p>
          </article>
          <article class="compass-card reveal">
            <span class="compass-card__tag">Mission</span>
            <h3>Mission</h3>
            <p>To deliver outstanding home care that is compassionate, professional and truly person-centred, built around the needs, preferences and pace of every client we serve.</p>
          </article>
          <article class="compass-card reveal">
            <span class="compass-card__tag">Motto</span>
            <h3>Motto</h3>
            <p>Compassion is the foundation of everything we do.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container content-grid">
        <div class="prose reveal">
          <p class="eyebrow">Our Value</p>
          <h2>Care that puts happiness back into daily living</h2>
          <p>At Caretaz Healthcare, care starts with listening. We regularly consult every client about their needs and preferences, then tailor our support to exceed expectations; not just meet them.</p>
          <p>Caretaz Healthcare is a reliable, dependable home care agency based in Nottingham, trusted by families across the city and surrounding communities. Our team of passionate, experienced home care specialists delivers outstanding health and social care to adults, with services spanning 24-hour care, night care, dementia care, and a wide range of tailored support options designed around real lives, not rigid routines.</p>
          <p>We know that inviting care into your home, or a loved one's home is a significant decision. That's why we take the time to understand your situation fully, answer your questions honestly, and help you find the right package of support at the right pace.</p>
          <p><strong>Get in touch with Caretaz Healthcare today</strong> to discuss your care needs. We'll listen carefully, explain your options clearly, and work with you to build a plan that genuinely fits.</p>
          <p>What you can expect from us:</p>
          <ol class="expect-list">
            <li><span>1</span> Person-centred care plans, reviewed and updated regularly as needs change</li>
            <li><span>2</span> Trained, compassionate carers, carefully selected and vetted for every placement</li>
            <li><span>3</span> Flexible visit lengths and schedules, built around your routine, not ours</li>
            <li><span>4</span> Clear, consistent communication with clients and families at every step</li>
            <li><span>5</span> Support that promotes dignity, independence and choice, always</li>
          </ol>
          <a class="btn btn--navy" href="{{ route('appointment') }}">Make an Appointment</a>
        </div>
        <aside class="side-card reveal-right">
          <h3>Get In Touch</h3>
          <p><strong>Phone:</strong> 0333 034 4121<br>
             <strong>Email:</strong> info@caretazhealthcare.co.uk<br>
             <strong>Address:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
          <a class="btn btn--teal" href="tel:03330344121">Call Us Now</a>
          <a class="btn btn--outline" href="{{ route('contact-us') }}">Contact Form</a>
        </aside>
      </div>
    </section>

    <section class="section care-spotlight" aria-labelledby="about-spotlight-heading">
      <div class="container care-spotlight__inner reveal">
        <div class="care-spotlight__copy">
          <p class="eyebrow">24/7 Compassionate Care</p>
          <h2 id="about-spotlight-heading">Quality You Can Trust. Personal Care You Can Feel.</h2>
          <p>Every visit begins with a warm smile and genuine attention. We guarantee a safe, supportive environment for your loved ones; delivered with professionalism, kindness and true continuity of care, every single time.</p>
          <a class="btn btn--teal" href="{{ route('services.index') }}">Discover More</a>
        </div>
        <div class="care-spotlight__media">
          <div class="care-spotlight__shine" aria-hidden="true"></div>
          <img src="{{ asset('assets/images/hero-banner.jpg') }}" alt="Professional Caretaz carer supporting a client at home">
        </div>
      </div>
    </section>

    <section class="section trust-seal" aria-labelledby="about-trust-heading">
      <div class="trust-seal__wash" aria-hidden="true"></div>
      <div class="container">
        <div class="trust-seal__card reveal-zoom">
          <div class="trust-seal__logos">
            <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
            <img src="{{ asset('assets/images/ico.png') }}" alt="ICO">
          </div>
          <div class="trust-seal__copy">
            <p class="eyebrow">Independent Oversight</p>
            <h3 id="about-trust-heading">Fully Regulated by The Care Quality Commission (CQC)</h3>
            <p>Caretaz Healthcare is registered with and regulated by the CQC, the independent body overseeing health and social care in England, with our practices routinely assessed against national standards.</p>
            <p>We're also proudly registered with the ICO, reflecting our commitment to protecting your personal information.</p>
          </div>
          <div class="trust-seal__marks" aria-hidden="true">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </section>

    <section class="section journey" aria-labelledby="about-process-heading">
      <div class="journey__mesh" aria-hidden="true"></div>
      <div class="container">
        <div class="journey__head reveal">
          <p class="eyebrow">Our Approach</p>
          <h2 id="about-process-heading">Our Home Care Process</h2>
          <p class="journey__lead">A clear path from first conversation to trusted, ongoing support.</p>
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
          <a class="btn btn--teal" href="{{ route('appointment') }}">Book an Appointment</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>
</main>
@endsection
