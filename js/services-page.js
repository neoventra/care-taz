document.addEventListener("DOMContentLoaded", () => {
  const filterBtns = document.querySelectorAll(".svc-filter__btn");
  const tiles = document.querySelectorAll(".svc-tile");
  const spotlight = document.querySelector("[data-spotlight]");
  const grid = document.getElementById("svc-grid");

  if (!filterBtns.length || !tiles.length) return;

  const setFilter = (filter) => {
    filterBtns.forEach((btn) => {
      const active = btn.getAttribute("data-filter") === filter;
      btn.classList.toggle("is-active", active);
      btn.setAttribute("aria-selected", active ? "true" : "false");
    });

    let visible = 0;
    tiles.forEach((tile, index) => {
      const cats = (tile.getAttribute("data-categories") || "").split(/\s+/);
      const show = filter === "all" || cats.includes(filter);
      tile.classList.toggle("is-hidden", !show);
      if (show) {
        visible += 1;
        tile.style.transitionDelay = `${Math.min(index * 0.04, 0.28)}s`;
      }
    });

    if (spotlight) {
      const features = spotlight.querySelectorAll("[data-categories]");
      features.forEach((el) => {
        const cats = (el.getAttribute("data-categories") || "").split(/\s+/);
        const show = filter === "all" || cats.includes(filter);
        el.style.display = show ? "" : "none";
      });
      const anyFeature = [...features].some((el) => el.style.display !== "none");
      spotlight.style.display = anyFeature ? "" : "none";
    }

    if (grid) {
      grid.classList.toggle("is-empty", visible === 0);
    }
  };

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      setFilter(btn.getAttribute("data-filter") || "all");
    });
  });

  // Soft pointer tilt on tiles (fine pointers only)
  const canTilt =
    window.matchMedia("(pointer:fine)").matches &&
    !window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (canTilt) {
    document.querySelectorAll(".svc-tile, .svc-spotlight, .svc-side-feature").forEach((card) => {
      card.addEventListener("pointermove", (event) => {
        const rect = card.getBoundingClientRect();
        const x = (event.clientX - rect.left) / rect.width - 0.5;
        const y = (event.clientY - rect.top) / rect.height - 0.5;
        card.style.transform = `translateY(-6px) rotateX(${(-y * 3.5).toFixed(2)}deg) rotateY(${(x * 4.5).toFixed(2)}deg)`;
      });
      card.addEventListener("pointerleave", () => {
        card.style.transform = "";
      });
    });
  }
});
