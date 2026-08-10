/* ============================================================
   PMNI — Shared Components & Interaksi
   Nota: Dalam WordPress, navbar & footer ini jadi header.php
   dan footer.php. Fail ini untuk demo HTML statik sahaja.
   ============================================================ */

const PMNI = {
  tel:   '011-5433 1448',
  tel2:  '011-1294 9535',
  tel3:  '017-724 9535',
  wa:    '601154331448',
  emel:  'info@pmni.edu.my',
  alamat:'Jalan Rawang, Kampung Kuantan, 45600 Kuala Selangor, Selangor',
  maps:  'https://maps.google.com/?q=Jalan+Rawang+Kampung+Kuantan+45600+Kuala+Selangor',
  waze:  'https://waze.com/ul?q=Jalan%20Rawang%20Kampung%20Kuantan%20Kuala%20Selangor',
  sosial: {
    fb: 'https://www.facebook.com/share/1EsJNTfjje/',
    ig: 'https://www.instagram.com/pmnalisyraq',
    tt: 'https://www.tiktok.com/@pmnalisyraq',
    yt: 'https://youtube.com/@pmnalisyraq',
    th: 'https://www.threads.com/@pmnalisyraq',
    x:  'https://x.com/pmnalisyraq',
    tg: 'https://t.me/alisyraqtv',
    wac:'https://whatsapp.com/channel/0029VajaK8T9RZAOM6tCRd0i'
  }
};

/* ---------- NAVBAR ---------- */
function buildNav(active) {
  const item = (href, label, isActive, drop) => {
    const cls = [isActive ? 'active' : '', drop ? 'has-dropdown' : ''].filter(Boolean).join(' ');
    const caret = drop ? ' <i class="fa-solid fa-chevron-down" style="font-size:.55rem;opacity:.5"></i>' : '';
    const sub = drop ? `<ul class="dropdown">${drop.map(d => `<li><a href="${d[0]}">${d[1]}</a></li>`).join('')}</ul>` : '';
    return `<li class="${cls}"><a href="${href}">${label}${caret}</a>${sub}</li>`;
  };

  return `
<div class="top-bar">
  <div class="container">
    <div class="top-bar-item"><i class="fa-regular fa-clock"></i><span>Isnin – Sabtu: 8:00pg – 10:00mlm</span></div>
    <div class="top-bar-item"><i class="fa-solid fa-phone"></i><a href="tel:+${PMNI.wa}">${PMNI.tel}</a></div>
    <div class="top-bar-item"><i class="fa-regular fa-envelope"></i><a href="mailto:${PMNI.emel}">${PMNI.emel}</a></div>
    <div class="top-bar-item"><i class="fa-solid fa-location-dot"></i><a href="${PMNI.maps}" target="_blank" rel="noopener">Jalan Rawang, Kampung Kuantan, 45600 Kuala Selangor</a></div>
  </div>
</div>

<nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi utama">
  <div class="container">
    <a class="logo" href="index.html">
      <div class="logo-box">
        <div class="logo-arab">نور العشراق</div>
        <div class="logo-rumi">Pondok Moden<br>Nurul Isyraq</div>
      </div>
    </a>
    <button class="hamburger" id="hamburgerBtn" aria-label="Buka menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-menu" id="navMenu">
      ${item('index.html','Utama', active==='utama')}
      ${item('profil.html','Profil', active==='profil', [
        ['profil.html#latar','Latar Belakang'],
        ['profil.html#visi-misi','Visi & Misi'],
        ['profil.html#pimpinan','Pimpinan'],
        ['profil.html#pengasas','Biodata Pengasas'],
        ['profil.html#asatizah','Barisan Asatizah']
      ])}
      ${item('akademik.html','Akademik', active==='akademik', [
        ['akademik.html#prinsip',"Prinsip Ta'lim & Tarbiyah"],
        ['akademik.html#rukun','6 Rukun Pendidikan'],
        ['akademik.html#metod','2 Metod Pengajian'],
        ['akademik.html#manhaj','Manhaj Kurikulum'],
        ['akademik.html#silibus','Silibus Pengajian'],
        ['akademik.html#ekosistem','Ekosistem 1000 Tahun']
      ])}
      ${item('pembangunan.html','Pembangunan', active==='pembangunan', [
        ['pembangunan.html#premis','Premis Sedia Ada'],
        ['pembangunan.html#tapak','Perancangan Tapak Kekal'],
        ['pembangunan.html#garismasa','Garis Masa Pembinaan'],
        ['pembangunan.html#infaq','Tabung Infaq']
      ])}
      ${item('media.html','Media', active==='media', [
        ['media.html#aktiviti','Aktiviti & Hebahan'],
        ['media.html#galeri','Galeri'],
        ['media.html#lokasi','Lokasi'],
        ['media.html#hubungi','Hubungi Kami']
      ])}
      ${item('muat-turun.html','Muat Turun', active==='muat-turun')}
      <li class="nav-epend"><a href="pendaftaran.html">E-Pendaftaran</a></li>
    </ul>
  </div>
</nav>`;
}

/* ---------- FOOTER ---------- */
function buildFooter() {
  const s = PMNI.sosial;
  return `
<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-col-title">Pautan Pantas</div>
      <ul class="footer-pautan">
        <li><div class="icon-box"><i class="fa-solid fa-mosque"></i></div><a href="profil.html">Profil &amp; Pentadbiran</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-book-quran"></i></div><a href="akademik.html">Akademik &amp; Tarbiyah</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-building"></i></div><a href="pembangunan.html">Pembangunan &amp; Infaq</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-file-pdf"></i></div><a href="muat-turun.html">Muat Turun Dokumen</a></li>
        <li><div class="icon-box"><i class="fa-brands fa-telegram"></i></div><a href="${s.tg}" target="_blank" rel="noopener">Telegram Al-Isyraq TV</a></li>
        <li><div class="icon-box"><i class="fa-brands fa-whatsapp"></i></div><a href="${s.wac}" target="_blank" rel="noopener">WhatsApp Channel</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-col-title">Hubungi Kami</div>
      <ul class="footer-hubungi">
        <li><i class="fa-solid fa-location-dot"></i><span>${PMNI.alamat}</span></li>
        <li><i class="fa-solid fa-phone"></i><span class="tel-link">
          ${PMNI.tel} · ${PMNI.tel2} · ${PMNI.tel3}<br>
          <a href="tel:+${PMNI.wa}">Telefon</a> | <a href="https://wa.me/${PMNI.wa}" target="_blank" rel="noopener">Whatsapp</a>
        </span></li>
        <li><i class="fa-regular fa-envelope"></i><a href="mailto:${PMNI.emel}">${PMNI.emel}</a></li>
        <li><i class="fa-solid fa-map-location-dot"></i><span>
          <a href="${PMNI.maps}" target="_blank" rel="noopener">Google Maps</a> |
          <a href="${PMNI.waze}" target="_blank" rel="noopener">Waze</a>
        </span></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div>
      <div class="footer-copy">Perhubungan Awam &amp; Media 2026 ©</div>
      <div class="footer-kemaskini">Kemaskini : <span id="tarikh-kemaskini"></span></div>
    </div>
    <div class="footer-sosmed">
      <a href="${s.fb}"  target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="${s.ig}"  target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="${s.tg}"  target="_blank" rel="noopener" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
      <a href="${s.yt}"  target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
      <a href="${s.tt}"  target="_blank" rel="noopener" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      <a href="${s.th}"  target="_blank" rel="noopener" aria-label="Threads"><i class="fa-brands fa-threads"></i></a>
      <a href="${s.x}"   target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="${s.wac}" target="_blank" rel="noopener" aria-label="WhatsApp Channel"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
  </div>
</footer>

<a href="https://wa.me/${PMNI.wa}?text=Assalamualaikum%2C%20saya%20ingin%20bertanya%20mengenai%20PMNI."
   target="_blank" rel="noopener" class="wa-float" aria-label="WhatsApp PMNI">
  <i class="fa-brands fa-whatsapp"></i><span class="wa-dot"></span>
</a>`;
}

/* ---------- INIT ---------- */
document.addEventListener('DOMContentLoaded', () => {

  // Inject navbar
  const navSlot = document.getElementById('nav-slot');
  if (navSlot) navSlot.outerHTML = buildNav(document.body.dataset.page || '');

  // Inject footer
  const footSlot = document.getElementById('footer-slot');
  if (footSlot) footSlot.outerHTML = buildFooter();

  // Tarikh kemaskini
  const hari  = ['Ahad','Isnin','Selasa','Rabu','Khamis','Jumaat','Sabtu'];
  const bulan = ['Januari','Februari','Mac','April','Mei','Jun','Julai','Ogos','September','Oktober','November','Disember'];
  const now = new Date();
  const tk = document.getElementById('tarikh-kemaskini');
  if (tk) tk.textContent = `${now.getDate()} ${bulan[now.getMonth()]} ${now.getFullYear()} (${hari[now.getDay()]})`;

  // Hamburger
  const burger = document.getElementById('hamburgerBtn');
  const menu   = document.getElementById('navMenu');
  if (burger && menu) {
    burger.addEventListener('click', () => {
      const open = menu.classList.toggle('open');
      burger.setAttribute('aria-expanded', open);
      burger.classList.toggle('active', open);
    });
    menu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        if (window.innerWidth <= 980) { menu.classList.remove('open'); burger.classList.remove('active'); }
      });
    });
  }

  // Counter animasi
  const counters = document.querySelectorAll('.counter-num[data-target]');
  if (counters.length) {
    const io = new IntersectionObserver(es => es.forEach(e => {
      if (!e.isIntersecting) return;
      const t = parseInt(e.target.dataset.target, 10);
      if (isNaN(t)) { io.unobserve(e.target); return; }
      let s = null;
      const step = ts => {
        if (!s) s = ts;
        const p = Math.min((ts - s) / 1600, 1);
        e.target.textContent = Math.floor(p * t);
        if (p < 1) requestAnimationFrame(step); else e.target.textContent = t;
      };
      requestAnimationFrame(step);
      io.unobserve(e.target);
    }), { threshold: .5 });
    counters.forEach(c => io.observe(c));
  }

  // Reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length) {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      reveals.forEach(r => r.classList.add('visible'));
    } else {
      const io2 = new IntersectionObserver(es => es.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); io2.unobserve(e.target); }
      }), { threshold: .12 });
      reveals.forEach(r => io2.observe(r));
    }
  }

  // Ticker berita
  const ticker = document.getElementById('tickerText');
  if (ticker) {
    const berita = JSON.parse(ticker.dataset.items || '[]');
    if (berita.length) {
      let i = 0;
      ticker.textContent = berita[0];
      setInterval(() => {
        i = (i + 1) % berita.length;
        ticker.style.opacity = 0;
        setTimeout(() => { ticker.textContent = berita[i]; ticker.style.opacity = 1; }, 250);
      }, 4500);
    }
  }
});
