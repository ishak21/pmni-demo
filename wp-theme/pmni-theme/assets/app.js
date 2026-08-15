/* ============================================================
   PMNI — Interaksi laman
   ============================================================ */
(function () {
  'use strict';

  /* ---------- Navbar shadow semasa skrol ---------- */
  var navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      navbar.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

  /* ---------- Menu hamburger ---------- */
  var btn = document.getElementById('hamburgerBtn');
  var menu = document.getElementById('navMenu');
  if (btn && menu) {
    btn.addEventListener('click', function () {
      var open = menu.classList.toggle('open');
      btn.classList.toggle('open');
      btn.setAttribute('aria-expanded', open);
    });
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.navbar')) {
        menu.classList.remove('open');
        btn.classList.remove('open');
        btn.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---------- Dropdown pada telefon ---------- */
  document.querySelectorAll('.nav-menu .menu-item-has-children > a').forEach(function (a) {
    a.addEventListener('click', function (e) {
      if (window.innerWidth <= 900) {
        e.preventDefault();
        a.parentElement.classList.toggle('dropdown-open');
      }
    });
  });

  /* ---------- Ticker: gandakan supaya gelung mulus ---------- */
  var tick = document.getElementById('tickerRun');
  if (tick && tick.children.length) tick.innerHTML += tick.innerHTML;

  /* ---------- Tarikh kemas kini di footer ---------- */
  var elTarikh = document.getElementById('tarikh-kemaskini');
  if (elTarikh) {
    var hari = ['Ahad','Isnin','Selasa','Rabu','Khamis','Jumaat','Sabtu'];
    var bulan = ['Jan','Feb','Mac','Apr','Mei','Jun','Jul','Ogos','Sep','Okt','Nov','Dis'];
    var n = new Date();
    elTarikh.textContent = n.getDate() + ' ' + bulan[n.getMonth()] + ' ' + n.getFullYear() + ' (' + hari[n.getDay()] + ')';
  }

  /* ---------- Kaunter statistik ---------- */
  function kira(el, sasaran) {
    if (isNaN(sasaran) || sasaran === 0) { el.textContent = sasaran || 0; return; }
    var mula = null, tempoh = 2000;
    function langkah(ts) {
      if (!mula) mula = ts;
      var p = Math.min((ts - mula) / tempoh, 1);
      var e = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.floor(e * sasaran);
      if (p < 1) requestAnimationFrame(langkah); else el.textContent = sasaran;
    }
    requestAnimationFrame(langkah);
  }

  /* ---------- Scroll reveal ---------- */
  if ('IntersectionObserver' in window) {
    var ioReveal = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('visible'); ioReveal.unobserve(en.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(function (el) { ioReveal.observe(el); });

    var ioCtr = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) {
          kira(en.target, parseInt(en.target.dataset.target, 10));
          ioCtr.unobserve(en.target);
        }
      });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter-num[data-target]').forEach(function (el) { ioCtr.observe(el); });
  } else {
    document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('visible'); });
    document.querySelectorAll('.counter-num[data-target]').forEach(function (el) {
      el.textContent = el.dataset.target;
    });
  }

  /* ---------- Waktu solat — diambil terus dari AlAdhan API ----------
     Kaedah 17 = JAKIM (Jabatan Kemajuan Islam Malaysia)             */
  var grid = document.getElementById('solatGrid');
  if (grid) {
    var peta = { Subuh: 'Fajr', Syuruk: 'Sunrise', Zohor: 'Dhuhr', Asar: 'Asr', Maghrib: 'Maghrib', Isyak: 'Isha' };
    fetch('https://api.aladhan.com/v1/timingsByCity?city=Kuala%20Selangor&country=Malaysia&method=17')
      .then(function (r) { return r.json(); })
      .then(function (d) {
        if (!d || !d.data || !d.data.timings) return;
        var t = d.data.timings;
        Object.keys(peta).forEach(function (nama) {
          var el = grid.querySelector('[data-solat="' + nama + '"]');
          if (el && t[peta[nama]]) el.textContent = t[peta[nama]].replace(/\s*\(.*\)/, '');
        });
        var lbl = document.getElementById('solatTarikh');
        if (lbl && d.data.date && d.data.date.readable) {
          lbl.textContent = 'Waktu solat ' + d.data.date.readable;
        }
      })
      .catch(function () {
        grid.querySelectorAll('[data-solat]').forEach(function (el) { el.textContent = '--:--'; });
      });
  }
})();
