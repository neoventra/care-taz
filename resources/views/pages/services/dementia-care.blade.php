@extends('layouts.app')

@section('title', 'Dementia Care at Home in Nottingham | Caretaz Healthcare')
@section('description', 'Compassionate, CQC-regulated dementia home care in Nottingham. Familiar routines, dignity and specialist-trained carers supporting people living with dementia.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero" aria-labelledby="sd-hero-heading">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-tablet-together.jpg')" aria-hidden="true"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span>
          <a href="{{ route('home') }}">Services</a> <span>/</span>
          <span>Dementia Care</span>
        </nav>
        <p class="sd-brand">Caretaz Healthcare · Specialist Dementia Care</p>
        <h1 id="sd-hero-heading">Familiar home. Calm routines. <em>Dignity</em> intact.</h1>
        <p class="sd-hero__lead">Person-centred dementia care that treats identity as sacred — delivered in the place memories live.</p>
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
            <strong>Home</strong>
            <span class="sd-trust__label">Familiar surroundings</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Trained</strong>
            <span class="sd-trust__label">Dementia approaches</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Plans</strong>
            <span class="sd-trust__label">Individual care maps</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Independently regulated</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="about-service">
      <div class="container">
        <div class="sd-split">
          <div class="sd-split__media reveal-left">
            <img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="Dementia Care at home with Caretaz Healthcare" width="720" height="540" loading="eager">
            <div class="sd-split__float">
              <strong>Specialist</strong>
              <span>Dementia-aware carers</span>
            </div>
          </div>
          <div class="sd-split__copy reveal-right">
            <p class="eyebrow">About this service</p>
            <h2 id="about-service">Dementia care that starts with who someone is.</h2>
            <p>Symptoms of dementia vary widely. That is why Caretaz takes a personalised, sympathetic approach — never a one-size-fits-all checklist.</p>
            <p>Familiar rooms, routines and memories are powerful anchors. Our dementia-trained carers learn hobbies, preferences and how each person likes things organised, so care feels recognisable rather than clinical.</p>
            <p>Every client has an individualised care plan detailing unique characteristics and preferences. The goal is simple: comfort, safety and respect — every visit.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i></i> Routine-led support</span>
              <span class="sd-pill"><i></i> Patience &amp; dignity</span>
              <span class="sd-pill"><i></i> Meaningful activity</span>
              <span class="sd-pill"><i></i> Family guidance</span>
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
            <span class="sd-include__label">Care</span>
            <h3>Personal care with patience</h3>
            <p>Unhurried washing, dressing and continence support that preserves dignity.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Mind</span>
            <h3>Companionship &amp; activity</h3>
            <p>Music, reminiscence, hobbies and gentle stimulation tailored to interest.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication prompts</h3>
            <p>Reliable reminders coordinated with family and healthcare professionals.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily life</span>
            <h3>Meals &amp; routines</h3>
            <p>Familiar mealtimes and day structure that reduce anxiety.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Safety</span>
            <h3>Orientation &amp; reassurance</h3>
            <p>Calm communication when confusion rises — including evenings and nights.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Review</span>
            <h3>Care plan updates</h3>
            <p>Regular reviews as symptoms change, with clear family updates.</p>
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
            <h3>Familiar surroundings</h3>
            <p>Support at home where memories and routines still matter most.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Personalised routines</h3>
            <p>Plans designed to reduce distress and promote calm.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Specialist training</h3>
            <p>Carers skilled in dementia-aware, person-centred approaches.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Family guidance</h3>
            <p>Practical advice and honest updates for relatives.</p>
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
            <summary>Do your carers have dementia training?</summary>
            <div class="sd-faq__body">Yes. Carers supporting dementia packages receive specialist training and use person-centred approaches focused on dignity, routine and calm communication.</div>
          </details>
          <details class="reveal">
            <summary>Can you support someone with sundowning?</summary>
            <div class="sd-faq__body">We can structure visits and overnight support around times of day that feel hardest, helping reduce evening distress and keep nights safer.</div>
          </details>
          <details class="reveal">
            <summary>Will the same carers visit?</summary>
            <div class="sd-faq__body">We aim for continuity so familiar faces build trust — especially important for people living with dementia.</div>
          </details>
          <details class="reveal">
            <summary>Can dementia care combine with 24-hour support?</summary>
            <div class="sd-faq__body">Yes. Many families begin with visiting care and step up to overnight or continuous 24-hour packages as needs increase.</div>
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
          <a class="reveal" href="{{ route('services.show', 'overnight-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Overnight Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Nights</span>
              <h3>Overnight Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', '24-hour-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-evening-comfort.jpg') }}" alt="24-Hour Care" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Continuous</span>
              <h3>24-Hour Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'carer-respite') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-mobility-support.jpg') }}" alt="Carer Respite" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Family</span>
              <h3>Carer Respite</h3>
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
            <h2>Let’s build a dementia plan that feels human.</h2>
            <p>Share what a good day looks like for your loved one — we’ll design care that protects identity at home.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="{{ route('appointment') }}">Make an Appointment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Caretaz caregiver" width="560" height="360" loading="lazy">
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
                <option selected>Dementia Care</option>
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
