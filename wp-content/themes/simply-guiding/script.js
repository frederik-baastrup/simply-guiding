  (function () {
    var burger = document.getElementById('sgBurger');
    var nav = document.getElementById('sgNav');
    var header = document.getElementById('sgHeader');

    burger.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', open);
      burger.setAttribute('aria-label', open ? 'Luk menu' : 'Åbn menu');
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 960 && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
      }
    });

    // Header følger med: står under topbaren øverst, låser sig til toppen når man scroller,
    // får skygge, og logoet bliver mørkt når headeren er over hvid baggrund.
    var topbar = document.querySelector('.sg-topbar');
    var logoEl = document.querySelector('.sg-logo');
    var DARK = '.sg-hero, .sg-card, .sg-method, .sg-tile--dark, .sg-final__box, .sg-footer__box, .sg-band, .sg-more, .sg-band2';
    // Hvad ligger bag logoet? Mørke flader giver lyst logo, alt andet mørkt logo.
    function logoOverDark() {
      if (!logoEl || !document.elementsFromPoint) return true;
      var r = logoEl.getBoundingClientRect();
      var pts = [[r.left + 8, r.top + r.height / 2], [r.left + r.width / 2, r.top + r.height / 2]];
      for (var i = 0; i < pts.length; i++) {
        var els = document.elementsFromPoint(pts[i][0], pts[i][1]);
        for (var j = 0; j < els.length; j++) {
          if (header.contains(els[j])) continue;
          if (els[j].closest(DARK)) return true;
          break;
        }
      }
      return false;
    }
    function onScroll() {
      var y = window.scrollY;
      var tb = topbar ? topbar.offsetHeight : 0;
      header.style.setProperty('--sg-hdr-top', Math.max(0, tb - y) + 'px');
      header.classList.toggle('is-scrolled', y > 4);
      header.classList.toggle('is-on-light', !logoOverDark());
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();

    // Logo-slidere (hero + afslutning): glider venstre -> højre, sænker farten blødt ved mouseover
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      [].forEach.call(document.querySelectorAll('.sg-logos'), function (logos, idx) {
        var track = logos.querySelector('.sg-logos__track');
        if (!track) return;
        var DURATION = 75;       // sekunder pr. runde ved normal fart
        var HOVER_FACTOR = 0.45; // fart ved mouseover (andel af normal)
        var half = 0, x = 0, factor = 1, target = 1, last = null;
        function measure() { half = track.scrollWidth / 2; if (!x) x = -half * (idx ? .5 : 1); }
        measure();
        window.addEventListener('resize', measure);
        window.addEventListener('load', measure);
        logos.addEventListener('mouseenter', function () { target = HOVER_FACTOR; });
        logos.addEventListener('mouseleave', function () { target = 1; });
        function tick(t) {
          if (last === null) last = t;
          var dt = Math.min((t - last) / 1000, 0.1); last = t;
          factor += (target - factor) * Math.min(dt * 4, 1);
          if (half) {
            x += (half / DURATION) * factor * dt;
            if (x >= 0) x -= half;
            track.style.transform = 'translate3d(' + x + 'px,0,0)';
          }
          requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
      });
    }

    // Indsats-kort: det kort musen er over (eller fokus er i) bliver bredere; første kort er bredt som udgangspunkt
    var cards = document.getElementById('sgCards');
    if (cards) {
      var list = [].slice.call(cards.querySelectorAll('.sg-card'));
      var setActive = function (el) { list.forEach(function (c) { c.classList.toggle('is-active', c === el); }); };
      list.forEach(function (c) {
        c.addEventListener('mouseenter', function () { setActive(c); });
        c.addEventListener('focusin', function () { setActive(c); });
      });
      // Det sidst valgte kort forbliver stort, når musen forlader kortene

      // Mobil-karrusel: prikkerne nedenunder følger, hvilket kort man har swipet til
      var dots = document.getElementById('sgCardsDots');
      if (dots) {
        var dotEls = [].slice.call(dots.children);
        var setActiveDot = function (i) { dotEls.forEach(function (d, j) { d.classList.toggle('is-active', j === i); }); };
        var scheduled = false;
        var onCardsScroll = function () {
          if (scheduled) return;
          scheduled = true;
          requestAnimationFrame(function () {
            scheduled = false;
            var closest = 0, best = Infinity;
            list.forEach(function (c, i) {
              var d = Math.abs(c.offsetLeft - cards.scrollLeft);
              if (d < best) { best = d; closest = i; }
            });
            setActiveDot(closest);
          });
        };
        cards.addEventListener('scroll', onCardsScroll, { passive: true });
      }
    }

    // FAQ: ét spørgsmål åbent ad gangen
    [].forEach.call(document.querySelectorAll('.sg-faq__q'), function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.sg-faq__item');
        var open = !item.classList.contains('is-open');
        [].forEach.call(document.querySelectorAll('.sg-faq__item'), function (it) {
          it.classList.remove('is-open'); it.querySelector('.sg-faq__q').setAttribute('aria-expanded', 'false');
        });
        if (open) { item.classList.add('is-open'); btn.setAttribute('aria-expanded', 'true'); }
      });
    });

    // Nyhedsbrev: validér e-mail. Prototypen sender intet; tilmeldingen kobles på i WordPress.
    var signup = document.getElementById('sgSignup');
    if (signup) {
      signup.addEventListener('submit', function (e) {
        e.preventDefault();
        var input = document.getElementById('sgSignupEmail');
        var msg = document.getElementById('sgSignupMsg');
        var ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim());
        msg.hidden = false;
        msg.classList.toggle('is-error', !ok);
        msg.textContent = ok
          ? 'Prototype: her kobles tilmeldingen på jeres nyhedsbrevssystem.'
          : 'Skriv en gyldig e-mailadresse, fx navn@kommune.dk.';
        if (!ok) input.focus();
      });
    }

    // Tal tæller op, når de kommer i syne (slutværdien står i HTML'en, så siden er komplet uden JS)
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      var nums = document.querySelectorAll('.sg-stat__num');
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) return;
          io.unobserve(en.target);
          var el = en.target, txt = el.textContent, m = txt.match(/^(\D*)([\d.]+)(\D*)$/);
          if (!m) return;
          var target = parseInt(m[2].replace(/\./g, ''), 10), t0 = null, dur = 1400;
          function fmt(n) { return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'); }
          function step(t) {
            if (!t0) t0 = t;
            var p = Math.min((t - t0) / dur, 1), e = 1 - Math.pow(1 - p, 3);
            el.textContent = m[1] + fmt(Math.round(target * e)) + m[3];
            if (p < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
        });
      }, { threshold: .6 });
      [].forEach.call(nums, function (n) { io.observe(n); });
    }

    // Dropdowns: hover på desktop, klik/tastatur åbner og lukker også
    [].forEach.call(document.querySelectorAll('.sg-nav__item.has-sub > a'), function (a) {
      a.addEventListener('click', function (e) {
        if (window.innerWidth <= 960) return;
        var li = a.parentNode, open = !li.classList.contains('is-open');
        if (!li.matches(':hover') || open) { e.preventDefault(); }
        [].forEach.call(document.querySelectorAll('.sg-nav__item.is-open'), function (x) { x.classList.remove('is-open'); x.firstElementChild.setAttribute('aria-expanded', 'false'); });
        if (open) { li.classList.add('is-open'); a.setAttribute('aria-expanded', 'true'); }
      });
    });
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.sg-nav__item.has-sub')) [].forEach.call(document.querySelectorAll('.sg-nav__item.is-open'), function (x) { x.classList.remove('is-open'); x.firstElementChild.setAttribute('aria-expanded', 'false'); });
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') [].forEach.call(document.querySelectorAll('.sg-nav__item.is-open'), function (x) { x.classList.remove('is-open'); x.firstElementChild.setAttribute('aria-expanded', 'false'); });
    });

    // Reveal: elementer glider blødt op, når de kommer i syne. Elementer i første skærmbillede
    // animeres med det samme ved indlæsning, så siden aldrig står tom.
    (function () {
      if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      var boxSel = '.sg-method';
      var sel = [
        '.sg-hero__eyebrow', '.sg-hero h1', '.sg-hero__lead', '.sg-hero__actions', '.sg-hero__notch-inner', '.sg-hero__stat',
        '.sg-ind__head', '.sg-card', '.sg-quote__main',
        '.sg-method', '.sg-method__label', '.sg-method__title', '.sg-step', '.sg-method__media',
        '.sg-about__media', '.sg-about__copy', '.sg-figures__title', '.sg-stat', '.sg-divider',
        '.sg-tile', '.sg-faq__title', '.sg-faq__item', '.sg-final__title', '.sg-final__lead', '.sg-final__actions', '.sg-final__person', '.sg-final__name', '.sg-footer__brand', '.sg-footer__col', '.sg-footer__contact-item'
      ].join(',');
      var els = [].slice.call(document.querySelectorAll(sel));
      els.forEach(function (el) {
        el.classList.add('sg-reveal');
        if (el.matches(boxSel)) el.classList.add('sg-reveal--box');
      });
      function done(e) {
        if (e.target !== e.currentTarget) return;
        var el = e.currentTarget;
        el.classList.remove('sg-reveal', 'sg-reveal--box', 'is-in');
        el.style.removeProperty('--d');
        el.removeEventListener('animationend', done);
      }
      var io = new IntersectionObserver(function (entries) {
        var shown = entries.filter(function (en) { return en.isIntersecting; })
          .sort(function (a, b) { return a.target.compareDocumentPosition(b.target) & 4 ? -1 : 1; });
        shown.forEach(function (en, i) {
          var el = en.target;
          io.unobserve(el);
          el.style.setProperty('--d', Math.min(i * 90, 540) + 'ms');
          el.addEventListener('animationend', done);
          el.classList.add('is-in');
        });
      }, { threshold: .12, rootMargin: '0px 0px -6% 0px' });
      els.forEach(function (el) { io.observe(el); });
      // Sikkerhedsnet: hvis noget af en grund ikke er blevet vist, så vis det
      window.addEventListener('load', function () {
        setTimeout(function () {
          els.forEach(function (el) {
            var r = el.getBoundingClientRect();
            if (el.classList.contains('sg-reveal') && !el.classList.contains('is-in') && r.top < innerHeight && r.bottom > 0) {
              io.unobserve(el); el.addEventListener('animationend', done); el.classList.add('is-in');
            }
          });
        }, 1500);
      });
    })();

    // Markér aktiv side
    var path = location.pathname.replace(/\/$/, '');
    document.querySelectorAll('.sg-nav__list a').forEach(function (a) {
      if (path && a.getAttribute('href') === path) a.setAttribute('aria-current', 'page');
    });
  })();
