<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<section class="ralat-404">
  <h1>404</h1>
  <p>Maaf, halaman yang anda cari tidak dijumpai.</p>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Kembali ke Utama</a>
</section>
<?php get_footer();
