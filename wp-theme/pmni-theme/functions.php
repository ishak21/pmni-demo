<?php
/** PMNI Theme — functions.php */
if (!defined('ABSPATH')) exit;
define('PMNI_VERSION', '2.0.0');

/* ---------------- Sokongan tema ---------------- */
function pmni_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo', ['height'=>80,'width'=>240,'flex-height'=>true,'flex-width'=>true]);
    add_theme_support('responsive-embeds');
    register_nav_menus(['utama' => 'Menu Utama', 'kaki' => 'Menu Footer']);
    add_image_size('pmni-berita', 800, 500, true);
    add_image_size('pmni-potret', 600, 600, true);
}
add_action('after_setup_theme', 'pmni_setup');

/* ---------------- CSS & JS ---------------- */
function pmni_assets() {
    wp_enqueue_style('pmni-fonts','https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Tajawal:wght@400;500;700;800;900&display=swap',[],null);
    wp_enqueue_style('pmni-fa','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',[],'6.5.1');
    wp_enqueue_style('pmni-main', get_theme_file_uri('/assets/main.css'), [], PMNI_VERSION);
    wp_enqueue_style('pmni-style', get_stylesheet_uri(), ['pmni-main'], PMNI_VERSION);
    wp_enqueue_script('pmni-app', get_theme_file_uri('/assets/app.js'), [], PMNI_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'pmni_assets');

/* ---------------- Widget ---------------- */
function pmni_widgets() {
    register_sidebar([
        'name'=>'Sisi Kanan','id'=>'sidebar-utama',
        'before_widget'=>'<section id="%1$s" class="widget %2$s">','after_widget'=>'</section>',
        'before_title'=>'<h3 class="widget-tajuk">','after_title'=>'</h3>',
    ]);
}
add_action('widgets_init', 'pmni_widgets');

/* ---------------- Customizer ---------------- */
function pmni_customizer($wp_customize) {
    $wp_customize->add_section('pmni_hubungi', ['title'=>'Maklumat PMNI','priority'=>30]);

    $teks = [
        'pmni_telefon'       => ['Telefon 1', '011-5433 1448'],
        'pmni_telefon2'      => ['Telefon 2', '011-1294 9535'],
        'pmni_telefon3'      => ['Telefon 3', '017-724 9535'],
        'pmni_emel'          => ['E-mel', 'info@pmni.edu.my'],
        'pmni_alamat'        => ['Alamat', 'Jalan Rawang, Kampung Kuantan, 45600 Kuala Selangor, Selangor'],
        'pmni_waktu'         => ['Waktu Operasi', 'Isnin – Sabtu: 8:00pg – 10:00mlm'],
        'pmni_wa'            => ['WhatsApp (format 60xxx)', '601154331448'],
        'pmni_bank_nama'     => ['Nama Bank', ''],
        'pmni_bank_akaun'    => ['Nombor Akaun', ''],
        'pmni_bank_pemegang' => ['Nama Pemegang Akaun', ''],
        'pmni_stat_asatizah' => ['Statistik: Asatizah', '12'],
        'pmni_stat_pelajar'  => ['Statistik: Pelajar', '85'],
        'pmni_stat_juzuk'    => ['Statistik: Juzuk', '30'],
        'pmni_stat_tahun'    => ['Statistik: Tahun Beroperasi', '5'],
    ];
    foreach ($teks as $id => $d) {
        $wp_customize->add_setting($id, ['default'=>$d[1],'sanitize_callback'=>'sanitize_text_field']);
        $wp_customize->add_control($id, ['label'=>$d[0],'section'=>'pmni_hubungi','type'=>'text']);
    }

    $url = [
        'pmni_fb'         => ['Facebook', 'https://www.facebook.com/share/1EsJNTfjje/'],
        'pmni_ig'         => ['Instagram', 'https://www.instagram.com/pmnalisyraq'],
        'pmni_yt'         => ['YouTube', 'https://youtube.com/@pmnalisyraq'],
        'pmni_tiktok'     => ['TikTok', 'https://www.tiktok.com/@pmnalisyraq'],
        'pmni_telegram'   => ['Telegram', 'https://t.me/alisyraqtv'],
        'pmni_threads'    => ['Threads', 'https://www.threads.com/@pmnalisyraq'],
        'pmni_x'          => ['X (Twitter)', 'https://x.com/pmnalisyraq'],
        'pmni_wa_channel' => ['WhatsApp Channel', 'https://whatsapp.com/channel/0029VajaK8T9RZAOM6tCRd0i'],
        'pmni_maps_pautan'=> ['Pautan Google Maps', 'https://maps.google.com/?q=Jalan+Rawang+Kampung+Kuantan+45600+Kuala+Selangor'],
    ];
    foreach ($url as $id => $d) {
        $wp_customize->add_setting($id, ['default'=>$d[1],'sanitize_callback'=>'esc_url_raw']);
        $wp_customize->add_control($id, ['label'=>$d[0],'section'=>'pmni_hubungi','type'=>'url']);
    }

    // Kod embed peta (iframe penuh dari Google Maps > Share > Embed)
    $wp_customize->add_setting('pmni_maps_embed', ['default'=>'','sanitize_callback'=>'wp_kses_post']);
    $wp_customize->add_control('pmni_maps_embed', [
        'label'=>'Kod Embed Google Maps (iframe)','section'=>'pmni_hubungi','type'=>'textarea',
        'description'=>'Google Maps > Share > Embed a map > salin kod iframe penuh.',
    ]);

    // Gambar: QR DuitNow & latar hero
    foreach ([['pmni_qr_duitnow','Kod QR DuitNow'],['pmni_hero_bg','Gambar Latar Hero']] as $g) {
        $wp_customize->add_setting($g[0], ['default'=>'','sanitize_callback'=>'esc_url_raw']);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $g[0], [
            'label'=>$g[1],'section'=>'pmni_hubungi',
        ]));
    }
}
add_action('customize_register', 'pmni_customizer');

/* ---------------- Pembantu ---------------- */
function pmni_get($key, $fallback = '') { return get_theme_mod($key, $fallback); }

/** Nombor telefon untuk pautan tel: */
function pmni_tel($nombor) { return preg_replace('/\D/', '', $nombor); }

/** Nombor WhatsApp format antarabangsa */
function pmni_wa() {
    $w = preg_replace('/\D/', '', pmni_get('pmni_wa'));
    if ($w) return $w;
    $t = preg_replace('/\D/', '', pmni_get('pmni_telefon'));
    return $t && $t[0] === '0' ? '6' . $t : $t;
}

/** Latar hero — guna muat naik admin, jika tiada guna gradien hijau */
function pmni_hero_bg() {
    $img = pmni_get('pmni_hero_bg');
    if ($img) return $img;
    return get_theme_file_uri('/imej/hero/hero-pmni.jpg');
}

/* ---------------- Menu fallback ---------------- */
function pmni_menu_fallback() {
    echo '<ul class="nav-menu" id="navMenu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Utama</a></li>';
    wp_list_pages(['title_li'=>'','depth'=>1,'number'=>6]);
    echo '</ul>';
}

/** Tambah kelas khas pada item menu E-Pendaftaran */
function pmni_menu_class($classes, $item) {
    if (stripos($item->title, 'pendaftaran') !== false) $classes[] = 'menu-item-epend';
    return $classes;
}
add_filter('nav_menu_css_class', 'pmni_menu_class', 10, 2);

/* ---------------- Lain-lain ---------------- */
add_filter('excerpt_length', function () { return 22; });
add_filter('excerpt_more', function () { return '&hellip;'; });
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');
add_filter('login_errors', function () { return 'Butiran log masuk tidak sah.'; });
