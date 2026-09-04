@extends('layouts.app')

@section('title', 'Stroke Care &amp; Recovery at Home in Nottingham | Caretaz Healthcare')
@section('description', 'Post-stroke home care in Nottingham — rebuild confidence, mobility and daily routines after hospital discharge. CQC-regulated carers focused on recovery at home.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-stand-assist.jpg')"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>Stroke Care</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Stroke Care &amp; Recovery</span>
        <h1>Recovery belongs at <em>home</em>.</h1>
        <p class="sd-hero__lead">Post-stroke confidence, mobility and daily living — with CQC-regulated carers who follow therapy goals and keep familiar routines within reach.</p>
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
            <strong>Post-discharge</strong>
            <span class="sd-trust__label">Support ready when you come home</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated home care provider</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Confidence</strong>
            <span class="sd-trust__label">Encouragement over takeover</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Nottingham</strong>
            <span class="sd-trust__label">City &amp; surrounding areas</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-split reveal">
          <div class="sd-split__media">
            <img src="{{ asset('assets/images/care-stand-assist.jpg') }}" alt="Person recovering at home with carer support after a stroke in Nottingham" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>Home</strong>
              <span>Where recovery feels possible</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Recovery that belongs to you</p>
            <h2>Stroke care that protects dignity while strength returns</h2>
            <p>Leaving hospital after a stroke can feel like stepping into uncertainty — weakness on one side, speech that will not cooperate, exhaustion that arrives without warning. Home is where memories live and routines make sense again. That is why we focus on practical, patient support in the places that matter most.</p>
            <p>Caretaz carers help with washing, dressing, meals and safe movement while gently encouraging the tasks therapy teams want you practising. We listen to how you prefer things done, adapt to good days and hard days, and keep families informed without turning the sitting room into a clinic.</p>
            <p>Packages can be short-term after discharge or longer as recovery continues. Based on Mansfield Road, Nottingham, we coordinate with GPs, community therapists and relatives so everyone is working toward the same goals.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Mobility support</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Meals &amp; hydration</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Communication</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Therapy carry-over</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Post-discharge</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Plan stroke support</a>
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
          <h2>How we support stroke recovery at home</h2>
          <p>Every plan is shaped at assessment — these are the pillars families across Nottingham ask for most.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care with patience</h3>
            <p>Washing, grooming and dressing adapted to one-sided weakness, fatigue and the need to practise skills safely.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Movement</span>
            <h3>Mobility &amp; transfers</h3>
            <p>Confident help getting up, moving room to room and using equipment — reducing falls without removing your effort.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Nutrition</span>
            <h3>Meals that feel manageable</h3>
            <p>Preparing soft or preferred foods, prompting fluids and sitting with you so mealtimes stay social, not stressful.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Communication</span>
            <h3>Reassurance &amp; understanding</h3>
            <p>Extra time when words are hard, patience with aphasia, and calm company that never rushes or talks over you.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Therapy</span>
            <h3>Carry-over from clinicians</h3>
            <p>Following physio and speech guidance between appointments so progress made in sessions continues at home.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Transition</span>
            <h3>Post-discharge packages</h3>
            <p>Intensive early support after leaving hospital, then stepped back as confidence and independence grow.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>Stroke care that rebuilds belief</h2>
          <p>Regulated standards with carers who understand that recovery is emotional as well as physical.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Home-first recovery</h3>
            <p>Familiar surroundings reduce stress and help the brain reconnect with everyday life.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Confidence, not takeover</h3>
            <p>We assist where needed and step back where you can — independence is the goal.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Discharge-ready timing</h3>
            <p>Assessment and start dates aligned with hospital leaving so the first night home feels safer.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Family partnership</h3>
            <p>Clear updates and practical guidance for relatives who want to help without burning out.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How stroke care begins</h2>
          <p>From first call to the first supported morning at home — a clear path with no pressure.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Make contact</h3>
            <p>Call, email or use the form. Tell us about discharge dates, therapy plans and what feels hardest right now.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Assessment</h3>
            <p>A care manager visits — at home or before discharge — to shape a plan around mobility, communication and goals.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Care begins</h3>
            <p>Matched carers start support on the agreed schedule, with reviews as recovery milestones change.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>Stroke care — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>When can stroke care start after hospital discharge?</summary>
            <div class="sd-faq__body">We can arrange assessment before or immediately after discharge so support is ready when you arrive home. Many families book a short-term package for the first weeks, then adjust as therapy and recovery progress.</div>
          </details>
          <details>
            <summary>Do carers support physiotherapy or speech therapy goals?</summary>
            <div class="sd-faq__body">Yes. We work alongside NHS therapists and follow guidance in your care plan — encouraging agreed exercises, pacing rest, and supporting communication strategies without replacing clinical therapy.</div>
          </details>
          <details>
            <summary>Can stroke care help with one-sided weakness or fatigue?</summary>
            <div class="sd-faq__body">Our carers assist with safe transfers, dressing, meals and daily routines adapted to mobility and energy levels, always aiming to promote independence rather than take over tasks you can still manage.</div>
          </details>
          <details>
            <summary>Is stroke home care CQC-regulated?</summary>
            <div class="sd-faq__body">Yes. Caretaz Healthcare is registered with the Care Quality Commission. Stroke support is delivered by trained, supervised carers with clear documentation for families and health professionals.</div>
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
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-mobility-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Discharge bridge</span>
              <h3>Hospital to Home Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', '24-hour-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-health-check.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Round-the-clock</span>
              <h3>24-Hour Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Flexible visits</span>
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
            <h2>Let's make coming home feel like progress</h2>
            <p>Free assessment, honest advice about hours and costs, and support timed around discharge — no obligation.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Book assessment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-mobility-support.jpg') }}" alt="Stroke recovery home care in Nottingham" width="480" height="320" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment with us</h2>
          <p>We can arrange a home or pre-discharge assessment across Nottingham as soon as possible.</p>
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
                <option selected>Stroke Care</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us about discharge dates, mobility and support needed…"></textarea></div>
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
