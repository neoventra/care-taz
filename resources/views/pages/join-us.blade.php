@extends('layouts.app')

@section('title', 'Join Us | Careers at Caretaz Healthcare Nottingham')
@section('description', 'Join Caretaz Healthcare in Nottingham. Build a meaningful care career with fair pay, flexible shifts, full training, DBS support and a CQC-regulated team that puts dignity first. Apply today.')
@section('body_class', 'page-join')
@push('styles')
  <link rel="stylesheet" href="{{ versioned_asset('css/home-wow.css') }}">
  <link rel="stylesheet" href="{{ versioned_asset('css/pages-wow.css') }}">
@endpush

@section('content')
<main>
<section class="page-hero join-hero">
      <div class="container">
        <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> <span>/</span> <span>Join Us</span></div>
        <p class="page-hero__brand">Caretaz Healthcare</p>
        <p class="eyebrow">Careers With Purpose</p>
        <h1>Your skill. Their dignity. <span>One career that matters.</span></h1>
        <p>Join a CQC-regulated Nottingham home care team where compassion is not a slogan — it is how every visit begins. Fair support, real training, and work that changes someone's day for the better.</p>
        <div class="join-hero__actions">
          <a class="btn btn--teal" href="#apply">Start your application</a>
          <a class="btn btn--outline" href="#roles">Explore roles</a>
        </div>
      </div>
    </section>

    <section class="section join-manifesto" aria-labelledby="manifesto-heading">
      <div class="container join-manifesto__grid">
        <div class="join-manifesto__visual reveal-left">
          <div class="join-manifesto__frame">
            <img src="{{ asset('assets/images/join-manifesto.png') }}" alt="Black Caretaz carer talking warmly with a Pakistani client at home">
          </div>
          <div class="join-manifesto__float" aria-hidden="true">
            <strong>50+</strong>
            <span>Carers &amp; growing</span>
          </div>
          <div class="join-manifesto__stack">
            <img src="{{ asset('assets/images/join-team-1.png') }}" alt="Caretaz team member — East Asian carer">
            <img src="{{ asset('assets/images/join-team-2.png') }}" alt="Caretaz team member — Pakistani carer">
          </div>
        </div>
        <div class="join-manifesto__copy reveal-right">
          <p class="eyebrow">Why This Work Matters</p>
          <h2 id="manifesto-heading">Care is not a rota. It is a relationship.</h2>
          <p>At Caretaz Healthcare, the people who open our clients' doors every morning are the heart of the company. We recruit for character first — then back you with induction, supervision and a culture that protects both the people we support and the people who support them.</p>
          <p>Whether you are an experienced carer looking for a better team, or someone ready to start a meaningful career in health and social care, we want to hear from you.</p>
          <ul class="join-pledge">
            <li><span></span> Person-centred care, never rushed checklists</li>
            <li><span></span> Familiar faces matched carefully to each home</li>
            <li><span></span> Leadership from registered social workers and senior carers</li>
            <li><span></span> A Nottingham team proud of CQC and ICO registration</li>
          </ul>
          <a class="btn btn--navy" href="{{ route('about-us') }}">Meet the company</a>
        </div>
      </div>
    </section>

    <section class="section impact" aria-labelledby="join-impact-heading">
      <div class="impact__grid-bg" aria-hidden="true"></div>
      <div class="container">
        <div class="impact__head reveal">
          <p class="eyebrow">The Team Picture</p>
          <h2 id="join-impact-heading">Numbers that reflect the culture</h2>
        </div>
        <div class="impact__stats">
          <div class="impact-stat reveal" data-ring="100">
            <div class="impact-stat__ring" style="--p:0">
              <strong data-counter="50" data-suffix="+">0+</strong>
            </div>
            <span>Professional Carers</span>
          </div>
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
            <span>Years Supporting Nottingham</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section join-perks" aria-labelledby="perks-heading">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">What You Get</p>
          <h2 id="perks-heading">Built for carers who take pride in their craft</h2>
          <p>We invest in people who invest in others — with practical support, clear pathways and a workplace that respects your time.</p>
        </div>
        <div class="join-perks__grid" data-why-tilt>
          <article class="join-perk reveal" data-why-panel style="--i:0">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M10 28c5-12 15-12 20 0" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/><circle cx="20" cy="14" r="5" stroke="currentColor" stroke-width="2.2"/></svg>
            </span>
            <h3>Meaningful work, every shift</h3>
            <p>Help people stay independent at home — meals, mobility, companionship, specialist support — with continuity that families notice.</p>
          </article>
          <article class="join-perk join-perk--accent reveal" data-why-panel style="--i:1">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><rect x="8" y="10" width="24" height="20" rx="3" stroke="currentColor" stroke-width="2.2"/><path d="M14 18h12M14 24h8" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            </span>
            <h3>Training that sticks</h3>
            <p>Structured induction, shadowing, medication and safeguarding refreshers, plus development for dementia, palliative and complex needs.</p>
          </article>
          <article class="join-perk reveal" data-why-panel style="--i:2">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="12" stroke="currentColor" stroke-width="2.2"/><path d="M20 12v8l5 3" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            </span>
            <h3>Flexible patterns</h3>
            <p>Visiting hours, evenings, nights and live-in options. We match availability honestly so your rota can work with your life.</p>
          </article>
          <article class="join-perk reveal" data-why-panel style="--i:3">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M12 26l4 4 12-14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><rect x="7" y="7" width="26" height="26" rx="6" stroke="currentColor" stroke-width="2.2"/></svg>
            </span>
            <h3>Supported &amp; supervised</h3>
            <p>Accessible managers, regular check-ins and a culture that backs you when situations are complex — you are never left guessing alone.</p>
          </article>
          <article class="join-perk reveal" data-why-panel style="--i:4">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M20 8l3.5 7.2L31 16l-5.5 5.4L27 29l-7-3.7L13 29l1.5-7.6L9 16l7.5-.8L20 8z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/></svg>
            </span>
            <h3>Competitive pay &amp; mileage</h3>
            <p>Transparent rates for the work you do, with travel support where applicable and opportunities to grow into specialist packages.</p>
          </article>
          <article class="join-perk reveal" data-why-panel style="--i:5">
            <span class="join-perk__icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M12 18h16v12H12z" stroke="currentColor" stroke-width="2.2"/><path d="M16 18v-3a4 4 0 018 0v3" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            </span>
            <h3>DBS &amp; onboarding help</h3>
            <p>We guide you through enhanced DBS, references and paperwork so starting with Caretaz feels clear, safe and professional.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section join-roles section--navy" id="roles" aria-labelledby="roles-heading">
      <div class="container">
        <div class="section-head section-head--light reveal">
          <p class="eyebrow">Open Pathways</p>
          <h2 id="roles-heading">Roles we are building around</h2>
          <p>Select a pathway to see what the work involves — then apply for the one that fits you best.</p>
        </div>
        <div class="role-tabs" data-role-tabs>
          <div class="role-tabs__nav" role="tablist" aria-label="Career pathways">
            <button type="button" class="role-tab is-active" role="tab" aria-selected="true" aria-controls="role-panel-visiting" id="role-tab-visiting" data-role-tab="visiting">Visiting Carer</button>
            <button type="button" class="role-tab" role="tab" aria-selected="false" aria-controls="role-panel-livein" id="role-tab-livein" data-role-tab="livein">Live-In / 24-Hour</button>
            <button type="button" class="role-tab" role="tab" aria-selected="false" aria-controls="role-panel-night" id="role-tab-night" data-role-tab="night">Overnight Care</button>
            <button type="button" class="role-tab" role="tab" aria-selected="false" aria-controls="role-panel-specialist" id="role-tab-specialist" data-role-tab="specialist">Specialist Support</button>
          </div>

          <div class="role-panels">
            <article class="role-panel is-active" role="tabpanel" id="role-panel-visiting" aria-labelledby="role-tab-visiting" data-role-panel="visiting">
              <div class="role-panel__copy">
                <p class="role-panel__tag">Most popular pathway</p>
                <h3>Visiting / Hourly Carer</h3>
                <p>Deliver planned visits across Nottingham — personal care, medication prompts, meals, mobility and companionship. Ideal if you want variety, community routes and flexible hours.</p>
                <ul>
                  <li>Morning, daytime and evening packages</li>
                  <li>Consistent client matching where possible</li>
                  <li>Full induction and shadowing before solo visits</li>
                </ul>
                <a class="btn btn--teal" href="#apply" data-role-apply="Visiting / Hourly Carer">Apply for this role</a>
              </div>
              <div class="role-panel__media">
                <img src="{{ asset('assets/images/join-role-visiting.png') }}" alt="White carer speaking with a Muslim client during a visiting care session">
              </div>
            </article>

            <article class="role-panel" role="tabpanel" id="role-panel-livein" aria-labelledby="role-tab-livein" data-role-panel="livein" hidden>
              <div class="role-panel__copy">
                <p class="role-panel__tag">Immersive support</p>
                <h3>Live-In &amp; 24-Hour Carer</h3>
                <p>Provide continuous presence for people who need round-the-clock reassurance. Live-in placements reward maturity, calm judgement and the ability to become a trusted part of someone's home life.</p>
                <ul>
                  <li>Structured breaks and clear expectations</li>
                  <li>Strong office support while you are on placement</li>
                  <li>Suitable for experienced carers seeking depth over volume</li>
                </ul>
                <a class="btn btn--teal" href="#apply" data-role-apply="Live-In / 24-Hour Carer">Apply for this role</a>
              </div>
              <div class="role-panel__media">
                <img src="{{ asset('assets/images/join-role-livein.png') }}" alt="Live-in carer providing calm evening support">
              </div>
            </article>

            <article class="role-panel" role="tabpanel" id="role-panel-night" aria-labelledby="role-tab-night" data-role-panel="night" hidden>
              <div class="role-panel__copy">
                <p class="role-panel__tag">Night &amp; waking cover</p>
                <h3>Overnight Carer</h3>
                <p>Support safer nights — waking or sleep-in patterns — for people who need reassurance, repositioning, continence support or someone close by until morning.</p>
                <ul>
                  <li>Quiet, focused night-time routines</li>
                  <li>Clear handover with day teams</li>
                  <li>Excellent option for night-preferred schedules</li>
                </ul>
                <a class="btn btn--teal" href="#apply" data-role-apply="Overnight Carer">Apply for this role</a>
              </div>
              <div class="role-panel__media">
                <img src="{{ asset('assets/images/join-role-overnight.png') }}" alt="Overnight care support at home">
              </div>
            </article>

            <article class="role-panel" role="tabpanel" id="role-panel-specialist" aria-labelledby="role-tab-specialist" data-role-panel="specialist" hidden>
              <div class="role-panel__copy">
                <p class="role-panel__tag">Skills with depth</p>
                <h3>Specialist Care Support</h3>
                <p>Work with people living with dementia, Parkinson's, stroke recovery, cancer care or palliative needs. Training and matching ensure you are prepared — and never alone with complexity.</p>
                <ul>
                  <li>Condition-specific development pathways</li>
                  <li>Close clinical and managerial backup</li>
                  <li>Ideal if you want to deepen specialist expertise</li>
                </ul>
                <a class="btn btn--teal" href="#apply" data-role-apply="Specialist Care Support">Apply for this role</a>
              </div>
              <div class="role-panel__media">
                <img src="{{ asset('assets/images/join-role-specialist.png') }}" alt="Specialist home care support">
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section join-values" aria-labelledby="values-heading">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">Who Thrives Here</p>
          <h2 id="values-heading">We hire character. Then we train skill.</h2>
          <p>Qualifications help. Kindness, reliability and respect are non-negotiable.</p>
        </div>
        <div class="join-values__grid">
          <article class="compass-card reveal">
            <span class="compass-card__tag">01</span>
            <h3>Compassion in action</h3>
            <p>You notice the small things — a preferred cup, a favourite chair, the pace someone needs to feel themselves.</p>
          </article>
          <article class="compass-card compass-card--mission reveal">
            <span class="compass-card__tag">02</span>
            <h3>Reliability without drama</h3>
            <p>Families trust us because carers turn up, communicate clearly and treat every home with quiet professionalism.</p>
          </article>
          <article class="compass-card reveal">
            <span class="compass-card__tag">03</span>
            <h3>Dignity first</h3>
            <p>You protect privacy, choice and independence — even on busy days when it would be easier to rush.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section journey" aria-labelledby="hire-process-heading">
      <div class="journey__mesh" aria-hidden="true"></div>
      <div class="container">
        <div class="journey__head reveal">
          <p class="eyebrow">How Hiring Works</p>
          <h2 id="hire-process-heading">From first message to your first visit</h2>
          <p class="journey__lead">A clear, respectful process — so you always know where you stand.</p>
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
                <span class="journey-step__label">Step one</span>
                <h3>Apply</h3>
                <p>Send the form or your CV. Tell us your experience, availability and the kind of care you love doing.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:1">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">02</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">Step two</span>
                <h3>Conversation &amp; checks</h3>
                <p>We meet, explore fit both ways, then complete DBS, references and induction training together.</p>
              </div>
            </li>
            <li class="journey-step reveal" data-journey-step style="--i:2">
              <div class="journey-step__node">
                <span class="journey-step__pulse" aria-hidden="true"></span>
                <span class="journey-step__num">03</span>
              </div>
              <div class="journey-step__body">
                <span class="journey-step__label">Step three</span>
                <h3>Shadow &amp; start</h3>
                <p>You shadow experienced carers, get matched thoughtfully, and begin work with full team backup.</p>
              </div>
            </li>
          </ol>
        </div>

        <div class="journey__cta reveal">
          <a class="btn btn--teal" href="#apply">Begin your application</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="section" id="apply" aria-labelledby="apply-heading">
      <div class="container">
        <div class="book-focus join-apply">
          <div class="book-focus__info reveal">
            <p class="eyebrow">Apply Today</p>
            <h2 id="apply-heading">Tell us about you — we'll take it from there</h2>
            <p>Share a little about your background and availability. A member of our Nottingham recruitment team will respond promptly to arrange a conversation.</p>
            <p>Prefer email? Send your CV to <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a> or call <a href="tel:03330344121">0333 034 4121</a>.</p>
            <ol class="book-focus__steps">
              <li>
                <span class="book-focus__num" aria-hidden="true">1</span>
                <div class="book-focus__step">
                  <strong>Complete the form</strong>
                  <p>Takes a few minutes. No long online portal — just the essentials.</p>
                </div>
              </li>
              <li>
                <span class="book-focus__num" aria-hidden="true">2</span>
                <div class="book-focus__step">
                  <strong>We get in touch</strong>
                  <p>Expect a warm, practical conversation about roles, hours and what you want from the work.</p>
                </div>
              </li>
              <li>
                <span class="book-focus__num" aria-hidden="true">3</span>
                <div class="book-focus__step">
                  <strong>Onboard with support</strong>
                  <p>Checks, training and shadowing — guided every step until you feel ready.</p>
                </div>
              </li>
            </ol>
          </div>
          <form class="book-form reveal-right" data-join-form>
            <div class="book-form__glow" aria-hidden="true"></div>
            <p class="eyebrow" style="margin-bottom:0.85rem;">Application form</p>
            <div class="form-grid">
              <div class="form-field"><label for="join-name">Full name</label><input id="join-name" name="name" autocomplete="name" required placeholder="Your full name"></div>
              <div class="form-field"><label for="join-email">Email</label><input id="join-email" name="email" type="email" autocomplete="email" required placeholder="name@example.com"></div>
              <div class="form-field"><label for="join-phone">Phone</label><input id="join-phone" name="phone" type="tel" autocomplete="tel" required placeholder="Best number to reach you"></div>
              <div class="form-field"><label for="join-role">Role of interest</label>
                <select id="join-role" name="role" required>
                  <option value="">Select a pathway…</option>
                  <option>Visiting / Hourly Carer</option>
                  <option>Live-In / 24-Hour Carer</option>
                  <option>Overnight Carer</option>
                  <option>Specialist Care Support</option>
                  <option>Not sure — open to advice</option>
                  <option>Other / office support</option>
                </select>
              </div>
              <div class="form-field"><label for="join-experience">Care experience</label>
                <select id="join-experience" name="experience" required>
                  <option value="">Select…</option>
                  <option>No formal experience yet</option>
                  <option>Under 1 year</option>
                  <option>1–3 years</option>
                  <option>3–5 years</option>
                  <option>5+ years</option>
                </select>
              </div>
              <div class="form-field"><label for="join-availability">Availability</label>
                <select id="join-availability" name="availability" required>
                  <option value="">Select…</option>
                  <option>Full-time</option>
                  <option>Part-time</option>
                  <option>Evenings / nights</option>
                  <option>Weekends</option>
                  <option>Flexible / open</option>
                </select>
              </div>
              <div class="form-field form-field--full"><label for="join-message">Tell us about yourself</label><textarea id="join-message" name="message" rows="4" placeholder="What draws you to care work, any qualifications, and the hours that suit you…"></textarea></div>
            </div>
            <button class="btn btn--teal" type="submit">Submit application</button>
            <p class="form-note">By submitting, you agree we may contact you about careers at Caretaz Healthcare. We never sell your details.</p>
          </form>
        </div>
      </div>
    </section>

    <section class="section faq-theatre" aria-labelledby="join-faq-heading">
      <div class="container">
        <div class="faq-theatre__head reveal">
          <p class="eyebrow">Before You Apply</p>
          <h2 id="join-faq-heading">Careers questions, answered clearly</h2>
        </div>
        <div class="faq-stage">
          <details class="faq-item reveal">
            <summary>Do I need previous care experience?</summary>
            <div class="faq-body">
              <p>Experience helps, but it is not always essential. We look for compassion, reliability and genuine respect for people. Where the fit is right, induction, shadowing and ongoing development help you grow into the role with confidence.</p>
            </div>
          </details>
          <details class="faq-item reveal">
            <summary>What checks happen before I start?</summary>
            <div class="faq-body">
              <p>All carers complete an enhanced DBS check, provide suitable references and finish induction training before working independently. We guide you through each step and keep communication clear while checks are underway.</p>
            </div>
          </details>
          <details class="faq-item reveal">
            <summary>How flexible are the shifts?</summary>
            <div class="faq-body">
              <p>We offer visiting hours, evenings, overnight and live-in patterns. During recruitment we discuss your availability so we can match you to packages that work for your life as well as our clients' needs.</p>
            </div>
          </details>
          <details class="faq-item reveal">
            <summary>Will I get training for dementia or complex care?</summary>
            <div class="faq-body">
              <p>Yes. Alongside core induction, we support development for dementia, Parkinson's, stroke, palliative and other specialist pathways — so you feel prepared for the homes you are matched to.</p>
            </div>
          </details>
          <details class="faq-item reveal">
            <summary>How quickly will I hear back?</summary>
            <div class="faq-body">
              <p>We aim to respond promptly to every application. For the fastest reply, call 0333 034 4121 after submitting the form, especially if you are available to start soon.</p>
            </div>
          </details>
        </div>
        <div class="faq-help reveal">
          <p>Still unsure whether Caretaz is the right fit? We're happy to talk it through with no pressure.</p>
          <div class="btn-row">
            <a class="btn btn--teal" href="tel:03330344121">Call the team</a>
            <a class="btn btn--outline" href="mailto:info@caretazhealthcare.co.uk">Email your CV</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section care-spotlight" aria-labelledby="join-spotlight-heading">
      <div class="container care-spotlight__inner reveal">
        <div class="care-spotlight__copy">
          <p class="eyebrow">Ready When You Are</p>
          <h2 id="join-spotlight-heading">The next great chapter of someone's care could start with you.</h2>
          <p>Caretaz Healthcare is growing carefully — hiring people who want to do this work properly. If that sounds like you, we would be proud to have you on the team.</p>
          <a class="btn btn--teal" href="#apply">Apply now</a>
        </div>
        <div class="care-spotlight__media">
          <div class="care-spotlight__shine" aria-hidden="true"></div>
          <img src="{{ asset('assets/images/join-spotlight.png') }}" alt="Caretaz carers and client enjoying time outdoors together">
        </div>
      </div>
    </section>

    <section class="section trust-seal" aria-labelledby="join-trust-heading">
      <div class="trust-seal__wash" aria-hidden="true"></div>
      <div class="container">
        <div class="trust-seal__card reveal-zoom">
          <div class="trust-seal__logos">
            <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
            <img src="{{ asset('assets/images/ico.png') }}" alt="ICO">
          </div>
          <div class="trust-seal__copy">
            <p class="eyebrow">Independent Oversight</p>
            <h3 id="join-trust-heading">Join a fully regulated care provider</h3>
            <p>Caretaz Healthcare is registered with and regulated by the CQC, the independent body overseeing health and social care in England. Our practices are assessed against national standards — the same standards that protect the people you will support.</p>
            <p>We're also registered with the ICO, reflecting our commitment to protecting personal information — including yours as an applicant and colleague.</p>
          </div>
          <div class="trust-seal__marks" aria-hidden="true">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection
