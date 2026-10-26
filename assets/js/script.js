(function () {
  'use strict';

  /* ── DOM Ready ────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    initNavbar();
    initScrollReveal();
    initTestimonialSlider();
    initCountdown();
    initStickyCTA();
    initSmoothScroll();
    initActiveNavLink();
  });

  /* ══════════════════════════════════════════════════
     NAVBAR – Scroll + Mobile Toggle
  ══════════════════════════════════════════════════ */
  function initNavbar() {
    var navbar = document.getElementById('navbar');
    var toggle = document.getElementById('navToggle');
    var navMenu = document.getElementById('navMenu');

    // Scroll effect
    window.addEventListener('scroll', function () {
      if (window.scrollY > 60) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }, { passive: true });

    // Mobile hamburger toggle
    if (toggle && navMenu) {
      toggle.addEventListener('click', function () {
        var isOpen = navMenu.classList.contains('open');
        navMenu.classList.toggle('open');
        toggle.classList.toggle('active');
        document.body.style.overflow = isOpen ? '' : 'hidden';
      });

      // Close when clicking a link
      var links = navMenu.querySelectorAll('.nav-link');
      links.forEach(function (link) {
        link.addEventListener('click', function () {
          navMenu.classList.remove('open');
          toggle.classList.remove('active');
          document.body.style.overflow = '';
        });
      });

      // Close on backdrop click
      document.addEventListener('click', function (e) {
        if (!navbar.contains(e.target) && navMenu.classList.contains('open')) {
          navMenu.classList.remove('open');
          toggle.classList.remove('active');
          document.body.style.overflow = '';
        }
      });
    }
  }

  /* ══════════════════════════════════════════════════
     ACTIVE NAV LINK – Intersection Observer
  ══════════════════════════════════════════════════ */
  function initActiveNavLink() {
    var sections = document.querySelectorAll('section[id], footer[id]');
    var navLinks = document.querySelectorAll('.nav-link');

    var sectionMap = {};
    navLinks.forEach(function (link) {
      var href = link.getAttribute('href');
      if (href && href.startsWith('#')) {
        sectionMap[href.slice(1)] = link;
      }
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navLinks.forEach(function (l) { l.classList.remove('active'); });
          var match = sectionMap[entry.target.id];
          if (match) match.classList.add('active');
        }
      });
    }, { rootMargin: '-40% 0px -55% 0px' });

    sections.forEach(function (s) { observer.observe(s); });
  }

  /* ══════════════════════════════════════════════════
     SCROLL REVEAL – IntersectionObserver
  ══════════════════════════════════════════════════ */
  function initScrollReveal() {
    var elements = document.querySelectorAll('[data-reveal]');

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    elements.forEach(function (el) { observer.observe(el); });
  }

  /* ══════════════════════════════════════════════════
     TESTIMONIAL SLIDER – Vanilla JS Carousel
  ══════════════════════════════════════════════════ */
  function initTestimonialSlider() {
    var featured = document.getElementById('testiFeatured');
    var featuredText = document.getElementById('testiFeaturedText');
    var featuredName = document.getElementById('testiFeaturedName');
    var featuredRole = document.getElementById('testiFeaturedRole');
    var featuredAvatar = document.getElementById('testiFeaturedAvatar');
    var dotsEl = document.getElementById('testiDots');
    var btnPrev = document.getElementById('testiPrev');
    var btnNext = document.getElementById('testiNext');
    var thumbs = document.querySelectorAll('.testi-thumb');

    if (!featured) return;

    var data = [
      {
        text: '"Kopinya enak banget dan pelayanannya super cepat! Americano-nya pas banget, tidak terlalu pahit. Besok pasti order lagi!"',
        name: 'Annisa Nur',
        role: 'Mahasiswa UIN',
        avatar: 'AN',
        avatarBg: '#2F5D50',
        avatarColor: '#F6F1E9'
      },
      {
        text: '"Americano-nya juara! Udah nyoba banyak kopi keliling tapi Other Coffee beda banget. Recommended banget buat temen-temen!"',
        name: 'Rizky Darmawan',
        role: 'Karyawan Swasta',
        avatar: 'RD',
        avatarBg: '#6B4F3A',
        avatarColor: '#F6F1E9'
      },
      {
        text: '"Harga murah tapi rasa premium! Matcha latte-nya creamy banget. Suka sama vibes motor-nya, unik abis!"',
        name: 'Siti Fatimah',
        role: 'Freelancer',
        avatar: 'SF',
        avatarBg: '#A7C4A0',
        avatarColor: '#222'
      },
      {
        text: '"Setiap pagi mampir ke JB Lanud karena Other Coffee. Cappuccino-nya nggak kalah sama kafe besar. Proud dukung UMKM lokal yang keren kayak gini!"',
        name: 'Bima Wahyu',
        role: 'Content Creator',
        avatar: 'BW',
        avatarBg: '#2F5D50',
        avatarColor: '#F6F1E9'
      },
      {
        text: '"Kopi pertama pagi hari selalu dari Other Coffee di JB Lanud. Hazelnut latte-nya bikin semangat kerja! Harga kantong mahasiswa, rasa bintang lima."',
        name: 'Dewi Pratiwi',
        role: 'Mahasiswi',
        avatar: 'DP',
        avatarBg: '#EDE6D8',
        avatarColor: '#222'
      }
    ];

    var current = 0;
    var autoTimer;

    // Build dots
    var dots = data.map(function (_, i) {
      var d = document.createElement('button');
      d.className = 'testi-dot' + (i === 0 ? ' active' : '');
      d.setAttribute('aria-label', 'Testimoni ' + (i + 1));
      dotsEl.appendChild(d);
      d.addEventListener('click', function () { goTo(i); stopAuto(); startAuto(); });
      return d;
    });

    function goTo(index) {
      current = (index + data.length) % data.length;
      var d = data[current];

      // Fade out
      featured.style.opacity = '0';
      featured.style.transform = 'translateY(6px)';

      setTimeout(function () {
        featuredText.textContent = d.text;
        featuredName.textContent = d.name;
        featuredRole.textContent = d.role;
        featuredAvatar.textContent = d.avatar;
        featuredAvatar.style.background = d.avatarBg;
        featuredAvatar.style.color = d.avatarColor;

        // Fade in
        featured.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        featured.style.opacity = '1';
        featured.style.transform = 'translateY(0)';
      }, 200);

      // Update dots
      dots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === current);
      });

      // Update thumbs
      thumbs.forEach(function (thumb, i) {
        thumb.classList.toggle('active', i === current);
      });
    }

    // Thumb clicks
    thumbs.forEach(function (thumb, i) {
      thumb.addEventListener('click', function () {
        goTo(i);
        stopAuto();
        startAuto();
      });
    });

    btnPrev.addEventListener('click', function () {
      goTo(current - 1);
      stopAuto(); startAuto();
    });
    btnNext.addEventListener('click', function () {
      goTo(current + 1);
      stopAuto(); startAuto();
    });

    function startAuto() {
      autoTimer = setInterval(function () { goTo(current + 1); }, 5000);
    }
    function stopAuto() { clearInterval(autoTimer); }

    // Init
    featured.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    startAuto();
  }

  /* ══════════════════════════════════════════════════
     COUNTDOWN TIMER
  ══════════════════════════════════════════════════ */
  function initCountdown() {
    var hoursEl = document.getElementById('cdHours');
    var minutesEl = document.getElementById('cdMinutes');
    var secondsEl = document.getElementById('cdSeconds');

    if (!hoursEl) return;

    // Set target: end of today at 23:59:59
    var now = new Date();
    var target = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 0);

    function pad(n) {
      return n < 10 ? '0' + n : '' + n;
    }

    function animatePop(el) {
      el.style.transform = 'scale(1.25)';
      setTimeout(function () { el.style.transform = 'scale(1)'; el.style.transition = 'transform 0.2s ease'; }, 150);
    }

    var prevH = '', prevM = '', prevS = '';

    function tick() {
      var now = new Date();
      var diff = Math.max(0, target - now);

      var h = Math.floor(diff / 3600000);
      var m = Math.floor((diff % 3600000) / 60000);
      var s = Math.floor((diff % 60000) / 1000);

      var hs = pad(h), ms = pad(m), ss = pad(s);

      if (hs !== prevH) { hoursEl.textContent = hs; animatePop(hoursEl); prevH = hs; }
      if (ms !== prevM) { minutesEl.textContent = ms; animatePop(minutesEl); prevM = ms; }
      if (ss !== prevS) { secondsEl.textContent = ss; animatePop(secondsEl); prevS = ss; }

      // If expired, reset to same day end
      if (diff <= 0) {
        var n = new Date();
        target = new Date(n.getFullYear(), n.getMonth(), n.getDate(), 23, 59, 59, 0);
      }
    }

    tick();
    setInterval(tick, 1000);
  }

  /* ══════════════════════════════════════════════════
     STICKY CTA – show after hero scroll
  ══════════════════════════════════════════════════ */
  function initStickyCTA() {
    var stickyCTA = document.getElementById('stickyCTA');
    var hero = document.getElementById('hero');
    if (!stickyCTA || !hero) return;

    window.addEventListener('scroll', function () {
      var heroBottom = hero.getBoundingClientRect().bottom;
      if (heroBottom < 0) {
        stickyCTA.classList.add('visible');
      } else {
        stickyCTA.classList.remove('visible');
      }
    }, { passive: true });
  }

  /* ══════════════════════════════════════════════════
     SMOOTH SCROLL – for older browsers
  ══════════════════════════════════════════════════ */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var href = this.getAttribute('href');
        if (href === '#') return;
        var target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        var offset = 80; // navbar height
        var top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      });
    });
  }

})();

/* ═══════════════════════════════════════════════
   MENU ANDALAN – Tab Filter
═══════════════════════════════════════════════ */

(function () {
  var tabs = document.querySelectorAll('.menu-tab');
  var cards = document.querySelectorAll('.menu-card');
  if (!tabs.length || !cards.length) return;

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) { t.classList.remove('active'); });
      tab.classList.add('active');

      var cat = tab.getAttribute('data-cat');
      cards.forEach(function (card) {
        if (cat === 'all') {
          card.classList.remove('hidden');
        } else {
          var cats = (card.getAttribute('data-cat') || '').split(' ');
          if (cats.indexOf(cat) !== -1) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        }
      });
    });
  });
})();

/* ============================================================
   SPOT LOCATION — spot-location.js
   ============================================================ */

(function () {
  'use strict';

  /* ── CONFIG ── */
  const VISIBLE = 3;          // jumlah card yang terlihat sekaligus
  const TRANSITION_MS = 450;  // durasi animasi (harus sama dengan CSS)

  /* ── ELEMENTS ── */
  const track       = document.getElementById('carouselTrack');
  const arrowLeft   = document.getElementById('arrowLeft');
  const arrowRight  = document.getElementById('arrowRight');
  const dotsWrap    = document.getElementById('carouselDots');
  const modalOverlay = document.getElementById('modalOverlay');
  const modalClose   = document.getElementById('modalClose');
  const modalImg     = document.getElementById('modalImg');
  const modalTitle   = document.getElementById('modalTitle');
  const modalDesc    = document.getElementById('modalDesc');

  /* ── STATE ── */
  let currentIndex = 0;
  let isAnimating  = false;

  const cards = Array.from(track.querySelectorAll('.spot-card'));
  const total  = cards.length;
  const maxIndex = total - VISIBLE;  // index tertinggi yang valid

  /* ════════════════════════════════════════════
     CAROUSEL
  ════════════════════════════════════════════ */

  /** Hitung lebar satu step (card width + gap) */
  function getStepWidth() {
    if (!cards[0]) return 0;
    const style = getComputedStyle(track);
    const gap   = parseFloat(style.gap) || 18;
    return cards[0].offsetWidth + gap;
  }

  /** Pindahkan track ke index tertentu */
  function goTo(index) {
    if (isAnimating) return;

    // clamp index
    currentIndex = Math.max(0, Math.min(index, maxIndex));

    const offset = currentIndex * getStepWidth();
    track.style.transform = `translateX(-${offset}px)`;

    updateArrows();
    updateDots();

    isAnimating = true;
    setTimeout(() => { isAnimating = false; }, TRANSITION_MS);
  }

  /** Aktif / nonaktif tombol panah */
  function updateArrows() {
    arrowLeft.disabled  = currentIndex <= 0;
    arrowRight.disabled = currentIndex >= maxIndex;
  }

  /* ── Arrow click ── */
  arrowLeft.addEventListener('click', () => goTo(currentIndex - 1));
  arrowRight.addEventListener('click', () => goTo(currentIndex + 1));

  /* ── Keyboard ── */
  document.addEventListener('keydown', (e) => {
    if (modalOverlay.classList.contains('open')) return;
    if (e.key === 'ArrowLeft')  goTo(currentIndex - 1);
    if (e.key === 'ArrowRight') goTo(currentIndex + 1);
  });

  /* ── Touch/swipe pada carousel ── */
  let touchStartX = 0;
  let touchStartY = 0;

  track.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
  }, { passive: true });

  track.addEventListener('touchend', (e) => {
    const dx = touchStartX - e.changedTouches[0].clientX;
    const dy = Math.abs(touchStartY - e.changedTouches[0].clientY);
    if (Math.abs(dx) > 40 && dy < 60) {
      if (dx > 0) goTo(currentIndex + 1);
      else        goTo(currentIndex - 1);
    }
  }, { passive: true });

  /* ── Recalc on resize ── */
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => goTo(currentIndex), 150);
  });

  /* ════════════════════════════════════════════
     DOTS
  ════════════════════════════════════════════ */

  /** Buat dot buttons */
  function buildDots() {
    dotsWrap.innerHTML = '';
    // satu dot per "halaman" (setiap step)
    for (let i = 0; i <= maxIndex; i++) {
      const btn = document.createElement('button');
      btn.className = 'dot' + (i === 0 ? ' active' : '');
      btn.setAttribute('aria-label', `Slide ${i + 1}`);
      btn.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(btn);
    }
  }

  function updateDots() {
    const dots = dotsWrap.querySelectorAll('.dot');
    dots.forEach((d, i) => d.classList.toggle('active', i === currentIndex));
  }

  /* ════════════════════════════════════════════
     MODAL
  ════════════════════════════════════════════ */
  const modalVideo    = document.getElementById('modalVideo');
  const modalVideoSrc = document.getElementById('modalVideoSrc');

  /** Buka modal dengan data dari card */
  function openModal(card) {

    const img   = card.querySelector('img');
    const video = card.querySelector('video');

    const title = card.dataset.title || '';
    const desc  = card.dataset.desc  || '';

    modalTitle.textContent = title;
    modalDesc.textContent  = desc;

    // RESET
    modalImg.style.display = 'none';
    modalVideo.style.display = 'none';

    /* IMAGE */
    if (img) {
      modalImg.src = img.src;
      modalImg.alt = img.alt;

      modalImg.style.display = 'block';
    }

    /* VIDEO */
    if (video) {

      const source = video.querySelector('source');

      modalVideoSrc.src = source.src;
      modalVideo.load();

      modalVideo.style.display = 'block';
    }

    modalOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  /** Tutup modal */
  function closeModal() {

    modalOverlay.classList.remove('open');

    modalVideo.pause();
    modalVideo.currentTime = 0;

    document.body.style.overflow = '';
  }

  /* Klik pada card → buka modal */
  cards.forEach((card) => {
    card.addEventListener('click', () => openModal(card));
  });

  /* Tutup modal */
  modalClose.addEventListener('click', closeModal);
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
  });

  /* ════════════════════════════════════════════
     INIT
  ════════════════════════════════════════════ */
  buildDots();
  goTo(0);

})();