<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<!-- PENGUMUMAN -->
<div class="pengumuman-bar" role="alert">
  PERMOHONAN KEMASUKAN PELAJAR BAHARU SESI 2027 PMNI TELAH DIBUKA &mdash;
  <a href="<?php echo esc_url(home_url('/pendaftaran/')); ?>">HUBUNGI KAMI</a>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-bismillah">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
    <h1 class="hero-slogan">Adab Di Atas Ilmu</h1>
    <p class="hero-tagline">&ldquo;Ke Arah Melahirkan Ilmuan Islam Berprestasi Tinggi&rdquo;</p>
    <p class="hero-sub">
      Pondok Moden Nurul Isyraq &mdash; Sistem Pendidikan Al-Isyraq diasaskan oleh<br>
      Syeikh Rohimuddin Nawawi Al-Bantani
    </p>
    <div class="hero-butang">
      <a href="<?php echo esc_url(home_url('/profil/')); ?>" class="btn-primary">Kenali PMNI</a>
      <a href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>" class="btn-outline">Salurkan Infaq</a>
    </div>
  </div>
</section>

<!-- KAD SOROTAN -->
<section class="sorotan">
  <div class="sorotan-grid">
    <a href="<?php echo esc_url(home_url('/akademik/')); ?>" class="sorotan-kad">
      <i class="fa-solid fa-book-quran"></i>
      <h3>Pengajian</h3>
      <p>Pra-PMNI &amp; PMNI &mdash; sistem pendidikan Al-Isyraq</p>
    </a>
    <a href="<?php echo esc_url(home_url('/profil/#visi-misi')); ?>" class="sorotan-kad">
      <i class="fa-solid fa-eye"></i>
      <h3>Visi &amp; Misi</h3>
      <p>Hala tuju dan matlamat pendidikan PMNI</p>
    </a>
    <a href="<?php echo esc_url(home_url('/pembangunan/')); ?>" class="sorotan-kad">
      <i class="fa-solid fa-building-columns"></i>
      <h3>Pembangunan</h3>
      <p>Perancangan tapak kekal &amp; wakaf milik umat</p>
    </a>
    <a href="<?php echo esc_url(home_url('/pembangunan/#infaq')); ?>" class="sorotan-kad">
      <i class="fa-solid fa-hand-holding-heart"></i>
      <h3>Infaq</h3>
      <p>Sumbangan operasi, tajaan pelajar &amp; wakaf</p>
    </a>
  </div>
</section>

<!-- TAJUK HEBAHAN -->
<section class="tajuk-hebahan">
  <h2>Permohonan Kemasukan Pelajar Baharu Sesi 2027<br>Pondok Moden Nurul Isyraq (PMNI) Telah Dibuka</h2>
  <a href="<?php echo esc_url(home_url('/pendaftaran/')); ?>" class="btn-primary">Mohon Sekarang</a>
</section>

<!-- TICKER BERITA -->
<?php
$ticker = new WP_Query(['posts_per_page' => 6, 'ignore_sticky_posts' => true]);
if ($ticker->have_posts()) : ?>
<div class="latest-bar latest-atas">
  <span class="latest-label">Berita Terkini</span>
  <div class="latest-ticker-wrap">
    <div class="latest-ticker-run" id="tickerRun">
      <?php while ($ticker->have_posts()) : $ticker->the_post(); ?>
        <span><?php the_title(); ?></span>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; wp_reset_postdata(); ?>

<!-- BERITA & AKTIVITI -->
<section class="berita-seksyen">
  <h2 class="seksyen-tajuk">Berita &amp; Aktiviti Terkini</h2>
  <div class="seksyen-garis"></div>

  <?php
  $berita = new WP_Query(['posts_per_page' => 6, 'ignore_sticky_posts' => true]);
  if ($berita->have_posts()) : ?>
    <div class="berita-grid">
      <?php while ($berita->have_posts()) : $berita->the_post();
        get_template_part('template-parts/kad-berita');
      endwhile; ?>
    </div>
    <div style="text-align:center;margin-top:36px">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn-primary">Lihat Semua Berita</a>
    </div>
  <?php else : ?>
    <p class="tiada-kandungan">
      Belum ada berita. Tambah berita pertama melalui Dashboard &rsaquo; Posts &rsaquo; Add New.
    </p>
  <?php endif; wp_reset_postdata(); ?>

  <div class="sosmed-row" style="margin-top:40px">
    <?php
    $btn = [
      'pmni_fb'     => ['fb', 'fa-brands fa-facebook', 'Facebook'],
      'pmni_ig'     => ['ig', 'fa-brands fa-instagram', 'Instagram'],
      'pmni_yt'     => ['yt', 'fa-brands fa-youtube', 'YouTube'],
      'pmni_tiktok' => ['tt', 'fa-brands fa-tiktok', 'TikTok'],
      'pmni_telegram' => ['tg', 'fa-brands fa-telegram', 'Telegram'],
    ];
    foreach ($btn as $key => $d) : $url = pmni_get($key); if (!$url) continue; ?>
      <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" class="sosmed-btn <?php echo esc_attr($d[0]); ?>">
        <i class="<?php echo esc_attr($d[1]); ?>"></i> <?php echo esc_html($d[2]); ?>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- SLOGAN -->
<section class="slogan-besar">
  <p>Adab Di Atas Ilmu</p>
</section>

<!-- PENGENALAN -->
<section class="pengenalan">
  <div class="pengenalan-grid">
    <div>
      <h2 class="seksyen-tajuk" style="text-align:left">Pengenalan PMNI</h2>
      <div class="seksyen-garis" style="margin-left:0"></div>
      <p>
        Pondok Moden Nurul Isyraq (PMNI) merupakan institusi pendidikan Islam yang
        menggabungkan sistem pengajian pondok tradisional dengan pendekatan moden,
        berteraskan Sistem Pendidikan Al-Isyraq yang diasaskan oleh
        <strong>Syeikh Rohimuddin Nawawi Al-Bantani</strong>.
      </p>
      <p>
        PMNI menekankan keseimbangan antara <em>ta'lim</em> (pengajaran ilmu) dan
        <em>tarbiyah</em> (pembentukan akhlak), selaras dengan prinsip
        <strong>Adab Di Atas Ilmu</strong>.
      </p>
      <a href="<?php echo esc_url(home_url('/profil/')); ?>" class="btn-primary">Selengkapnya</a>
    </div>
    <div class="pengenalan-video">
      <iframe src="https://www.youtube.com/embed/F8Ec4HbQw4c"
              title="Pengenalan Sistem Al-Isyraq" loading="lazy"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope"
              allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- INFAQ -->
<section class="infaq-seksyen" id="infaq">
  <h2 class="seksyen-tajuk">Tabung Infaq &amp; Sumbangan</h2>
  <div class="seksyen-garis"></div>
  <div class="infaq-grid">
    <div class="infaq-kad">
      <i class="fa-solid fa-mosque"></i>
      <h3>Infaq Operasi Bulanan</h3>
      <p>Menampung keperluan operasi harian PMNI</p>
    </div>
    <div class="infaq-kad">
      <i class="fa-solid fa-user-graduate"></i>
      <h3>Infaq Tajaan Pelajar</h3>
      <p>Membantu pelajar yang memerlukan</p>
    </div>
    <div class="infaq-kad">
      <i class="fa-solid fa-building-columns"></i>
      <h3>Wakaf Pembangunan</h3>
      <p>Pembinaan tapak kekal milik umat</p>
    </div>
  </div>

  <?php $bank = pmni_get('pmni_bank_nama'); $akaun = pmni_get('pmni_bank_akaun'); ?>
  <div class="infaq-bank">
    <h4>Maklumat Akaun Rasmi PMNI</h4>
    <?php if ($bank && $akaun) : ?>
      <p><strong><?php echo esc_html($bank); ?></strong></p>
      <p class="akaun-nombor"><?php echo esc_html($akaun); ?></p>
      <p><?php echo esc_html(pmni_get('pmni_bank_pemegang')); ?></p>
    <?php else : ?>
      <p class="infaq-notis">
        Maklumat akaun bank belum dikemas kini.<br>
        <small>Admin: isi di Appearance &rsaquo; Customize &rsaquo; Maklumat PMNI</small>
      </p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
