@extends('layouts.app')

@section('title', 'Supported Living in Nottingham | Independence at Home | Caretaz Healthcare')
@section('description', 'Supported living in Nottingham that protects independence, choice and community life — CQC-regulated help with daily living, skills and getting out, without taking over your home.')
@section('body_class', 'sd')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/service-detail.css') }}">
@endpush

@section('content')
<main>
<section class="sd-hero">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/care-meal-support.jpg')"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>Supported Living</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Independence first</span>
        <h1>Your home. Your choices. Our <em>support</em></h1>
        <p class="sd-hero__lead">Supported living that backs independence across Nottingham — practical help, skills and community access from CQC-regulated carers who enable, never overshadow.</p>
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
            <strong>Choice</strong>
            <span class="sd-trust__label">You lead every decision</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Community</strong>
            <span class="sd-trust__label">Outings, clubs &amp; local life</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated home care provider</span>
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
            <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Supported living carer enabling independence at home in Nottingham" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>You lead</strong>
              <span>We enable, not take over</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Independence with a safety net</p>
            <h2>Live your life — with the right support nearby</h2>
            <p>Supported living is for people who want to stay in their own home or tenancy and keep shaping their days — shopping routes through the Victoria Centre, a favourite café in Beeston, a college course, or simply managing mornings without feeling overwhelmed.</p>
            <p>Caretaz Healthcare builds plans around what you want to do more of, not a generic task list. As a CQC-regulated provider on Mansfield Road, we focus on skills, confidence and safe routines: cooking side-by-side, prompting bills and appointments, accompanying you into the community, and stepping back when you have it covered.</p>
            <p>Families and professionals often tell us the difference is respect — support that protects privacy and choice while still being there when health, learning disability or mental wellbeing needs a steadier hand.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Daily living skills</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Community access</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Appointments</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Household routines</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Goal setting</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Arrange supported living</a>
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
          <h2>Support that grows your independence</h2>
          <p>Every package is co-designed with you — these are the building blocks Nottingham clients ask for most.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Skills</span>
            <h3>Daily living coaching</h3>
            <p>Cooking, laundry, cleaning and planning the week — doing with you so confidence sticks, not dependence.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Care</span>
            <h3>Personal care support</h3>
            <p>Dignified help with washing, dressing and wellbeing when you want it — always at your pace and preference.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Out &amp; about</span>
            <h3>Community &amp; social life</h3>
            <p>Travel training, clubs, shops and hobbies so your world stays bigger than four walls.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Appointments &amp; prompts</h3>
            <p>Reminders and accompaniment to GP, pharmacy or hospital — keeping health admin from derailing the week.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Home</span>
            <h3>Safe household routines</h3>
            <p>Practical structure around meals, medication prompts and a home that feels organised and yours.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Progress</span>
            <h3>Goals &amp; reviews</h3>
            <p>Clear goals you choose, reviewed regularly so support shrinks or shifts as your life moves forward.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>Supported living with real respect</h2>
          <p>CQC standards paired with a team that treats independence as the point — not an afterthought.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Your agenda</h3>
            <p>Plans start with your goals and preferences — not a template that ignores how you want to live.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Enable, don't replace</h3>
            <p>We coach and accompany so skills grow; we only do for you when safety or choice asks for it.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Local knowledge</h3>
            <p>Nottingham routes, services and communities — support that knows where you actually go.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>One regulated team</h3>
            <p>Step up to hourly, overnight or other packages under the same CQC-registered provider when needed.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How supported living begins</h2>
          <p>A clear path from first conversation to support that fits your tenancy and goals.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Make contact</h3>
            <p>Call 0333 034 4121 or use the form. Tell us what independence looks like for you right now.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Assessment</h3>
            <p>We meet at home across Nottingham to map strengths, risks, routines and the support you actually want.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Support starts</h3>
            <p>Matched carers begin on the agreed hours, with reviews that celebrate progress and adjust the plan.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>Supported living — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>What does supported living with Caretaz include?</summary>
            <div class="sd-faq__body">Support is tailored to you — help with personal care, meals, household skills, budgeting prompts, appointments, community access and building confidence. You keep control of your home and choices; we enable, we do not take over.</div>
          </details>
          <details>
            <summary>Is supported living the same as residential care?</summary>
            <div class="sd-faq__body">No. Supported living is delivered in your own home or tenancy so you keep independence and community ties. Residential care means moving into a care home. We help people stay where they want to live.</div>
          </details>
          <details>
            <summary>Is supported living CQC-regulated?</summary>
            <div class="sd-faq__body">Yes. Caretaz Healthcare is registered with the Care Quality Commission. Support workers are recruited, trained and supervised to the same safeguarding and quality standards as our other Nottingham home care services.</div>
          </details>
          <details>
            <summary>Can support change as my confidence grows?</summary>
            <div class="sd-faq__body">Yes. Packages are reviewed regularly. Hours can step down as skills grow, or step up if health or circumstances change — always with your goals and preferences at the centre.</div>
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
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Flexible visits</span>
              <h3>Hourly Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'companionship-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Social wellbeing</span>
              <h3>Companionship Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'housekeeping-services') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/service-cleaning.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Home help</span>
              <h3>Housekeeping Services</h3>
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
            <h2>Let's design support that protects your independence</h2>
            <p>Free assessment, honest advice about hours, and a plan built around your goals — not ours.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Book assessment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="Supported living in Nottingham" width="480" height="320" loading="lazy">
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
                <option>24-Hour Care</option>
                <option>Hourly Care</option>
                <option>Overnight Care</option>
                <option selected>Supported Living</option>
                <option>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option>Holiday Companionship</option>
                <option>Carer Respite</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us about your goals and the support you want…"></textarea></div>
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
