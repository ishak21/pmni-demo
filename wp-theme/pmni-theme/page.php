<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<article class="halaman">
  <?php while (have_posts()) : the_post(); ?>
    <header class="halaman-kepala">
      <h1><?php the_title(); ?></h1>
      <div class="seksyen-garis"></div>
    </header>
    <?php if (has_post_thumbnail()) : ?>
      <div class="halaman-imej"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <div class="halaman-isi"><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>

<?php get_footer();
