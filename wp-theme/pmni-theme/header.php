<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#kandungan">Langkau ke kandungan</a>

<!-- TOP BAR -->
<div class="top-bar">
  <div class="container">
    <div class="top-bar-item"><i class="fa-regular fa-clock"></i><span><?php echo esc_html(pmni_get('pmni_waktu')); ?></span></div>
    <div class="top-bar-item"><i class="fa-solid fa-phone"></i>
      <a href="tel:<?php echo esc_attr(pmni_tel(pmni_get('pmni_telefon'))); ?>"><?php echo esc_html(pmni_get('pmni_telefon')); ?></a>
    </div>
    <div class="top-bar-item"><i class="fa-regular fa-envelope"></i>
      <a href="mailto:<?php echo esc_attr(pmni_get('pmni_emel')); ?>"><?php echo esc_html(pmni_get('pmni_emel')); ?></a>
    </div>
    <div class="top-bar-item"><i class="fa-solid fa-location-dot"></i>
      <a href="<?php echo esc_url(pmni_get('pmni_maps_pautan')); ?>" target="_blank" rel="noopener"><?php echo esc_html(pmni_get('pmni_alamat')); ?></a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi utama">
  <div class="container">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Halaman Utama PMNI">
      <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
        <div class="logo-box">
          <div class="logo-arab">&#1606;&#1608;&#1585; &#1575;&#1604;&#1573;&#1588;&#1585;&#1575;&#1602;</div>
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
