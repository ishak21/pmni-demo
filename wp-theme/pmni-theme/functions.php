<?php
/**
 * PMNI Theme — functions.php
 */

if (!defined('ABSPATH')) exit;

define('PMNI_VERSION', '1.0.0');

/* ------------------------------------------------------------------
 * Sokongan tema
 * ---------------------------------------------------------------- */
function pmni_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'utama' => __('Menu Utama', 'pmni'),
        'kaki'  => __('Menu Footer', 'pmni'),
    ]);

    // Saiz imej khusus
    add_image_size('pmni-berita', 800, 500, true);
    add_image_size('pmni-potret', 600, 600, true);
}
add_action('after_setup_theme', 'pmni_setup');

/* ------------------------------------------------------------------
 * Muatkan CSS & JS
 * ---------------------------------------------------------------- */
function pmni_assets() {
    // Font Google
    wp_enqueue_style(
        'pmni-fonts',
        'https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Tajawal:wght@300;400;500;700;800;900&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'pmni-fa',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [],
        '6.5.1'
    );

    // Gaya utama
    wp_enqueue_style('pmni-main', get_theme_file_uri('/assets/main.css'), [], PMNI_VERSION);
    wp_enqueue_style('pmni-style', get_stylesheet_uri(), ['pmni-main'], PMNI_VERSION);

    // JavaScript
    wp_enqueue_script('pmni-app', get_theme_file_uri('/assets/app.js'), [], PMNI_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'pmni_assets');

/* ------------------------------------------------------------------
 * Kawasan widget
 * ---------------------------------------------------------------- */
function pmni_widgets() {
    register_sidebar([
        'name'          => __('Sisi Kanan', 'pmni'),
        'id'            => 'sidebar-utama',
        'description'   => __('Dipaparkan di sisi halaman berita.', 'pmni'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-tajuk">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'pmni_widgets');

/* ------------------------------------------------------------------
 * Maklumat PMNI — boleh diubah dari Appearance > Customize
 * ---------------------------------------------------------------- */
function pmni_customizer($wp_customize) {
    $wp_customize->add_section('pmni_hubungi', [
        'title'    => __('Maklumat PMNI', 'pmni'),
        'priority' => 30,
    ]);

    $medan = [
        'pmni_telefon'   => ['Nombor Telefon', '011-5433 1448'],
        'pmni_telefon2'  => ['Nombor Telefon 2', '011-1294 9535'],
        'pmni_telefon3'  => ['Nombor Telefon 3', '017-724 9535'],
        'pmni_emel'      => ['E-mel', 'info@pmni.edu.my'],
        'pmni_alamat'    => ['Alamat', 'Jalan Rawang, Kampung Kuantan, 45600 Kuala Selangor, Selangor'],
        'pmni_waktu'     => ['Waktu Operasi', 'Isnin – Sabtu, 8:00 pagi – 10:00 malam'],
        'pmni_wa'        => ['Nombor WhatsApp (format 60...)', '60115433 1448'],
        'pmni_bank_nama' => ['Nama Bank', ''],
        'pmni_bank_akaun'=> ['Nombor Akaun', ''],
        'pmni_bank_pemegang' => ['Nama Pemegang Akaun', ''],
        'pmni_fb'        => ['Pautan Facebook', 'https://www.facebook.com/share/1EsJNTfjje/'],
        'pmni_ig'        => ['Pautan Instagram', 'https://www.instagram.com/pmnalisyraq'],
        'pmni_yt'        => ['Pautan YouTube', 'https://youtube.com/@pmnalisyraq'],
        'pmni_tiktok'    => ['Pautan TikTok', 'https://www.tiktok.com/@pmnalisyraq'],
        'pmni_telegram'  => ['Pautan Telegram', 'https://t.me/alisyraqtv'],
        'pmni_threads'   => ['Pautan Threads', 'https://www.threads.com/@pmnalisyraq'],
        'pmni_x'         => ['Pautan X', 'https://x.com/pmnalisyraq'],
    ];

    foreach ($medan as $id => $data) {
        $wp_customize->add_setting($id, [
            'default'           => $data[1],
            'sanitize_callback' => 'wp_kses_post',
        ]);
        $wp_customize->add_control($id, [
            'label'   => $data[0],
            'section' => 'pmni_hubungi',
            'type'    => 'text',
        ]);
    }
}
add_action('customize_register', 'pmni_customizer');

/** Pembantu untuk mengambil tetapan */
function pmni_get($key, $fallback = '') {
    return get_theme_mod($key, $fallback);
}

/* ------------------------------------------------------------------
 * Fallback menu jika belum ditetapkan
 * ---------------------------------------------------------------- */
function pmni_menu_fallback() {
    echo '<ul class="nav-senarai">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Utama</a></li>';
    wp_list_pages(['title_li' => '', 'depth' => 1, 'number' => 6]);
    echo '</ul>';
}

/* ------------------------------------------------------------------
 * Potong petikan berita
 * ---------------------------------------------------------------- */
function pmni_excerpt_length($length) { return 22; }
add_filter('excerpt_length', 'pmni_excerpt_length');

function pmni_excerpt_more($more) { return '&hellip;'; }
add_filter('excerpt_more', 'pmni_excerpt_more');

/* ------------------------------------------------------------------
 * Keselamatan asas
 * ---------------------------------------------------------------- */
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');

/** Sembunyikan sebab kegagalan log masuk (elak bocor maklumat) */
function pmni_login_error() { return __('Butiran log masuk tidak sah.', 'pmni'); }
add_filter('login_errors', 'pmni_login_error');
