<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<!-- PENGUMUMAN -->
<div class="pengumuman-bar" role="alert">
  PERMOHONAN KEMASUKAN PELAJAR BAHARU SESI 2027 PMNI TELAH DIBUKA &mdash;
  <a href="<?php echo esc_url(home_url('/pendaftaran/')); ?>">HUBUNGI KAMI</a>
</div>

<!-- HERO -->
<section class="hero" role="banner">
  <div class="hero-bg" aria-hidden="true" style="background-image:url('<?php echo esc_url(pmni_hero_bg()); ?>')"></div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-bismillah">&#1576;&#1616;&#1587;&#1618;&#1605;&#1616; &#1575;&#1604;&#1604;&#1617;&#1648;&#1607;&#1616; &#1575;&#1604;&#1585;&#1617;&#1614;&#1581;&#1618;&#1605;&#1648;&#1606;&#1616; &#1575;&#1604;&#1585;&#1617;&#1614;&#1581;&#1616;&#1610;&#1618;&#1605;&#1616;</div>
    <h1 class="hero-slogan">Adab Di Atas Ilmu</h1>
    <p class="hero-tagline">&ldquo;Ke Arah Melahirkan Ilmuan Islam Berprestasi Tinggi&rdquo;</p>
    <p class="hero-sub">Pondok Moden Nurul Isyraq &mdash; Sistem Pendidikan Al-Isyraq diasaskan oleh<br>Syeikh Rohimuddin Nawawi Al-Bantani</p>
    <div class="hero-btns">
      <a href="<?php echo esc_url(home_url('/profil/')); ?>" class="btn-primary">Kenali PMNI</a>
      <a href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>" class="btn-outline">Salurkan Infaq</a>
    </div>
  </div>
  <div class="hero-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M0,40 C180,80 360,0 540,40 C720,80 900,0 1080,40 C1260,80 1350,20 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      <path d="M0,55 C200,30 400,70 600,50 C800,30 1000,65 1200,45 C1320,33 1380,55 1440,48 L1440,80 L0,80 Z" fill="#ffffff" opacity="0.5"/>
    </svg>
  </div>
</section>

<!-- KAD SOROTAN — mengikut spesifikasi: Pra-PMNI, PMNI, Infaq Operasi, Infaq Pembangunan -->
<div class="kad-sorotan">
  <a class="kad kad-1 reveal" href="<?php echo esc_url(home_url('/akademik/')); ?>">
    <div class="kad-ikon"><svg viewBox="0 0 64 64" fill="none"><path d="M32 8L56 22V42L32 56L8 42V22L32 8Z" stroke="white" stroke-width="2.5"/><path d="M32 8V56M8 22L56 22M8 42L56 42" stroke="white" stroke-width="1.5" stroke-dasharray="4 3"/><circle cx="32" cy="32" r="8" stroke="white" stroke-width="2.5"/></svg></div>
    <div class="kad-tajuk">Pra-PMNI</div>
    <div class="kad-teks">Peringkat asas pengajian bagi persediaan memasuki program utama PMNI</div>
  </a>
  <a class="kad kad-2 reveal reveal-delay-1" href="<?php echo esc_url(home_url('/akademik/')); ?>">
    <div class="kad-ikon"><svg viewBox="0 0 64 64" fill="none"><rect x="10" y="14" width="44" height="36" rx="3" stroke="white" stroke-width="2.5"/><path d="M10 24H54" stroke="white" stroke-width="2"/><path d="M22 14V10M42 14V10" stroke="white" stroke-width="2.5" stroke-linecap="round"/><path d="M20 34H44M20 42H36" stroke="white" stroke-width="2" stroke-linecap="round"/></svg></div>
    <div class="kad-tajuk">PMNI</div>
    <div class="kad-teks">Program pengajian utama berdasarkan Sistem Pendidikan Al-Isyraq</div>
  </a>
  <a class="kad kad-3 reveal reveal-delay-2" href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>">
    <div class="kad-ikon"><svg viewBox="0 0 64 64" fill="none"><circle cx="32" cy="20" r="10" stroke="white" stroke-width="2.5"/><circle cx="14" cy="28" r="8" stroke="white" stroke-width="2"/><circle cx="50" cy="28" r="8" stroke="white" stroke-width="2"/><path d="M4 52C4 44 8 40 14 40M60 52C60 44 56 40 50 40M18 52C18 44 24 40 32 40C40 40 46 44 46 52" stroke="white" stroke-width="2.5" stroke-linecap="round"/></svg></div>
    <div class="kad-tajuk">Infaq Operasi</div>
    <div class="kad-teks">Sokongan operasi bulanan untuk kesinambungan program pendidikan</div>
  </a>
  <a class="kad kad-4 reveal reveal-delay-3" href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>">
    <div class="kad-ikon"><svg viewBox="0 0 64 64" fill="none"><path d="M32 6L38 20H54L42 30L46 46L32 36L18 46L22 30L10 20H26L32 6Z" stroke="white" stroke-width="2.5"/><path d="M32 18L35 26H44L37 31L39 40L32 35L25 40L27 31L20 26H29L32 18Z" fill="white" opacity="0.25"/></svg></div>
    <div class="kad-tajuk">Infaq Pembangunan</div>
    <div class="kad-teks">Wakaf pembangunan tapak kekal PMNI untuk generasi akan datang</div>
  </a>
</div>

<!-- POSTER PENGUMUMAN -->
<section class="pengumuman-seksyen reveal">
  <h2 class="pengumuman-tajuk">Permohonan Kemasukan Pelajar Baharu Sesi 2027<br>Pondok Moden Nurul Isyraq (PMNI) Telah Dibuka</h2>
  <div class="poster-grid">
    <div class="poster-kad"><div class="poster-placeholder">
      <div class="logo-arab">&#1606;&#1608;&#1585; &#1575;&#1604;&#1573;&#1588;&#1585;&#1575;&#1602;</div>
      <div class="poster-tajuk">Pengambilan<br>Pelajar Baharu</div>
      <div class="poster-subtitle">Sesi 2027 &mdash; Daftar Sekarang</div>
      <ul class="poster-syarat">
        <li>Lelaki sahaja</li><li>Warganegara Malaysia</li>
        <li>Berumur 11 &amp; 12 tahun pada 2027</li>
        <li>Boleh membaca Al-Quran</li><li>Sihat tubuh badan</li>
      </ul>
    </div></div>
    <div class="poster-kad"><div class="poster-placeholder poster-placeholder-2">
      <div class="poster-tajuk">Halatuju<br>Pendidikan</div>
      <div class="poster-subtitle">Sistem Al-Isyraq</div>
      <ul class="poster-syarat">
        <li>Hafazan Al-Quran bersistem</li><li>Pengajian Tafaqquh</li>
        <li>Sijil Pelajaran Malaysia</li><li>Pembangunan akhlak &amp; adab</li>
        <li>Program asrama berpantau</li>
      </ul>
      <div style="margin-top:22px">
        <a href="<?php echo esc_url(home_url('/pendaftaran/')); ?>" class="btn-emas" style="font-size:.82rem;padding:12px 28px">Daftar Sekarang</a>
      </div>
    </div></div>
  </div>
</section>

<!-- PENGENALAN -->
<section class="pengenalan">
  <div class="pengenalan-inner">
    <div class="reveal">
      <p class="pengenalan-petikan">PMNI membiayai sepenuhnya kos pengajian pelajar sepanjang tempoh pengajian.</p>
      <p class="pengenalan-teks">Pondok Moden Nurul Isyraq (PMNI) merupakan sebuah institusi pendidikan Islam yang diasaskan oleh Syeikh Rohimuddin Nawawi Al-Bantani. PMNI menawarkan Sistem Pendidikan Al-Isyraq &mdash; satu pendekatan holistik yang menggabungkan hafazan Al-Quran, pengajian tafaqquh, dan pembentukan akhlak mulia.</p>
      <p class="pengenalan-teks">Berlokasi di Kuala Selangor, Selangor, PMNI berhasrat untuk melahirkan ilmuan Islam berprestasi tinggi yang mampu membimbing masyarakat berdasarkan Al-Quran dan Sunnah.</p>
      <a href="<?php echo esc_url(home_url('/profil/')); ?>" class="btn-hijau">Baca Profil Penuh <i class="fa-solid fa-arrow-right" style="font-size:.7rem"></i></a>
    </div>
    <div class="pengenalan-kanan reveal reveal-delay-2">
      <div class="petikan-kanan">
        <span class="tanda-petik">&ldquo;</span>
        PMNI berhasrat untuk melahirkan para ilmuan Islam yang <em>mutqin, abaqirah, amaliqah</em> dan bercakap atas dasar <em>iman, ilmu</em> dan tidak memihak kepada mana-mana kumpulan, InsyaAllah.
        <span class="tanda-petik" style="float:right">&rdquo;</span>
      </div>
      <div class="nama-mudir">Syeikh Rohimuddin Nawawi Al-Bantani, Pengasas PMNI</div>
    </div>
  </div>
</section>

<!-- BERITA & AKTIVITI -->
<section class="berita-seksyen">
  <?php
  $tick = new WP_Query(['posts_per_page' => 8, 'ignore_sticky_posts' => true]);
  if ($tick->have_posts()) : ?>
  <div class="latest-bar">
    <span class="latest-label">Aktiviti Terkini</span>
    <div class="latest-ticker-wrap"><div class="latest-ticker-run" id="tickerRun">
      <?php while ($tick->have_posts()) : $tick->the_post(); ?><span><?php the_title(); ?></span><?php endwhile; ?>
    </div></div>
  </div>
  <?php endif; wp_reset_postdata(); ?>

  <?php
  $q = new WP_Query(['posts_per_page' => 6, 'ignore_sticky_posts' => true]);
  if ($q->have_posts()) : $i = 0; ?>
  <div class="berita-grid reveal">
    <?php while ($q->have_posts()) : $q->the_post(); $i++;
      $featured = ($i === 3);
      $kat = get_the_category();
      $thumb = get_the_post_thumbnail_url(get_the_ID(), 'pmni-berita');
    ?>
      <article class="berita-item<?php echo $featured ? ' featured' : ''; ?>">
        <?php if ($featured && $thumb) : ?>
          <div class="bi-bg" style="background-image:url('<?php echo esc_url($thumb); ?>')"></div>
        <?php endif; ?>
        <div class="berita-num"><?php echo $i; ?></div>
        <div class="berita-divider"></div>
        <div>
          <div class="berita-meta-label"><?php echo $kat ? esc_html($kat[0]->name) : 'Berita'; ?></div>
          <h3 class="berita-tajuk-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="berita-masa">ADMIN // <?php echo get_the_date('d/m/Y'); ?> &nbsp; <?php echo get_the_time('g:i A'); ?></div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
  <div style="text-align:center;margin-top:32px">
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn-hijau">Lihat Semua Berita</a>
  </div>
  <?php else : ?>
    <p class="tiada-kandungan">Belum ada berita. Tambah melalui Dashboard &rsaquo; Posts &rsaquo; Add New.</p>
  <?php endif; wp_reset_postdata(); ?>

  <!-- FEED MEDIA SOSIAL -->
  <div style="max-width:1140px;margin:40px auto 0" class="reveal">
    <div class="feed-placeholder">
      <i class="fa-brands fa-facebook"></i>
      <p>Feed Facebook rasmi PMNI akan dipaparkan di sini menggunakan pemalam <strong>Smash Balloon Social Post Feed</strong>. Admin: pasang pemalam, kemudian gantikan bahagian ini dengan shortcode <code>[custom-facebook-feed]</code>.</p>
      <div class="sosmed-row">
        <?php
        $sm = ['pmni_fb'=>['fb','fa-brands fa-facebook','Facebook'],'pmni_ig'=>['ig','fa-brands fa-instagram','Instagram'],
               'pmni_yt'=>['yt','fa-brands fa-youtube','YouTube'],'pmni_tiktok'=>['tt','fa-brands fa-tiktok','TikTok'],
               'pmni_telegram'=>['tg','fa-brands fa-telegram','Telegram']];
        foreach ($sm as $k => $d) { $u = pmni_get($k); if (!$u) continue;
          printf('<a href="%s" target="_blank" rel="noopener" class="sosmed-btn %s"><i class="%s"></i> %s</a>',
            esc_url($u), esc_attr($d[0]), esc_attr($d[1]), esc_html($d[2])); } ?>
      </div>
    </div>
  </div>
</section>

<!-- SLOGAN BESAR -->
<section class="slogan-besar">
  <p class="slogan-teks reveal">&ldquo;Adab Di Atas <span class="highlight">Ilmu</span>&rdquo;</p>
</section>

<!-- SUMBANGAN / INFAQ -->
<section class="sumbangan-seksyen" id="infaq">
  <div class="sumbangan-ayat reveal">&#1582;&#1614;&#1610;&#1618;&#1585;&#1615;&#1603;&#1615;&#1605;&#1618; &#1605;&#1614;&#1606;&#1618; &#1578;&#1614;&#1593;&#1614;&#1604;&#1617;&#1614;&#1605;&#1614; &#1575;&#1604;&#1618;&#1602;&#1615;&#1585;&#1618;&#1570;&#1606;&#1614; &#1608;&#1614;&#1593;&#1614;&#1604;&#1617;&#1614;&#1605;&#1614;&#1607;&#1615;</div>
  <p class="sumbangan-hadis reveal">&ldquo;Sebaik-baik kamu adalah orang yang mempelajari Al-Quran dan mengajarkannya.&rdquo; &mdash; HR. Bukhari</p>

  <div class="tabung-grid reveal">
    <div class="tabung-kad"><div class="tabung-ikon"><i class="fa-solid fa-mosque"></i></div>
      <div class="tabung-nama">Infaq Operasi Bulanan</div>
      <div class="tabung-penerangan">Sokongan berterusan untuk operasi harian &mdash; gaji asatizah, utiliti, dan keperluan pelajar</div></div>
    <div class="tabung-kad"><div class="tabung-ikon"><i class="fa-solid fa-book-quran"></i></div>
      <div class="tabung-nama">Infaq Tajaan Pelajar</div>
      <div class="tabung-penerangan">Tanam benih ilmu &mdash; tajaan yuran, buku, pakaian seragam dan penjagaan pelajar asnaf</div></div>
    <div class="tabung-kad"><div class="tabung-ikon"><i class="fa-solid fa-building"></i></div>
      <div class="tabung-nama">Wakaf Pembangunan</div>
      <div class="tabung-penerangan">Sumbangan kekal &mdash; wakaf tapak &amp; pembinaan bangunan PMNI untuk generasi akan datang</div></div>
  </div>

  <p class="sumbangan-cta reveal">Jom berlumba untuk kongsikan kempen ini. Semoga setiap sen yang disumbang<br>hasil perkongsian kita bersama, akan mendapat pahala yang setimpal. <span class="emas">JOM MENYUMBANG</span></p>

  <?php $bank = pmni_get('pmni_bank_nama'); $akaun = pmni_get('pmni_bank_akaun'); $qr = pmni_get('pmni_qr_duitnow'); ?>
  <div class="bank-wrap reveal">
    <div class="bank-info">
      <strong>Maklumat Akaun Bank Rasmi PMNI</strong><br>
      Nama Akaun: <strong><?php echo esc_html(pmni_get('pmni_bank_pemegang') ?: '[Belum dikemas kini]'); ?></strong><br>
      Bank: <strong><?php echo esc_html($bank ?: '[Belum dikemas kini]'); ?></strong><br>
      Nombor Akaun: <strong><?php echo esc_html($akaun ?: '[Belum dikemas kini]'); ?></strong><br>
      Rujukan: <strong>INFAQ &ndash; [Nama Anda]</strong><br><br>
      Sila hantar resit ke WhatsApp
      <a href="https://wa.me/<?php echo esc_attr(pmni_wa()); ?>" target="_blank" rel="noopener" style="color:var(--emas-muda)"><?php echo esc_html(pmni_get('pmni_telefon')); ?></a>
      untuk pengesahan.
    </div>
    <?php if ($qr) : ?>
      <div class="qr-duitnow"><img src="<?php echo esc_url($qr); ?>" alt="Kod QR DuitNow PMNI"><span>DUITNOW</span></div>
    <?php endif; ?>
  </div>

  <a href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>" class="btn-emas reveal">Salurkan Infaq Sekarang</a>
</section>

<!-- COUNTER -->
<section class="counter-seksyen">
  <div class="counter-grid">
    <?php
    $ctr = [['Orang Asatizah','pmni_stat_asatizah'],['Orang Pelajar','pmni_stat_pelajar'],
            ['Juzuk Dihafaz','pmni_stat_juzuk'],['Tahun Beroperasi','pmni_stat_tahun']];
    foreach ($ctr as $c) : ?>
      <div class="counter-item">
        <div class="counter-label"><?php echo esc_html($c[0]); ?></div>
        <div class="counter-num" data-target="<?php echo esc_attr(pmni_get($c[1])); ?>">0</div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- WAKTU SOLAT -->
<section class="solat-seksyen">
  <h2 class="seksyen-tajuk">Waktu Solat &mdash; Kuala Selangor</h2>
  <div class="seksyen-garis"></div>
  <div class="solat-embed reveal">
    <div class="solat-tajuk-kecil" id="solatTarikh">Waktu solat hari ini</div>
    <div class="solat-grid" id="solatGrid">
      <?php foreach (['Subuh','Syuruk','Zohor','Asar','Maghrib','Isyak'] as $s) : ?>
        <div class="solat-item">
          <div class="solat-nama"><?php echo esc_html($s); ?></div>
          <div class="solat-masa" data-solat="<?php echo esc_attr($s); ?>">&mdash;</div>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="solat-powered">Sumber: <a href="https://aladhan.com" target="_blank" rel="noopener">AlAdhan API</a> &middot; Kaedah JAKIM</p>
  </div>
</section>

<?php get_footer();
