<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#kandungan">Langkau ke kandungan</a>

<!-- BAR ATAS -->
<div class="topbar">
  <div class="container topbar-isi">
    <span><i class="fa-regular fa-clock"></i> <?php echo esc_html(pmni_get('pmni_waktu')); ?></span>
    <span class="topbar-kanan">
      <a href="tel:<?php echo esc_attr(preg_replace('/\D/', '', pmni_get('pmni_telefon'))); ?>">
        <i class="fa-solid fa-phone"></i> <?php echo esc_html(pmni_get('pmni_telefon')); ?>
      </a>
      <a href="mailto:<?php echo esc_attr(pmni_get('pmni_emel')); ?>">
        <i class="fa-regular fa-envelope"></i> <?php echo esc_html(pmni_get('pmni_emel')); ?>
      </a>
    </span>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi utama">
  <div class="container">

    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <div class="logo-box">
          <div class="logo-arab">نور الإشراق</div>
          <div class="logo-rumi">Pondok Moden<br>Nurul Isyraq</div>
        </div>
      <?php endif; ?>
    </a>

    <button class="hamburger" id="hamburgerBtn" aria-label="Buka menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <?php
    wp_nav_menu([
        'theme_location' => 'utama',
        'container'      => false,
        'menu_class'     => 'nav-menu',
        'menu_id'        => 'navMenu',
        'fallback_cb'    => 'pmni_menu_fallback',
        'depth'          => 2,
    ]);
    ?>

  </div>
</nav>

<main id="kandungan">
