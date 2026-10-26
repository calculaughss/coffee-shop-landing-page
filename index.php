<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Other Coffee – Nongkrong Asik di JB Lanud</title>
  <meta name="description" content="Kopi motor kekinian dengan cita rasa premium dan suasana santai. Nongkrong di JB Lanud, langsung dari motor kami!" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;1,300&family=DM+Sans:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- ═══════════════════════════════════════════════
       NAVBAR
  ═══════════════════════════════════════════════ -->
  <nav class="navbar" id="navbar">
    <div class="nav-container">
      <a href="#hero" class="nav-logo">
        <span class="logo-svg">
          <svg width="30" height="30" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="18" r="17" fill="#2F5D50"/>
            <circle cx="18" cy="18" r="10.5" fill="none" stroke="#A7C4A0" stroke-width="2"/>
            <ellipse cx="18" cy="18" rx="4.5" ry="6.5" fill="#A7C4A0"/>
            <line x1="18" y1="11.5" x2="18" y2="24.5" stroke="#2F5D50" stroke-width="1.4"/>
          </svg>
        </span>
        <span class="logo-text-other">
          <span class="logo-name">ther</span>
          <span class="logo-tagline">Coffee On The Road</span>
        </span>
      </a>
      <ul class="nav-menu" id="navMenu">
        <li><a href="#hero" class="nav-link">Beranda</a></li>
        <li><a href="#opening" class="nav-link">Tentang Kami</a></li>
        <li><a href="#menu-andalan" class="nav-link">Menu</a></li>
        <li><a href="#testimoni" class="nav-link">Testimoni</a></li>
        <li><a href="#cta" class="nav-link">Kontak</a></li>
      </ul>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- ═══════════════════════════════════════════════
       1. HERO / HEADLINE
  ═══════════════════════════════════════════════ -->
  <section class="hero" id="hero">
    <div class="hero-overlay"></div>
    <!-- SVG coffee background art -->
    <div class="hero-bg-art">
      <svg viewBox="0 0 1440 900" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <radialGradient id="hg1" cx="30%" cy="60%" r="60%">
            <stop offset="0%" stop-color="#2F5D50" stop-opacity="0.6"/>
            <stop offset="100%" stop-color="#111" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="hg2" cx="80%" cy="30%" r="50%">
            <stop offset="0%" stop-color="#6B4F3A" stop-opacity="0.4"/>
            <stop offset="100%" stop-color="#111" stop-opacity="0"/>
          </radialGradient>
        </defs>
        <rect width="1440" height="900" fill="#1a1208"/>
        <rect width="1440" height="900" fill="url(#hg1)"/>
        <rect width="1440" height="900" fill="url(#hg2)"/>
        <!-- Abstract coffee steam lines -->
        <path d="M700 600 Q720 520 700 440 Q680 360 700 280" stroke="#A7C4A0" stroke-width="2" fill="none" opacity="0.15" stroke-dasharray="6 8"/>
        <path d="M740 620 Q770 530 750 440 Q730 350 760 260" stroke="#A7C4A0" stroke-width="1.5" fill="none" opacity="0.1" stroke-dasharray="4 10"/>
        <path d="M660 610 Q640 525 665 440 Q690 355 660 275" stroke="#F6F1E9" stroke-width="1" fill="none" opacity="0.08" stroke-dasharray="3 12"/>
        <!-- Large coffee cup silhouette -->
        <ellipse cx="1100" cy="650" rx="160" ry="30" fill="#6B4F3A" opacity="0.12"/>
        <rect x="960" y="420" width="280" height="230" rx="30" fill="#6B4F3A" opacity="0.08"/>
        <ellipse cx="1100" cy="420" rx="140" ry="25" fill="#A7C4A0" opacity="0.10"/>
        <!-- Beans scatter -->
        <ellipse cx="200" cy="200" rx="18" ry="11" fill="#6B4F3A" opacity="0.15" transform="rotate(-30 200 200)"/>
        <ellipse cx="240" cy="230" rx="14" ry="9" fill="#6B4F3A" opacity="0.12" transform="rotate(20 240 230)"/>
        <ellipse cx="170" cy="240" rx="16" ry="10" fill="#6B4F3A" opacity="0.10" transform="rotate(-10 170 240)"/>
        <ellipse cx="1300" cy="750" rx="18" ry="11" fill="#A7C4A0" opacity="0.12" transform="rotate(40 1300 750)"/>
        <ellipse cx="1260" cy="780" rx="14" ry="9" fill="#A7C4A0" opacity="0.10" transform="rotate(-15 1260 780)"/>
        <!-- Wheel motif (motorcycle) -->
        <circle cx="350" cy="700" r="120" stroke="#A7C4A0" stroke-width="3" fill="none" opacity="0.07"/>
        <circle cx="350" cy="700" r="90" stroke="#A7C4A0" stroke-width="1.5" fill="none" opacity="0.05"/>
        <circle cx="350" cy="700" r="15" stroke="#A7C4A0" stroke-width="3" fill="none" opacity="0.07"/>
        <line x1="350" y1="580" x2="350" y2="820" stroke="#A7C4A0" stroke-width="1.5" opacity="0.06"/>
        <line x1="230" y1="700" x2="470" y2="700" stroke="#A7C4A0" stroke-width="1.5" opacity="0.06"/>
        <line x1="265" y1="615" x2="435" y2="785" stroke="#A7C4A0" stroke-width="1.5" opacity="0.06"/>
        <line x1="435" y1="615" x2="265" y2="785" stroke="#A7C4A0" stroke-width="1.5" opacity="0.06"/>
      </svg>
    </div>

    <div class="hero-content" data-reveal>
      <h1 class="hero-title">
        <span class="title-other">OTHER</span>
        <span class="title-cotr">Coffee On The Road</span>
      </h1>
      <p class="hero-sub">Dari Sebuah Motor, Hadir Kopi, Senja, dan Ruang untuk Bercerita.</p>
      <p class="hero-desc">Kopi premium served langsung dari motor kami di JB Lanud. Nongkrong santai, harga ramah di kantong, sambil menikmati senja dan bertukar cerita bersama teman-teman.</p>
      <div class="hero-cta">
        <a href="#cta" class="btn btn-primary">
          <span>Order Sekarang</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="#menu-andalan" class="btn btn-ghost">Lihat Menu</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><span class="stat-num">500+</span><span class="stat-label">Happy Customers</span></div>
        <div class="stat-div"></div>
        <div class="stat"><span class="stat-num">⭐ 4.9</span><span class="stat-label">Rating Pelanggan</span></div>
      </div>
    </div>

    <!-- floating cup -->
    <div class="float-cup" aria-hidden="true">
      <div class="cup-wrap">
        <svg width="90" height="90" viewBox="0 0 90 90" xmlns="http://www.w3.org/2000/svg">
          <rect x="15" y="30" width="60" height="45" rx="8" fill="#F6F1E9" opacity="0.95"/>
          <ellipse cx="45" cy="30" rx="30" ry="8" fill="#E8DDD0"/>
          <ellipse cx="45" cy="30" rx="22" ry="5" fill="#6B4F3A" opacity="0.6"/>
          <rect x="75" y="42" width="14" height="20" rx="7" fill="none" stroke="#F6F1E9" stroke-width="3" opacity="0.8"/>
          <path d="M38 22 Q42 10 46 22" stroke="#A7C4A0" stroke-width="2" fill="none" opacity="0.7"/>
          <path d="M44 20 Q48 8 52 20" stroke="#A7C4A0" stroke-width="2" fill="none" opacity="0.5"/>
        </svg>
      </div>
    </div>
    <div class="scroll-hint">
      <span>Scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       2. OPENING
  ═══════════════════════════════════════════════ -->
  <section class="opening" id="opening">
    <div class="container">
      <div class="opening-grid">
        <div class="opening-img-wrap" data-reveal>
          <div class="opening-img-card main-card">
            <svg viewBox="0 0 400 500" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <defs>
                <linearGradient id="og1" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#2F5D50"/>
                  <stop offset="100%" stop-color="#1a3d30"/>
                </linearGradient>
              </defs>
              <rect width="400" height="500" rx="20" fill="url(#og1)"/>
              <!-- Barista figure simplified -->
              <circle cx="200" cy="120" r="50" fill="#F6F1E9" opacity="0.9"/>
              <rect x="140" y="170" width="120" height="160" rx="15" fill="#A7C4A0" opacity="0.7"/>
              <!-- Coffee tools -->
              <rect x="160" y="330" width="80" height="100" rx="10" fill="#F6F1E9" opacity="0.8"/>
              <ellipse cx="200" cy="330" rx="40" ry="10" fill="#E8DDD0" opacity="0.9"/>
              <ellipse cx="200" cy="325" rx="32" ry="7" fill="#6B4F3A" opacity="0.5"/>
              <!-- Steam -->
              <path d="M185 320 Q188 300 185 280" stroke="#F6F1E9" stroke-width="2" fill="none" opacity="0.5" stroke-dasharray="4 6"/>
              <path d="M200 318 Q203 298 200 278" stroke="#F6F1E9" stroke-width="2" fill="none" opacity="0.4" stroke-dasharray="4 6"/>
              <path d="M215 320 Q218 300 215 280" stroke="#F6F1E9" stroke-width="2" fill="none" opacity="0.5" stroke-dasharray="4 6"/>
              <!-- Text overlay -->
            <text x="200" y="460" text-anchor="middle" font-family="Bebas Neue" font-size="28" fill="#F6F1E9" opacity="0.4">FRESH BREWED</text>
            </svg>
          </div>
          <div class="opening-img-card small-card">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <rect width="200" height="200" rx="16" fill="#6B4F3A"/>
              <text x="100" y="85" text-anchor="middle" font-size="52">☕</text>
              <text x="100" y="130" text-anchor="middle" font-family="Poppins" font-size="13" fill="#F6F1E9" opacity="0.8">Since Januari 2025</text>
              <text x="100" y="150" text-anchor="middle" font-family="Bebas Neue" font-size="20" fill="#A7C4A0">OTHER COFFEE</text>
            </svg>
          </div>
        </div>
        <div class="opening-text" data-reveal>
          <div class="section-tag">Tentang Kami</div>
          <h2 class="section-title">Bukan Sekadar<br><em>Kopi Biasa</em></h2>
          <p class="opening-desc">
            Other Coffee hadir di JB Lanud dengan konsep unik: kopi premium yang disajikan langsung dari motor kami. Satu spot, suasana santai, dan rasa yang selalu konsisten setiap harinya.
          </p>
          <div class="opening-features">
            <div class="feat-item">
                <div class="feat-icon">
                    <img src="assets/img/kopi.png" alt="Kopi Berkualitas">
                </div>

                <div>
                    <strong>Kopi Berkualitas</strong>
                    <span>Biji kopi pilihan, dipanggang sempurna</span>
                </div>
            </div>
            <div class="feat-item">
                <div class="feat-icon">
                    <img src="assets/img/lokasi.png" alt="Kopi Berkualitas">
                </div>
                <div>
                    <strong>Lokasi Tetap di JB Lanud</strong>
                    <span>Mudah ditemukan, selalu ada di spot yang sama</span>
                </div>
            </div>
            <div class="feat-item">
                <div class="feat-icon">
                    <img src="assets/img/harga.png" alt="Kopi Berkualitas">
                </div>
                <div>
                    <strong>Harga Bersahabat</strong>
                    <span>Kopi premium, harga mahasiswa</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       3. MENU ANDALAN KAMI — Soft Menu Style
       (sisipkan sebelum section #benefit)
  ═══════════════════════════════════════════════ -->
  <section class="menu-andalan" id="menu-andalan">
    <div class="container">

      <!-- Header -->
      <div class="section-header" data-reveal>
        <div class="section-tag">Soft Menu</div>
        <h2 class="section-title">Menu Andalan<br><em>Other Coffee</em></h2>
        <p class="menu-sub">Tersedia setiap hari pukul <strong>16.00 – 23.00</strong> di JB Lanud.</p>
      </div>

      <!-- Soft Menu Wrapper -->
      <div class="softmenu-wrap" data-reveal>

        <!-- ── COFFEE ── -->
        <div class="softmenu-block">
          <div class="softmenu-img-col">
            <div class="softmenu-img-box">
              <img src="assets/img/menu1.jpeg" alt="Coffee Menu" loading="lazy"/>
            </div>
          </div>
          <div class="softmenu-content-col">
            <div class="softmenu-cat-header">
              <h3 class="softmenu-cat-title">Coffee</h3>
              <div class="softmenu-divider"></div>
            </div>
            <ul class="softmenu-list">
              <li class="softmenu-item">
                <span class="softmenu-item-name">Kopi Susu</span>
                <span class="softmenu-item-dots"></span>
                <span class="softmenu-item-price">Rp.15.000</span>
              </li>
              <li class="softmenu-item">
                <span class="softmenu-item-name">Kopi Susu Aren</span>
                <span class="softmenu-item-dots"></span>
                <span class="softmenu-item-price">Rp.15.000</span>
              </li>
              <li class="softmenu-item">
                <span class="softmenu-item-name">Kopi Lemon</span>
                <span class="softmenu-item-dots"></span>
                <span class="softmenu-item-price">Rp.15.000</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- ── NON COFFEE ── -->
        <div class="softmenu-block">
          <div class="softmenu-img-col">
            <div class="softmenu-img-box">
              <img src="assets/img/menu2.jpeg" alt="Non Coffee Menu" loading="lazy"/>
            </div>
          </div>
          <div class="softmenu-content-col">
            <div class="softmenu-cat-header">
              <h3 class="softmenu-cat-title">Non Coffee</h3>
              <div class="softmenu-divider"></div>
            </div>
            <ul class="softmenu-list">
              <li class="softmenu-item">
                <span class="softmenu-item-name">Matcha</span>
                <span class="softmenu-item-dots"></span>
                <span class="softmenu-item-price">Rp.12.000</span>
              </li>
              <li class="softmenu-item">
                <span class="softmenu-item-name">Red Velvet</span>
                <span class="softmenu-item-dots"></span>
                <span class="softmenu-item-price">Rp.12.000</span>
              </li>
            </ul>
          </div>
        </div>

      </div><!-- /.softmenu-wrap -->

      <!-- Footer -->
      <div class="menu-footer" data-reveal>
        <a href="#cta" class="btn btn-primary">
          <span>Order via WhatsApp</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

    </div>
  </section>
  <!-- END MENU ANDALAN -->

  <!-- ═══════════════════════════════════════════════
       4. ALASAN
  ═══════════════════════════════════════════════ -->
  <section class="alasan" id="alasan">
    <div class="container">
      <div class="section-header" data-reveal>
        <div class="section-tag">Alasan Kami</div>
        <h2 class="section-title">Kenapa Harus<br><em>Other Coffee?</em></h2>
      </div>
      <div class="alasan-list">

        <!-- 01 Biji Kopi -->
        <div class="alasan-item" data-reveal>
          <div class="alasan-img">
            <svg viewBox="0 0 320 220" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <rect width="320" height="220" rx="16" fill="#2F5D50"/>
              <!-- ground/table -->
              <rect x="0" y="155" width="320" height="65" rx="0" fill="#1e3d34"/>
              <!-- sack bag -->
              <ellipse cx="160" cy="148" rx="52" ry="18" fill="#5a3e28"/>
              <rect x="108" y="80" width="104" height="72" rx="14" fill="#6B4F3A"/>
              <ellipse cx="160" cy="80" rx="52" ry="16" fill="#7a5c42"/>
              <!-- tie string -->
              <rect x="148" y="62" width="24" height="20" rx="4" fill="#5a3e28"/>
              <ellipse cx="160" cy="62" rx="12" ry="6" fill="#4a3220"/>
              <!-- label on bag -->
              <rect x="130" y="98" width="60" height="36" rx="6" fill="rgba(255,255,255,0.12)"/>
              <line x1="138" y1="110" x2="182" y2="110" stroke="#A7C4A0" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="138" y1="118" x2="175" y2="118" stroke="#A7C4A0" stroke-width="1" stroke-linecap="round" opacity="0.6"/>
              <line x1="138" y1="125" x2="170" y2="125" stroke="#A7C4A0" stroke-width="1" stroke-linecap="round" opacity="0.4"/>
              <!-- beans scattered -->
              <ellipse cx="82" cy="150" rx="14" ry="9" fill="#3d2510" transform="rotate(-20 82 150)"/>
              <line x1="82" y1="143" x2="82" y2="157" stroke="#2a1a0a" stroke-width="1.2" stroke-linecap="round" transform="rotate(-20 82 150)"/>
              <ellipse cx="238" cy="148" rx="14" ry="9" fill="#3d2510" transform="rotate(15 238 148)"/>
              <line x1="238" y1="141" x2="238" y2="155" stroke="#2a1a0a" stroke-width="1.2" stroke-linecap="round" transform="rotate(15 238 148)"/>
              <ellipse cx="112" cy="165" rx="12" ry="8" fill="#3d2510" transform="rotate(10 112 165)"/>
              <line x1="112" y1="158" x2="112" y2="172" stroke="#2a1a0a" stroke-width="1.2" stroke-linecap="round" transform="rotate(10 112 165)"/>
              <ellipse cx="208" cy="167" rx="12" ry="8" fill="#3d2510" transform="rotate(-15 208 167)"/>
              <line x1="208" y1="160" x2="208" y2="174" stroke="#2a1a0a" stroke-width="1.2" stroke-linecap="round" transform="rotate(-15 208 167)"/>
              <!-- label -->
              <text x="160" y="200" text-anchor="middle" font-family="Poppins, sans-serif" font-size="12" fill="#A7C4A0" opacity="0.85">Single Origin Beans</text>
            </svg>
          </div>
          <div class="alasan-text">
            <span class="alasan-num">01</span>
            <h3>Biji Kopi Pilihan</h3>
            <p>Kami hanya menggunakan biji kopi single origin terbaik dari Aceh, Toraja, dan Flores. Dipanggang segar setiap minggu untuk menjaga kesegaran aroma dan rasa.</p>
          </div>
        </div>

        <!-- 02 Barista -->
        <div class="alasan-item alasan-item--reverse" data-reveal>
          <div class="alasan-img">
            <svg viewBox="0 0 320 220" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <rect width="320" height="220" rx="16" fill="#6B4F3A"/>
              <!-- counter -->
              <rect x="0" y="148" width="320" height="72" rx="0" fill="#4a3220"/>
              <rect x="0" y="145" width="320" height="10" rx="0" fill="#3a2515"/>
              <!-- espresso machine body -->
              <rect x="185" y="80" width="88" height="72" rx="10" fill="#2a1a0a"/>
              <rect x="193" y="88" width="72" height="44" rx="6" fill="#1a0e05"/>
              <!-- machine display -->
              <rect x="199" y="94" width="40" height="24" rx="4" fill="#0a3020"/>
              <circle cx="254" cy="106" r="10" fill="#1a0e05" stroke="#3d2510" stroke-width="2"/>
              <circle cx="254" cy="106" r="5" fill="#2F5D50"/>
              <!-- portafilter -->
              <rect x="210" y="132" width="38" height="6" rx="3" fill="#3d2510"/>
              <rect x="222" y="138" width="14" height="14" rx="4" fill="#2a1a0a"/>
              <!-- steam wand -->
              <line x1="274" y1="100" x2="282" y2="130" stroke="#3d2510" stroke-width="4" stroke-linecap="round"/>
              <circle cx="284" cy="133" r="5" fill="#2a1a0a"/>
              <!-- barista figure -->
              <!-- head -->
              <circle cx="120" cy="62" r="22" fill="#c8956a"/>
              <!-- hair / cap -->
              <rect x="98" y="40" width="44" height="16" rx="8" fill="#2a1a0a"/>
              <rect x="94" y="48" width="52" height="8" rx="4" fill="#1a0e05"/>
              <!-- apron/body -->
              <rect x="88" y="84" width="64" height="68" rx="8" fill="#2F5D50"/>
              <!-- apron bib -->
              <rect x="104" y="84" width="32" height="40" rx="4" fill="#1e3d34"/>
              <!-- arms -->
              <rect x="68" y="86" width="22" height="44" rx="10" fill="#c8956a"/>
              <rect x="152" y="86" width="22" height="44" rx="10" fill="#c8956a"/>
              <!-- hands -->
              <circle cx="79" cy="134" r="9" fill="#c8956a"/>
              <circle cx="163" cy="134" r="9" fill="#c8956a"/>
              <!-- cup in hand -->
              <rect x="152" y="128" width="22" height="20" rx="4" fill="#F6F1E9"/>
              <!-- steam from cup -->
              <path d="M158 122 Q155 115 158 108" stroke="#A7C4A0" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.6"/>
              <path d="M165 121 Q162 114 165 107" stroke="#A7C4A0" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
              <!-- label -->
              <text x="160" y="200" text-anchor="middle" font-family="Poppins, sans-serif" font-size="12" fill="#F6F1E9" opacity="0.75">Professional Barista</text>
            </svg>
          </div>
          <div class="alasan-text">
            <span class="alasan-num">02</span>
            <h3>Barista Berpengalaman</h3>
            <p>Setiap kopi diracik oleh barista terlatih dengan pengalaman di industri F&B. Konsistensi rasa adalah prioritas kami—tiap cangkir selalu sempurna.</p>
          </div>
        </div>

        <!-- 03 Higienis -->
        <div class="alasan-item" data-reveal>
          <div class="alasan-img">
            <svg viewBox="0 0 320 220" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <rect width="320" height="220" rx="16" fill="#3d7a69"/>
              <!-- shield -->
              <path d="M160 38 L210 60 L210 115 Q210 148 160 168 Q110 148 110 115 L110 60 Z" fill="#2F5D50" stroke="#A7C4A0" stroke-width="2"/>
              <path d="M160 50 L200 68 L200 114 Q200 140 160 156 Q120 140 120 114 L120 68 Z" fill="#1e3d34"/>
              <!-- checkmark inside shield -->
              <polyline points="140,105 154,119 182,88" fill="none" stroke="#A7C4A0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              <!-- sparkle dots around shield -->
              <circle cx="90" cy="72" r="4" fill="#A7C4A0" opacity="0.7"/>
              <circle cx="78" cy="95" r="2.5" fill="#A7C4A0" opacity="0.5"/>
              <circle cx="96" cy="112" r="3" fill="#A7C4A0" opacity="0.4"/>
              <circle cx="230" cy="72" r="4" fill="#A7C4A0" opacity="0.7"/>
              <circle cx="242" cy="95" r="2.5" fill="#A7C4A0" opacity="0.5"/>
              <circle cx="224" cy="112" r="3" fill="#A7C4A0" opacity="0.4"/>
              <circle cx="160" cy="36" r="3" fill="#A7C4A0" opacity="0.5"/>
              <!-- water drops to imply hygiene -->
              <path d="M76 130 Q72 122 76 116 Q80 122 76 130Z" fill="#A7C4A0" opacity="0.45"/>
              <path d="M244 130 Q240 122 244 116 Q248 122 244 130Z" fill="#A7C4A0" opacity="0.45"/>
              <!-- label -->
              <text x="160" y="196" text-anchor="middle" font-family="Poppins, sans-serif" font-size="12" fill="#F6F1E9" opacity="0.8">Hygienic &amp; Fresh</text>
            </svg>
          </div>
          <div class="alasan-text">
            <span class="alasan-num">03</span>
            <h3>Higienis & Fresh</h3>
            <p>Seluruh peralatan disterilkan setiap hari. Bahan baku segar, tidak ada bahan pengawet. Kami jaga kebersihan dari hulu ke hilir.</p>
          </div>
        </div>

        <!-- 04 Lokasi -->
        <div class="alasan-item alasan-item--reverse" data-reveal>
          <div class="alasan-img">
            <svg viewBox="0 0 320 220" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <rect width="320" height="220" rx="16" fill="#222222"/>
              <!-- map grid lines -->
              <line x1="40" y1="60" x2="280" y2="60" stroke="#333" stroke-width="0.8"/>
              <line x1="40" y1="90" x2="280" y2="90" stroke="#333" stroke-width="0.8"/>
              <line x1="40" y1="120" x2="280" y2="120" stroke="#333" stroke-width="0.8"/>
              <line x1="40" y1="150" x2="280" y2="150" stroke="#333" stroke-width="0.8"/>
              <line x1="70" y1="40" x2="70" y2="180" stroke="#333" stroke-width="0.8"/>
              <line x1="110" y1="40" x2="110" y2="180" stroke="#333" stroke-width="0.8"/>
              <line x1="160" y1="40" x2="160" y2="180" stroke="#333" stroke-width="0.8"/>
              <line x1="210" y1="40" x2="210" y2="180" stroke="#333" stroke-width="0.8"/>
              <line x1="250" y1="40" x2="250" y2="180" stroke="#333" stroke-width="0.8"/>
              <!-- road horizontal -->
              <rect x="40" y="105" width="240" height="14" rx="2" fill="#2a2a2a"/>
              <line x1="40" y1="112" x2="280" y2="112" stroke="#444" stroke-width="1" stroke-dasharray="8 6"/>
              <!-- road vertical -->
              <rect x="153" y="40" width="14" height="140" rx="2" fill="#2a2a2a"/>
              <line x1="160" y1="40" x2="160" y2="180" stroke="#444" stroke-width="1" stroke-dasharray="8 6"/>
              <!-- pin drop -->
              <path d="M160 48 Q178 48 178 66 Q178 82 160 100 Q142 82 142 66 Q142 48 160 48Z" fill="#2F5D50"/>
              <circle cx="160" cy="67" r="8" fill="#F6F1E9"/>
              <!-- pulse ring -->
              <circle cx="160" cy="67" r="16" fill="none" stroke="#2F5D50" stroke-width="1.5" opacity="0.45"/>
              <circle cx="160" cy="67" r="24" fill="none" stroke="#2F5D50" stroke-width="1" opacity="0.22"/>
              <!-- small building blocks -->
              <rect x="76" y="68" width="24" height="34" rx="3" fill="#2a2a2a" stroke="#383838" stroke-width="0.8"/>
              <rect x="80" y="72" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.6"/>
              <rect x="90" y="72" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.6"/>
              <rect x="80" y="82" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.4"/>
              <rect x="90" y="82" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.4"/>
              <rect x="214" y="58" width="28" height="44" rx="3" fill="#2a2a2a" stroke="#383838" stroke-width="0.8"/>
              <rect x="218" y="62" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.5"/>
              <rect x="228" y="62" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.5"/>
              <rect x="218" y="72" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.4"/>
              <rect x="228" y="72" width="6" height="6" rx="1" fill="#3d7a69" opacity="0.4"/>
              <!-- label -->
              <text x="160" y="200" text-anchor="middle" font-family="Poppins, sans-serif" font-size="12" fill="#A7C4A0" opacity="0.85">JB Lanud – Spot Tetap Kami</text>
            </svg>
          </div>
          <div class="alasan-text">
            <span class="alasan-num">04</span>
            <h3>Spot Tetap, Mudah Ditemukan</h3>
            <p>Kami selalu ada di JB Lanud setiap hari. Tidak perlu bingung cari lokasi—tinggal datang, ngopi, dan nikmati suasana santai di spot favorit kamu.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       5. TESTIMONI
  ═══════════════════════════════════════════════ -->
    <section class="testimoni" id="testimoni">
        <div class="container">
            <div class="section-header" data-reveal>
            <div class="section-tag">Testimoni</div>
            <h2 class="section-title">Kata Mereka<br><em>Tentang Kami</em></h2>
            </div>

            <div class="testi-wrap" data-reveal>
            <!-- Featured Card -->
            <div class="testi-featured" id="testiFeatured">
                <div class="testi-featured-inner">
                <div class="testi-featured-top">
                    <div class="testi-stars">
                    <svg width="96" height="16" viewBox="0 0 96 16" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1l1.8 3.6L14 5.3l-3 2.9.7 4.1L8 10.4l-3.7 1.9.7-4.1-3-2.9 4.2-.7z" transform="translate(0,0)"/>
                        <path d="M8 1l1.8 3.6L14 5.3l-3 2.9.7 4.1L8 10.4l-3.7 1.9.7-4.1-3-2.9 4.2-.7z" transform="translate(20,0)"/>
                        <path d="M8 1l1.8 3.6L14 5.3l-3 2.9.7 4.1L8 10.4l-3.7 1.9.7-4.1-3-2.9 4.2-.7z" transform="translate(40,0)"/>
                        <path d="M8 1l1.8 3.6L14 5.3l-3 2.9.7 4.1L8 10.4l-3.7 1.9.7-4.1-3-2.9 4.2-.7z" transform="translate(60,0)"/>
                        <path d="M8 1l1.8 3.6L14 5.3l-3 2.9.7 4.1L8 10.4l-3.7 1.9.7-4.1-3-2.9 4.2-.7z" transform="translate(80,0)"/>
                    </svg>
                    </div>
                    <svg class="testi-quote-icon" width="48" height="40" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 40V24.8C0 20.267 1.067 16.267 3.2 12.8C5.333 9.333 8.533 6.4 12.8 4L16 8.8C13.333 10.4 11.333 12.267 10 14.4C8.667 16.533 8 18.933 8 21.6H16V40H0ZM28 40V24.8C28 20.267 29.067 16.267 31.2 12.8C33.333 9.333 36.533 6.4 40.8 4L44 8.8C41.333 10.4 39.333 12.267 38 14.4C36.667 16.533 36 18.933 36 21.6H44V40H28Z" fill="currentColor"/>
                    </svg>
                </div>
                <p class="testi-featured-text" id="testiFeaturedText">"Kopinya enak banget dan pelayanannya super cepat! Americano-nya pas banget, tidak terlalu pahit. Besok pasti order lagi!"</p>
                <div class="testi-featured-user">
                    <div class="testi-avatar" id="testiFeaturedAvatar">AN</div>
                    <div>
                    <strong id="testiFeaturedName">Annisa Nur</strong>
                    <span id="testiFeaturedRole">Mahasiswa UIN</span>
                    </div>
                </div>
                </div>
            </div>

            <!-- Controls -->
            <div class="testi-controls">
                <button class="testi-btn" id="testiPrev" aria-label="Previous">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <div class="testi-dots" id="testiDots"></div>
                <button class="testi-btn" id="testiNext" aria-label="Next">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>

            <!-- Thumbnail Strip -->
            <div class="testi-thumbs" id="testiThumbs">
                <div class="testi-thumb active" data-index="0">
                <div class="testi-thumb-stars">
                    <svg width="60" height="12" viewBox="0 0 60 12" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(0,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(13,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(26,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(39,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(52,0)"/>
                    </svg>
                </div>
                <p>"Kopinya enak banget dan pelayanannya super cepat!..."</p>
                <strong>Annisa Nur</strong>
                </div>
                <div class="testi-thumb" data-index="1">
                <div class="testi-thumb-stars">
                    <svg width="60" height="12" viewBox="0 0 60 12" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(0,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(13,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(26,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(39,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(52,0)"/>
                    </svg>
                </div>
                <p>"Americano-nya juara! Beda banget dari kopi biasa..."</p>
                <strong>Rizky Darmawan</strong>
                </div>
                <div class="testi-thumb" data-index="2">
                <div class="testi-thumb-stars">
                    <svg width="60" height="12" viewBox="0 0 60 12" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(0,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(13,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(26,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(39,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(52,0)"/>
                    </svg>
                </div>
                <p>"Harga murah tapi rasa premium! Matcha latte-nya..."</p>
                <strong>Siti Fatimah</strong>
                </div>
                <div class="testi-thumb" data-index="3">
                <div class="testi-thumb-stars">
                    <svg width="60" height="12" viewBox="0 0 60 12" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(0,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(13,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(26,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(39,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(52,0)"/>
                    </svg>
                </div>
                <p>"Cappuccino-nya nggak kalah sama kafe besar..."</p>
                <strong>Bima Wahyu</strong>
                </div>
                <div class="testi-thumb" data-index="4">
                <div class="testi-thumb-stars">
                    <svg width="60" height="12" viewBox="0 0 60 12" fill="#f4a428" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(0,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(13,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(26,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(39,0)"/>
                    <path d="M6 1l1.2 2.4L10 3.8l-2 1.9.5 2.8L6 7.3 3.5 8.5 4 5.7 2 3.8l2.8-.4z" transform="translate(52,0)"/>
                    </svg>
                </div>
                <p>"Hazelnut latte-nya bikin semangat kerja!..."</p>
                <strong>Dewi Pratiwi</strong>
                </div>
            </div>
            </div>
        </div>
    </section>

  <!-- ═══════════════════════════════════════════════
       6. URGENSI
  ═══════════════════════════════════════════════ -->
  <section class="urgensi" id="urgensi">
    <div class="urgensi-bg"></div>
    <div class="container">
      <div class="urgensi-content" data-reveal>
        <div class="urgensi-badge">Promo Hari Ini</div>
        <h2 class="urgensi-title">Jangan Sampai<br>Kehabisan Kopi<br>Favoritmu!</h2>
        <div class="urgensi-reasons">
          <div class="urgensi-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Stok harian <strong>terbatas</strong>
          </div>
          <div class="urgensi-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Spot JB Lanud <strong>makin ramai</strong> setiap harinya
          </div>
          <div class="urgensi-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Promo hari ini <strong>hanya sampai habis</strong>
          </div>
          <div class="urgensi-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Datang lebih awal sebelum <strong>antrian penuh!</strong>
          </div>
        </div>
        <div class="countdown-wrap">
          <div class="countdown-label">Promo berakhir dalam:</div>
          <div class="countdown" id="countdown">
            <div class="cd-block"><span id="cdHours">00</span><small>Jam</small></div>
            <div class="cd-sep">:</div>
            <div class="cd-block"><span id="cdMinutes">00</span><small>Menit</small></div>
            <div class="cd-sep">:</div>
            <div class="cd-block"><span id="cdSeconds">00</span><small>Detik</small></div>
          </div>
        </div>
        <a href="#cta" class="btn btn-glow">
          <span>Order Sekarang – Sebelum Kehabisan!</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       7. BONUS
  ═══════════════════════════════════════════════ -->
  <section class="bonus" id="bonus">
    <div class="container">
      <div class="section-header" data-reveal>
        <div class="section-tag">Bonus & Promo</div>
        <h2 class="section-title">Beli Kopi,<br><em>Dapat Stiker!</em></h2>
      </div>
      <div class="bonus-single" data-reveal>
        <div class="bonus-card bonus-card--accent bonus-card--center">
          <div class="bonus-icon"></div>
          <h3>Stiker Eksklusif Other Coffee</h3>
          <p>Setiap pembelian kopi di Other Coffee, kamu langsung dapat <strong>stiker eksklusif</strong> Other Coffee gratis! Koleksi stiker kami limited — jangan sampai kehabisan!</p>
          <div class="bonus-tag">Berlaku setiap pembelian</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       8. CTA
  ═══════════════════════════════════════════════ -->
  <section class="cta-section" id="cta">
    <div class="cta-bg-art" aria-hidden="true">
      <svg viewBox="0 0 1440 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <rect width="1440" height="600" fill="#1a2e28"/>
        <circle cx="200" cy="100" r="300" fill="#2F5D50" opacity="0.3"/>
        <circle cx="1300" cy="500" r="250" fill="#2F5D50" opacity="0.2"/>
        <circle cx="800" cy="300" r="400" fill="#6B4F3A" opacity="0.1"/>
      </svg>
    </div>
    <div class="container">
      <div class="cta-content" data-reveal>
        <div class="section-tag">Order Sekarang</div>
        <h2 class="cta-title">Mau Ngopi Santai<br>
      atau Take Away?</h2>
        <p class="cta-desc">Datang langsung ke Other Coffee atau pesan favoritmu lewat WhatsApp. Nikmati kopi dengan vibes cafe motoran yang estetik, nyaman, dan cocok buat nongkrong bareng teman.</p>
        <div class="cta-buttons">
          <a href="https://wa.me/85649989573?text=Halo%20Other%20Coffee%2C%20saya%20mau%20order!" target="_blank" class="btn-contact btn-wa">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp Kami
          </a>
          <a href="https://instagram.com/othercoffee" target="_blank" class="btn-contact btn-ig">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            Instagram
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       9. GARANSI
  ═══════════════════════════════════════════════ -->
  <section class="garansi" id="garansi">
    <div class="container">
      <div class="section-header" data-reveal>
        <div class="section-tag">Jaminan Kami</div>
        <h2 class="section-title">100% Terjamin<br><em>Untuk Kamu</em></h2>
      </div>
      <div class="garansi-grid" data-reveal>
        <div class="garansi-card">
          <h3>Garansi Rasa</h3>
          <p>Tidak puas dengan rasa? Kami racikkan ulang atau uang kembali, no question asked.</p>
        </div>
        <div class="garansi-card">
          <h3>Garansi Kebersihan</h3>
          <p>Semua peralatan disterilkan rutin. Bahan baku selalu fresh dan bebas pengawet.</p>
        </div>
        <div class="garansi-card">
          <h3>Garansi Pelayanan</h3>
          <p>Pelayanan ramah dan profesional. Respons cepat setiap pertanyaan dan keluhan.</p>
        </div>
        <div class="garansi-card">
          <h3>Garansi Kualitas</h3>
          <p>Hanya bahan terbaik yang masuk ke kopi kami. Kualitas terjaga di setiap cup.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ════════════════════════════════
       SPOT LOCATION SECTION
  ════════════════════════════════ -->
  <section class="spot-section">
 
    <!-- TOP PANEL: Title -->
    <div class="spot-top">
      <h2 class="spot-title">
        <span class="title-spot">Spot</span>
        <span class="title-location">Location</span>
      </h2>
    </div>
 
    <!-- BOTTOM PANEL: Carousel -->
    <div class="spot-bottom">
 
      <!-- Arrow Left -->
      <button class="arrow arrow-left" id="arrowLeft" aria-label="Previous">&#9664;</button>
 
      <!-- Cards Track -->
      <div class="carousel-viewport">
        <div class="carousel-track" id="carouselTrack">
 
          <div class="spot-card" data-title="JB Sore Hari" data-desc="Menikmati suasana sore yang hangat di JB dengan langit senja yang indah, udara yang adem, dan vibes nongkrong santai yang menenangkan.">
            <div class="card-frame">
              <video autoplay muted loop playsinline>
                <source src="assets/img/video.mp4" type="video/mp4">
              </video>
              <div class="card-overlay"><span class="card-label">JB Sore Hari</span></div>
            </div>
          </div>
 
          <div class="spot-card" data-title="Ride & Chill" data-desc="Spot favorit menikmati sunset dengan suasana adem, pemandangan sawah, dan vibes nongkrong santai">
            <div class="card-frame">
              <img src="assets/img/spot1.jpeg" alt="Ride & Chill" />
              <div class="card-overlay"><span class="card-label">Ride & Chill</span></div>
            </div>
          </div>
 
          <div class="spot-card" data-title="Senja di Langit JB" data-desc="Di bawah langit senja JB, cerita-cerita sederhana terasa lebih hangat, ditemani angin sore dan warna langit yang perlahan pulang.">
            <div class="card-frame">
              <img src="assets/img/spot2.jpeg" alt="Senja di Langit JB" />
              <div class="card-overlay"><span class="card-label">Senja di Langit JB</span></div>
            </div>
          </div>
 
          <div class="spot-card" data-title="Evening Brew" data-desc="Di antara aroma kopi dan suasana sore yang tenang, ada cerita-cerita kecil yang terasa lebih hidup.">
            <div class="card-frame">
              <img src="assets/img/spot3.jpeg" alt="Evening Brew" />
              <div class="card-overlay"><span class="card-label">Evening Brew</span></div>
            </div>
          </div>
 
        </div><!-- /carousel-track -->
      </div><!-- /carousel-viewport -->
 
      <!-- Arrow Right -->
      <button class="arrow arrow-right" id="arrowRight" aria-label="Next">&#9654;</button>
 
      <!-- Dots -->
      <div class="carousel-dots" id="carouselDots"></div>
 
    </div><!-- /spot-bottom -->
 
  </section>
 
 
  <!-- ════════════════════════════════
       MODAL
  ════════════════════════════════ -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="modal-card">

      <button class="modal-close" id="modalClose">
        &#x2715;
      </button>

      <!-- IMAGE -->
      <img class="modal-img" id="modalImg" src="" alt="" />

      <!-- VIDEO -->
      <video class="modal-video" id="modalVideo" controls>
        <source id="modalVideoSrc" src="" type="video/mp4">
      </video>

      <div class="modal-body">
        <h3 class="modal-title" id="modalTitle"></h3>
        <p class="modal-desc" id="modalDesc"></p>
      </div>

    </div>
  </div>

  <!-- ═══════════════════════════════════════════════
       10. NB / CATATAN + FOOTER
  ═══════════════════════════════════════════════ -->
  <footer class="footer" id="nb">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="nav-logo" style="margin-bottom:1rem;">
            <span class="logo-svg">
              <svg width="34" height="34" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                <circle cx="18" cy="18" r="17" fill="#2F5D50"/>
                <circle cx="18" cy="18" r="10.5" fill="none" stroke="#A7C4A0" stroke-width="2"/>
                <ellipse cx="18" cy="18" rx="4.5" ry="6.5" fill="#A7C4A0"/>
                <line x1="18" y1="11.5" x2="18" y2="24.5" stroke="#2F5D50" stroke-width="1.4"/>
              </svg>
            </span>
            <span class="logo-text-other">
              <span class="logo-name">Other</span>
              <span class="logo-tagline">Coffee On The Road</span>
            </span>
          </div>
          <p>Kopi keliling modern yang hadir untuk menemanimu kapan saja, di mana saja.</p>
          <div class="footer-social">
             <a href="https://wa.me/6285649989573?text=Halo%20Other%20Coffee%2C%20saya%20mau%20order!" target="_blank" aria-label="WhatsApp">
              <img src="assets/img/waa.png" alt="WhatsApp" width="50">
            </a>
            <a href="https://www.instagram.com/othercoffee_" target="_blank" aria-label="Instagram">
              <img src="assets/img/ig2.png" alt="Instagram" width="50">
            </a>
            <a href="https://www.tiktok.com/@othercoffee6?" target="_blank" aria-label="TikTok">
              <img src="assets/img/tiktok.webp" alt="TikTok" width="50">
            </a>
          </div>
        </div>
        <div class="footer-nb">
          <h4>Catatan Penting </h4>
          <ul>
            <li>Harga dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</li>
            <li>Update lokasi harian tersedia di Instagram <strong>@othercoffeeid</strong></li>
            <li>Pemesanan hanya melalui WhatsApp atau DM Instagram.</li>
            <li>Semua promo memiliki syarat & ketentuan yang berlaku.</li>
            <li>Stok harian terbatas, first come first served.</li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#opening">Tentang Kami</a></li>
            <li><a href="#menu-andalan">Menu</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#cta">Kontak</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© <?php echo date('Y'); ?> Other Coffee. Made with love for coffee lovers.</p>
        <div class="footer-credit">
          <span>Created by <strong>Akmal Hidayatulloh (NPM. 11220044)</strong></span>
          <span class="footer-credit-sep">·</span>
          <span>Supported by</span>
          <img src="assets/img/logo.png" alt="Logo Kampus" class="footer-logo-kampus"
              onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
          <span style="display:none; font-weight:600;">Kampus</span>
          <span><strong>STMIK DCI</strong></span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Sticky Mobile CTA -->
  <div class="sticky-cta" id="stickyCTA">
    <a href="https://wa.me/6285649989573?text=Halo%20Other%20Coffee%2C%20saya%20mau%20order!" target="_blank" class="sticky-wa">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Order via WhatsApp
    </a>
  </div>

  <script src="assets/js/script.js"></script>
</body>
</html>