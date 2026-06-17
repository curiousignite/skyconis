/* Skycon — site scripts (vanilla JS, no dependencies) */
(function () {
  "use strict";

  /* ---------- Theme ---------- */
  var root = document.documentElement;

  function applyTheme(theme) {
    root.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
  }

  applyTheme(localStorage.getItem("theme") || "dark");

  /* ---------- Language ---------- */
  var langCache = {};

  function fetchLang(lang) {
    if (langCache[lang]) return Promise.resolve(langCache[lang]);
    return fetch("/languages/" + lang + ".json")
      .then(function (r) { return r.json(); })
      .then(function (data) {
        langCache[lang] = data;
        return data;
      });
  }

  function applyLang(lang) {
    root.lang = lang;
    localStorage.setItem("language", lang);
    document.querySelectorAll(".lang-switch button").forEach(function (b) {
      b.classList.toggle("active", b.dataset.setLang === lang);
    });
    fetchLang(lang)
      .then(function (data) {
        document.querySelectorAll("[data-lang]").forEach(function (el) {
          var key = el.getAttribute("data-lang");
          if (data[key] === undefined) return;
          if (el.placeholder !== undefined && el.tagName === "INPUT") {
            el.placeholder = data[key];
          } else {
            el.innerHTML = data[key];
          }
        });
      })
      .catch(function () { /* offline/file:// — keep inline (Turkish) content */ });
  }

  /* ---------- DOM ready ---------- */
  document.addEventListener("DOMContentLoaded", function () {
    applyLang(localStorage.getItem("language") || "tr");

    document.querySelectorAll("[data-set-lang]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        applyLang(btn.dataset.setLang);
      });
    });

    var themeBtn = document.querySelector(".theme-toggle");
    if (themeBtn) {
      themeBtn.addEventListener("click", function () {
        applyTheme(root.getAttribute("data-theme") === "dark" ? "light" : "dark");
      });
    }

    /* Header scroll state */
    var header = document.querySelector(".site-header");
    function onScroll() {
      header.classList.toggle("scrolled", window.scrollY > 24);
    }
    if (header) {
      onScroll();
      window.addEventListener("scroll", onScroll, { passive: true });
    }

    /* Mobile nav */
    var navToggle = document.querySelector(".nav-toggle");
    if (navToggle) {
      navToggle.addEventListener("click", function () {
        document.body.classList.toggle("nav-open");
      });
      document.querySelectorAll(".main-nav a").forEach(function (a) {
        a.addEventListener("click", function () {
          document.body.classList.remove("nav-open");
        });
      });
    }

    /* Reveal on scroll */
    var revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add("visible");
            revealObserver.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    document.querySelectorAll(".reveal").forEach(function (el) {
      revealObserver.observe(el);
    });

    /* Animated counters */
    var counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) return;
          counterObserver.unobserve(e.target);
          var el = e.target;
          var target = parseInt(el.dataset.count, 10);
          var start = null;
          var dur = 1600;
          function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            var eased = 1 - Math.pow(1 - p, 3);
            el.textContent = Math.round(target * eased);
            if (p < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
        });
      },
      { threshold: 0.4 }
    );
    document.querySelectorAll("[data-count]").forEach(function (el) {
      counterObserver.observe(el);
    });

    /* Marquee: duplicate track content for seamless loop */
    document.querySelectorAll(".marquee-track").forEach(function (track) {
      track.innerHTML += track.innerHTML;
    });

    /* Reference filters */
    var chips = document.querySelectorAll(".filter-chip");
    if (chips.length) {
      chips.forEach(function (chip) {
        chip.addEventListener("click", function () {
          chips.forEach(function (c) { c.classList.remove("active"); });
          chip.classList.add("active");
          var cat = chip.dataset.filter;
          document.querySelectorAll(".logo-tile").forEach(function (tile) {
            var cats = (tile.dataset.category || "").split(" ");
            tile.classList.toggle("hidden", cat !== "All" && cats.indexOf(cat) === -1);
          });
        });
      });
    }
  });
})();
