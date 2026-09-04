@extends('layouts.app')

@section('title', 'Carer Respite Break Cover in Nottingham | Family Carer Relief | Caretaz Healthcare')
@section('description', 'Carer respite break cover in Nottingham — trusted CQC-regulated carers so family carers can rest, work or take a break while loved ones stay supported at home.')
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
          <a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Services</a> <span>/</span> <span>Carer Respite</span>
        </nav>
        <span class="sd-brand">Caretaz Healthcare · Relief for family carers</span>
        <h1>You need a break — they stay <em>supported</em></h1>
        <p class="sd-hero__lead">Carer respite break cover across Nottingham so family carers can rest, work or simply breathe — while loved ones remain safe, settled and cared for by CQC-regulated professionals.</p>
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
            <strong>Flexible cover</strong>
            <span class="sd-trust__label">Hours, days or overnight</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>CQC</strong>
            <span class="sd-trust__label">Regulated home care provider</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Nottingham</strong>
            <span class="sd-trust__label">City &amp; surrounding areas</span>
          </div>
          <div class="sd-trust__card reveal">
            <strong>Familiar routines</strong>
            <span class="sd-trust__label">Care plans you recognise</span>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-split reveal">
          <div class="sd-split__media">
            <img src="{{ asset('assets/images/care-meal-support.jpg') }}" alt="Professional carer providing respite cover for a family carer in Nottingham" width="640" height="480" loading="lazy">
            <div class="sd-split__float">
              <strong>You rest</strong>
              <span>They stay supported</span>
            </div>
          </div>
          <div class="sd-split__copy">
            <p class="eyebrow">Space for family carers</p>
            <h2>Reliable cover that protects both of you</h2>
            <p>Family carers give everything — and burnout is real. Respite break cover means a trained carer steps in for an afternoon, a night or a longer stretch so you can sleep, see friends, attend your own appointments or take a proper holiday.</p>
            <p>We learn how your loved one likes things done: morning routines, favourite meals, what calms anxiety and which tasks need a gentle hand. As a CQC-regulated Nottingham provider, we document visits and keep you informed without overwhelming you on your break.</p>
            <p>Some families use respite occasionally; others build regular slots into the week. Either way, the goal is the same — sustainable care that does not ask one person to carry it alone forever.</p>
            <div class="sd-pill-row">
              <span class="sd-pill"><i aria-hidden="true"></i> Daytime cover</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Overnight relief</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Personal care</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Meals &amp; meds</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Companionship</span>
              <span class="sd-pill"><i aria-hidden="true"></i> Planned breaks</span>
            </div>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Arrange respite cover</a>
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
          <h2>What respite cover can include</h2>
          <p>Packages follow your loved one's care plan — these are the supports family carers ask for most.</p>
        </header>
        <div class="sd-includes">
          <article class="sd-include reveal">
            <span class="sd-include__label">Daily living</span>
            <h3>Personal care continuity</h3>
            <p>Washing, dressing and toileting support delivered the way your loved one prefers — so nothing feels suddenly different.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Nutrition</span>
            <h3>Meals &amp; hydration</h3>
            <p>Preparing familiar foods, prompting drinks and keeping mealtimes calm while you are out or away.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Health</span>
            <h3>Medication prompts</h3>
            <p>Timely reminders aligned with the existing pharmacy plan, with clear records for your return.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Night</span>
            <h3>Overnight presence</h3>
            <p>Waking or sleeping night cover so you can rest knowing someone is there if help is needed.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Connection</span>
            <h3>Companionship</h3>
            <p>Conversation, reassurance and gentle activity so your loved one does not feel abandoned in your absence.</p>
          </article>
          <article class="sd-include reveal">
            <span class="sd-include__label">Flexibility</span>
            <h3>One-off or recurring</h3>
            <p>Book a single afternoon, a weekend, or regular weekly slots that keep you sustainable long term.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose us</p>
          <h2>Respite that feels trustworthy</h2>
          <p>Regulated standards with carers who respect the relationship you have built at home.</p>
        </header>
        <div class="sd-values">
          <article class="sd-value reveal">
            <div class="sd-value__num">01</div>
            <h3>Your plan, followed</h3>
            <p>We do not invent a new routine — we honour what already works for your household.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">02</div>
            <h3>Guilt-free rest</h3>
            <p>Clear updates so you can switch off knowing care is happening as agreed.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">03</div>
            <h3>Local &amp; responsive</h3>
            <p>Nottingham-based team who understand short-notice needs and planned breaks alike.</p>
          </article>
          <article class="sd-value reveal">
            <div class="sd-value__num">04</div>
            <h3>Room to grow</h3>
            <p>Step into regular hourly, overnight or 24-hour care under the same provider when ready.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Getting started</p>
          <h2>How respite cover begins</h2>
          <p>A straightforward path from first call to cover you can trust.</p>
        </header>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">1</div>
            <h3>Tell us what you need</h3>
            <p>Dates, times and what your loved one needs while you take a break — no pressure, just clarity.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">2</div>
            <h3>Assessment</h3>
            <p>A care manager visits to understand routines, risks and preferences before cover starts.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">3</div>
            <h3>Cover begins</h3>
            <p>Matched carers arrive on the agreed schedule so you can step away with confidence.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <header class="sd-head reveal">
          <p class="eyebrow">Questions answered</p>
          <h2>Carer respite — frequently asked</h2>
        </header>
        <div class="sd-faq reveal">
          <details>
            <summary>How long can carer respite cover last?</summary>
            <div class="sd-faq__body">From a few hours so you can rest or run errands, through overnight cover, to several days if you need a longer break. We tailor duration to your plans and your loved one's care plan.</div>
          </details>
          <details>
            <summary>Will the same routines continue while I am away?</summary>
            <div class="sd-faq__body">Yes. We follow the care plan you agree with us — preferred times, how tasks are done, medication prompts and what helps your loved one feel settled — so cover feels familiar, not disruptive.</div>
          </details>
          <details>
            <summary>Is respite care CQC-regulated?</summary>
            <div class="sd-faq__body">Yes. Caretaz Healthcare is registered with the Care Quality Commission. Respite carers are recruited, trained and supervised to the same standards as our ongoing Nottingham home care.</div>
          </details>
          <details>
            <summary>Can respite become regular ongoing care?</summary>
            <div class="sd-faq__body">Many families start with occasional cover and later add weekly visits or overnight support. We keep transitions smooth under one registered provider.</div>
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
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Night support</span>
              <h3>Overnight Care</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'holiday-companionship') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-garden-outdoors.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">Travel breaks</span>
              <h3>Holiday Companionship</h3>
            </div>
          </a>
          <a class="reveal" href="{{ route('services.show', 'hourly-care') }}">
            <div class="sd-related__media"><img src="{{ asset('assets/images/care-tablet-together.jpg') }}" alt="" width="400" height="225" loading="lazy"></div>
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
            <h2>Let's give you space to rest</h2>
            <p>Free assessment, honest advice about hours and costs, and no obligation to proceed.</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="#appointment">Book assessment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="{{ asset('assets/images/care-banner-companionship.jpg') }}" alt="Carer respite break cover in Nottingham" width="480" height="320" loading="lazy">
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
                <option>Supported Living</option>
                <option>Urgent Care</option>
                <option>Dementia Care</option>
                <option>Palliative/End-of-Life Care</option>
                <option>Parkinson's Care</option>
                <option>Holiday Companionship</option>
                <option selected>Carer Respite</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us when you need cover and what support is required…"></textarea></div>
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
