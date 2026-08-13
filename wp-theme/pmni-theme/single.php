<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<article class="artikel">
  <?php while (have_posts()) : the_post(); ?>
    <header class="artikel-kepala">
      <?php $kat = get_the_category(); if ($kat) : ?>
        <span class="bk-kategori-inline"><?php echo esc_html($kat[0]->name); ?></span>
      <?php endif; ?>
      <h1><?php the_title(); ?></h1>
      <div class="artikel-meta">
        <span><i class="fa-regular fa-user"></i> <?php the_author(); ?></span>
        <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></span>
        <span><i class="fa-regular fa-clock"></i> <?php echo get_the_time('g:i a'); ?></span>
      </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
      <div class="artikel-imej"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>

    <div class="artikel-isi"><?php the_content(); ?></div>

    <nav class="artikel-nav">
      <?php previous_post_link('%link', '&laquo; %title'); ?>
      <?php next_post_link('%link', '%title &raquo;'); ?>
    </nav>
  <?php endwhile; ?>
</article>

<?php get_footer();
