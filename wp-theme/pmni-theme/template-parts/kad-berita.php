<?php if (!defined('ABSPATH')) exit; ?>
<article class="berita-kad">
  <a class="bk-imej" href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) the_post_thumbnail('pmni-berita'); ?>
    <?php $kat = get_the_category(); if ($kat) : ?>
      <span class="bk-kategori"><?php echo esc_html($kat[0]->name); ?></span>
    <?php endif; ?>
  </a>
  <div class="bk-isi">
    <h3 class="bk-tajuk"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="bk-meta">
      <span><i class="fa-regular fa-user"></i> <?php the_author(); ?></span>
      <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></span>
      <span><i class="fa-regular fa-clock"></i> <?php echo get_the_time('g:i a'); ?></span>
    </div>
  </div>
</article>
