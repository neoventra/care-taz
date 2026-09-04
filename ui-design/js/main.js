document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header");
  const toggle = document.querySelector(".nav-toggle");

  if (toggle && header) {
    toggle.addEventListener("click", () => {
      const open = header.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
    header.querySelectorAll(".nav a").forEach((link) => {
      link.addEventListener("click", () => {
        header.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  const bindFormThankYou = (selector, message) => {
    const form = document.querySelector(selector);
    if (!form) return;
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const note = form.querySelector(".form-note");
      if (note) {
        note.textContent = message;
        note.style.color = "#0b1522";
      }
      form.reset();
    });
  };

  bindFormThankYou(
    "[data-appointment-form]",
    "Thank you. Please call 0333 034 4121 or email info@caretazhealthcare.co.uk and our team will respond as soon as possible."
  );
  bindFormThankYou(
    "[data-join-form]",
    "Thank you for applying. Please call 0333 034 4121 or email info@caretazhealthcare.co.uk and our recruitment team will be in touch shortly."
  );

  // Join Us — interactive role pathway tabs
  const roleTabs = document.querySelector("[data-role-tabs]");
  if (roleTabs) {
    const tabs = [...roleTabs.querySelectorAll("[data-role-tab]")];
    const panels = [...roleTabs.querySelectorAll("[data-role-panel]")];
    const roleSelect = document.querySelector("#join-role");

    const activateRole = (key) => {
      tabs.forEach((tab) => {
        const on = tab.getAttribute("data-role-tab") === key;
        tab.classList.toggle("is-active", on);
        tab.setAttribute("aria-selected", on ? "true" : "false");
      });
      panels.forEach((panel) => {
        const on = panel.getAttribute("data-role-panel") === key;
        panel.classList.toggle("is-active", on);
        if (on) panel.removeAttribute("hidden");
        else panel.setAttribute("hidden", "");
      });
    };

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        activateRole(tab.getAttribute("data-role-tab"));
      });
    });

    roleTabs.querySelectorAll("[data-role-apply]").forEach((btn) => {
      btn.addEventListener("click", () => {
        const role = btn.getAttribute("data-role-apply");
        if (roleSelect && role) {
          const match = [...roleSelect.options].find((o) => o.value === role || o.textContent === role);
          if (match) roleSelect.value = match.value || match.textContent;
        }
      });
    });
  }

  // Auto-enhance common blocks with reveal variants when missing
  const autoTargets = [
    [".feature-card", "reveal"],
    [".service-card", "reveal"],
    [".why-card", "reveal"],
    [".why-panel", "reveal"],
    [".pillar", "reveal"],
    [".care-moments__card", "reveal"],
    [".voice-strip__inner", "reveal"],
    [".compass-card", "reveal"],
    [".hub-card", "reveal"],
    [".office-tile", "reveal"],
    [".tier", "reveal"],
    [".pick-card", "reveal"],
    [".join-perk", "reveal"],
    [".mosaic__item", "reveal"],
    [".impact-stat", "reveal"],
    [".process-step", "reveal"],
    [".journey-step", "reveal"],
    [".contact-card", "reveal"],
    [".package-card", "reveal"],
    [".value-card", "reveal"],
    [".faq-item", "reveal"],
    [".cqc-banner", "reveal-zoom"],
    [".trust-seal__card", "reveal-zoom"],
    [".estimate-card", "reveal-right"],
    [".cta-band", "reveal"],
    [".care-spotlight__inner", "reveal"],
    [".form-card", "reveal-right"],
    [".book-form", "reveal-right"],
    [".about-media", "reveal-left"],
    [".about-copy", "reveal-right"],
    [".side-card", "reveal-right"],
  ];

  autoTargets.forEach(([selector, cls]) => {
    document.querySelectorAll(selector).forEach((el, index) => {
      if (![...el.classList].some((c) => c.startsWith("reveal"))) {
        el.classList.add(cls);
      }
      el.style.transitionDelay = `${Math.min(index * 0.06, 0.36)}s`;
    });
  });

  const reveals = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right, .reveal-zoom"
  );

  if ("IntersectionObserver" in window && reveals.length) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    reveals.forEach((el) => io.observe(el));
  } else {
    reveals.forEach((el) => el.classList.add("is-visible"));
  }

  document.querySelectorAll("[data-counter]").forEach((el) => {
    const target = Number(el.getAttribute("data-counter") || "0");
    const suffix = el.getAttribute("data-suffix") || "";
    let started = false;
    const run = () => {
      if (started) return;
      started = true;
      const duration = 1400;
      const start = performance.now();
      const tick = (now) => {
        const p = Math.min(1, (now - start) / duration);
        const val = Math.floor(target * (0.5 - Math.cos(Math.PI * p) / 2));
        el.textContent = `${val}${suffix}`;
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };
    if ("IntersectionObserver" in window) {
      const io = new IntersectionObserver((entries) => {
        if (entries.some((e) => e.isIntersecting)) {
          run();
          io.disconnect();
        }
      });
      io.observe(el);
    } else {
      run();
    }
  });

  // Soft parallax on hero badge / floating stats
  const floatEls = document.querySelectorAll(".hero__badge, .about-media__stat, .story__float--a");
  if (floatEls.length && window.matchMedia("(pointer:fine)").matches) {
    window.addEventListener(
      "scroll",
      () => {
        const y = window.scrollY * 0.04;
        floatEls.forEach((el) => {
          el.style.translate = `0 ${y * -1}px`;
        });
      },
      { passive: true }
    );
  }

  // Why Choose Us — soft 3D tilt on pointer
  const whyGrid = document.querySelector("[data-why-tilt]");
  if (whyGrid && window.matchMedia("(pointer:fine)").matches && !window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    whyGrid.querySelectorAll("[data-why-panel]").forEach((panel) => {
      panel.addEventListener("pointermove", (e) => {
        const r = panel.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - 0.5;
        const y = (e.clientY - r.top) / r.height - 0.5;
        panel.classList.add("is-tilting");
        panel.style.transform = `rotateY(${x * 10}deg) rotateX(${y * -8}deg) translateZ(12px)`;
      });
      panel.addEventListener("pointerleave", () => {
        panel.classList.remove("is-tilting");
        panel.style.transform = "";
      });
    });
  }

  // Care journey — draw path + activate steps on scroll
  const journey = document.querySelector(".journey");
  if (journey) {
    const line = journey.querySelector("[data-journey-line]");
    const steps = [...journey.querySelectorAll("[data-journey-step]")];
    const activate = () => {
      journey.classList.add("is-drawn");
      steps.forEach((step, i) => {
        window.setTimeout(() => step.classList.add("is-active"), 280 + i * 320);
      });
    };
    if ("IntersectionObserver" in window) {
      const io = new IntersectionObserver(
        (entries) => {
          if (entries.some((e) => e.isIntersecting)) {
            activate();
            io.disconnect();
          }
        },
        { threshold: 0.28 }
      );
      io.observe(journey);
    } else {
      activate();
    }
    if (line) line.getTotalLength?.();
  }

  // Impact rings — animate conic progress with counters
  document.querySelectorAll(".impact-stat[data-ring]").forEach((stat) => {
    const ring = stat.querySelector(".impact-stat__ring");
    const target = Number(stat.getAttribute("data-ring") || "0");
    if (!ring) return;
    let started = false;
    const run = () => {
      if (started) return;
      started = true;
      const duration = 1400;
      const start = performance.now();
      const tick = (now) => {
        const p = Math.min(1, (now - start) / duration);
        const eased = 0.5 - Math.cos(Math.PI * p) / 2;
        ring.style.setProperty("--p", String(Math.round(target * eased)));
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };
    if ("IntersectionObserver" in window) {
      const io = new IntersectionObserver((entries) => {
        if (entries.some((e) => e.isIntersecting)) {
          run();
          io.disconnect();
        }
      }, { threshold: 0.35 });
      io.observe(stat);
    } else {
      run();
    }
  });
});
