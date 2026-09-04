<footer class="site-footer faq-footer">
    <div class="container">
      <div class="faq-footer__top">
        <div class="faq-footer__brand">
          <a class="logo" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-ltd-transparent.png') }}" alt="Caretaz Healthcare Ltd."></a>
          <p class="faq-footer__motto">Real care starts with how someone feels when they open the door. At Caretaz, that means dignity first: room to stay independent, space for privacy, and support that flexes around your day — not a timetable that takes it over.</p>
        </div>
        <div class="faq-footer__seal" aria-label="Regulatory registrations">
          <div class="faq-footer__seal-logos">
            <img src="{{ asset('assets/images/cqc.png') }}" alt="Care Quality Commission">
            <img src="{{ asset('assets/images/ico.png') }}" alt="ICO">
          </div>
          <div class="faq-footer__seal-copy">
            <p class="faq-footer__seal-label">Independent Oversight</p>
            <strong>Registered with the CQC &amp; ICO</strong>
            <p>Regulated care standards. Protected personal data. Trust you can verify.</p>
          </div>
        </div>
      </div>

      <div class="faq-footer__grid">
        <div>
          <h4>Quick Links</h4>
          <div class="footer-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about-us') }}">About Us</a>
            <a href="{{ route('services.index') }}">Services</a>
            <a href="{{ route('pricing') }}">Pricing</a>
            <a href="{{ route('faqs') }}">FAQs</a>
            <a href="{{ route('join-us') }}">Join Us</a>
            <a href="{{ route('contact-us') }}">Contact Us</a>
          </div>
        </div>
        <div>
          <h4>Our Services</h4>
          <div class="footer-links">
            <a href="{{ route('services.show', 'urgent-care') }}">Urgent Care</a>
            <a href="{{ route('services.show', '24-hour-care') }}">24-Hour Care</a>
            <a href="{{ route('services.show', 'hourly-care') }}">Hourly Care</a>
            <a href="{{ route('services.show', 'live-in-care-for-couples') }}">Live-In Care For Couples</a>
            <a href="{{ route('services.show', 'overnight-care') }}">Overnight Care</a>
            <a href="{{ route('services.show', 'palliative-care') }}">Palliative / End-of-Life Care</a>
            <a href="{{ route('services.index') }}">View all services</a>
          </div>
        </div>
        <div>
          <h4>Get In Touch</h4>
          <ul class="footer-contact">
            <li><strong>Phone:</strong> <a href="tel:03330344121">0333 034 4121</a></li>
            <li><strong>Email:</strong> <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a></li>
            <li><strong>Web:</strong> <a href="https://www.caretazhealthcare.co.uk/">www.caretazhealthcare.co.uk</a></li>
            <li><strong>Address:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</li>
          </ul>
        </div>
      </div>

      <div class="faq-footer__bottom">
        <span>Copyright &copy; 2026 Caretaz Healthcare LTD. All rights reserved.</span>
        <span class="faq-footer__badge">Registered with the CQC &amp; ICO</span>
      </div>
    </div>
  </footer>
