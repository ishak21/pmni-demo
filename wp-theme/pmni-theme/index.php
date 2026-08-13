<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<section class="berita-seksyen">
  <h1 class="seksyen-tajuk"><?php
    if (is_home()) echo 'Berita &amp; Aktiviti';
    elseif (is_category()) single_cat_title('Kategori: ');
    elseif (is_search()) echo 'Hasil Carian: ' . get_search_query();
    else the_archive_title();
  ?></h1>
  <div class="seksyen-garis"></div>

  <?php if (have_posts()) : ?>
    <div class="berita-grid">
      <?php while (have_posts()) : the_post(); get_template_part('template-parts/kad-berita'); endwhile; ?>
    </div>
    <div class="pagination-wrap">
      <?php the_posts_pagination(['mid_size' => 2, 'prev_text' => '&laquo;', 'next_text' => '&raquo;']); ?>
    </div>
  <?php else : ?>
    <p class="tiada-kandungan">Tiada berita ditemui.</p>
  <?php endif; ?>
</section>

<?php get_footer();
