@extends('layouts.app')

@section('title', 'FAQs | Caretaz Healthcare')
@section('description', 'Frequently asked questions about Caretaz Healthcare services.')
@section('body_class', 'page-faqs')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <span>FAQs</span></div>
        <h1>Frequently Asked Questions</h1>
        <p>What can we help with today?</p>
      </div>
    </section>

    <section class="section faq-theatre" aria-labelledby="faq-theatre-heading">
      <div class="container">
        <div class="faq-theatre__head reveal">
          <p class="eyebrow">Help Centre</p>
          <h2 id="faq-theatre-heading">Answers to common care questions</h2>
          <p>If you cannot find what you need, call 0333 034 4121 and our team will help.</p>
        </div>
        <div class="faq-stage">
          <details class="faq-item reveal" open><summary>Is Caretaz Healthcare CQC registered?</summary><div class="faq-body">Yes. Caretaz Healthcare is fully regulated by the Care Quality Commission (CQC) and registered with the Information Commissioner's Office (ICO). Our care is independently inspected and monitored, so families in Nottingham can be confident it meets national quality and safety standards.</div></details>
          <details class="faq-item reveal"><summary>Are Caretaz Healthcare's caregivers trained and background-checked?</summary><div class="faq-body">Yes. Every caregiver passes an enhanced background check (DBS) and completes structured training before working with clients. We select caregivers for both clinical competence and compassion, and we monitor performance on an ongoing basis.</div></details>
          <details class="faq-item reveal"><summary>How does Caretaz Healthcare match a caregiver to my family?</summary><div class="faq-body">We match caregivers based on your care needs, personality, schedule, and any specialist requirements (for example, dementia experience or Parkinson's care). The goal is a consistent, compatible caregiver relationship, not a rotating cast of strangers.</div></details>
          <details class="faq-item reveal"><summary>Can I choose how often and how long care visits last?</summary><div class="faq-body">Yes. Caretaz Healthcare offers flexible visit lengths and frequencies, from a single hourly visit to 24-hour live-in care. We agree the schedule with you during the initial assessment and can adjust it as your needs change.</div></details>
          <details class="faq-item reveal"><summary>Does Caretaz Healthcare provide urgent or same-week care?</summary><div class="faq-body">Yes. Caretaz Healthcare accommodates urgent care requests and will do everything possible to arrange support quickly. Call 0333 034 4121 directly for urgent needs rather than using the contact form.</div></details>
          <details class="faq-item reveal"><summary>How quickly can care start after I contact Caretaz Healthcare?</summary><div class="faq-body">After a free care assessment, we agree a care plan with you and aim to start support as soon as practically possible — often within days for standard requests, and faster for urgent cases. Call 0333 034 4121 to discuss timing for your specific situation.</div></details>
          <details class="faq-item reveal"><summary>Where does Caretaz Healthcare provide care?</summary><div class="faq-body">Caretaz Healthcare provides home care across Nottingham and the surrounding areas. Contact us with your postcode on 0333 034 4121 or info@caretazhealthcare.co.uk and we'll confirm availability.</div></details>
          <details class="faq-item reveal"><summary>What types of home care does Caretaz Healthcare offer?</summary><div class="faq-body">Caretaz Healthcare offers hourly care, overnight care, 24-hour live-in care, dementia care, palliative and end-of-life care, Parkinson's disease support, stroke care, cancer care support, supported living, companionship care, housekeeping, hospital-to-home transition care, and live-in care for couples.</div></details>
          <details class="faq-item reveal"><summary>How is client privacy and confidentiality protected at Caretaz Healthcare?</summary><div class="faq-body">Caretaz Healthcare is registered with the ICO and follows strict data protection policies. All personal and medical information is stored securely and only accessible to staff directly involved in a client's care.</div></details>
          <details class="faq-item reveal"><summary> How does billing and payment work with Caretaz Healthcare?</summary><div class="faq-body">After an assessment and agreed care plan, we aim to start support as soon as practical. Urgent arrangements can often be prioritised — please call us to discuss.</div></details>
          <details class="faq-item reveal"><summary>Is home care from Caretaz Healthcare available for couples living together?</summary><div class="faq-body">Yes. Caretaz Healthcare offers live-in care for couples, allowing partners to remain together at home rather than being cared for separately.</div></details>
          <details class="faq-item reveal"><summary>Does Caretaz Healthcare help with hospital discharge?</summary><div class="faq-body">Yes. Our hospital-to-home care service supports clients transitioning from hospital back to independent living, including help with mobility, medication routines, and daily tasks during recovery.</div></details>
        </div>
        <div class="faq-help reveal">
          <p>Still have questions? Speak to our Nottingham care team — we're happy to help.</p>
          <div class="btn-row">
            <a class="btn btn--teal" href="tel:03330344121">Call 0333 034 4121</a>
            <a class="btn btn--outline" href="mailto:info@caretazhealthcare.co.uk">Email us</a>
          </div>
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
          <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Professional caregiver">
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
