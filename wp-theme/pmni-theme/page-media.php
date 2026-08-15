<?php
/** Template Name: Media & Hubungi Kami */
if (!defined('ABSPATH')) exit; get_header(); ?>

<article class="halaman">
  <?php while (have_posts()) : the_post(); ?>
    <header class="halaman-kepala">
      <h1><?php the_title(); ?></h1>
      <div class="seksyen-garis"></div>
    </header>
    <div class="halaman-isi"><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>

<!-- PETA LOKASI -->
<section style="padding:0 24px 72px" id="lokasi">
  <h2 class="seksyen-tajuk">Lokasi Premis PMNI</h2>
  <div class="seksyen-garis"></div>
  <?php $embed = pmni_get('pmni_maps_embed'); ?>
  <div class="peta-wrap">
    <?php if ($embed) : echo $embed; else : ?>
      <iframe
        src="https://www.google.com/maps?q=<?php echo rawurlencode(pmni_get('pmni_alamat')); ?>&output=embed"
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        title="Lokasi Pondok Moden Nurul Isyraq"></iframe>
    <?php endif; ?>
  </div>
  <p class="peta-nota">
    <?php echo esc_html(pmni_get('pmni_alamat')); ?> &middot;
    <a href="<?php echo esc_url(pmni_get('pmni_maps_pautan')); ?>" target="_blank" rel="noopener" style="color:var(--hijau);font-weight:700">Buka dalam Google Maps</a>
  </p>
  <?php if (!$embed && current_user_can('manage_options')) : ?>
    <p class="peta-nota" style="color:var(--merah)">
      <small>Nota admin: peta ini berdasarkan alamat sahaja. Untuk lokasi tepat, salin kod embed dari Google Maps ke Appearance &rsaquo; Customize &rsaquo; Maklumat PMNI.</small>
    </p>
  <?php endif; ?>
</section>

<!-- HUBUNGI -->
<section class="berita-seksyen" id="hubungi">
  <h2 class="seksyen-tajuk">Hubungi Kami</h2>
  <div class="seksyen-garis"></div>
  <div style="max-width:760px;margin:0 auto;text-align:center">
    <a href="https://wa.me/<?php echo esc_attr(pmni_wa()); ?>?text=Assalamualaikum%2C%20saya%20ingin%20bertanya%20mengenai%20PMNI."
       target="_blank" rel="noopener" class="btn-emas" style="margin-bottom:26px">
      <i class="fa-brands fa-whatsapp"></i> WhatsApp Pantas
    </a>
    <p style="color:var(--kelabu);font-size:.9rem;line-height:2">
      <?php foreach (['pmni_telefon','pmni_telefon2','pmni_telefon3'] as $t) : $n = pmni_get($t); if (!$n) continue; ?>
        <a href="tel:<?php echo esc_attr(pmni_tel($n)); ?>" style="color:var(--hijau);font-weight:700"><?php echo esc_html($n); ?></a><br>
      <?php endforeach; ?>
      <a href="mailto:<?php echo esc_attr(pmni_get('pmni_emel')); ?>" style="color:var(--hijau)"><?php echo esc_html(pmni_get('pmni_emel')); ?></a>
    </p>
  </div>
</section>

<?php get_footer();
