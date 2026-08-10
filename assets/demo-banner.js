/* ============================================================
   BANNER DEMO — buang fail ini bila laman sudah jadi WordPress
   ============================================================ */
(function () {
  var bar = document.createElement('div');
  bar.id = 'demo-bar';
  bar.innerHTML =
    '<span><strong>PRATONTON REKA BENTUK</strong> — Laman contoh untuk semakan PMNI. ' +
    'Kandungan, gambar &amp; dokumen adalah sementara.</span>' +
    '<button aria-label="Tutup">&times;</button>';

  var css = document.createElement('style');
  css.textContent =
    '#demo-bar{position:fixed;left:0;right:0;bottom:0;z-index:99998;' +
    'background:#1a3a6b;color:#fff;font-family:system-ui,sans-serif;font-size:.78rem;' +
    'padding:10px 56px 10px 18px;display:flex;align-items:center;justify-content:center;' +
    'gap:10px;text-align:center;box-shadow:0 -2px 12px rgba(0,0,0,.2);line-height:1.5}' +
    '#demo-bar strong{color:#f0d080;letter-spacing:.04em}' +
    '#demo-bar button{position:absolute;right:12px;top:50%;transform:translateY(-50%);' +
    'background:rgba(255,255,255,.15);border:0;color:#fff;width:26px;height:26px;' +
    'border-radius:50%;font-size:1.1rem;cursor:pointer;line-height:1}' +
    '#demo-bar button:hover{background:rgba(255,255,255,.3)}' +
    'body{padding-bottom:46px}' +
    '.wa-float{bottom:74px !important}' +
    '@media(max-width:600px){#demo-bar{font-size:.7rem;padding:8px 46px 8px 12px}' +
    'body{padding-bottom:56px}.wa-float{bottom:84px !important}}';

  document.head.appendChild(css);

  function mount() {
    document.body.appendChild(bar);
    bar.querySelector('button').onclick = function () {
      bar.remove();
      document.body.style.paddingBottom = '0';
      var wa = document.querySelector('.wa-float');
      if (wa) wa.style.bottom = '28px';
    };
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', mount);
  } else {
    mount();
  }
})();
