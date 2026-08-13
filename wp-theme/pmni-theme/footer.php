<?php if (!defined('ABSPATH')) exit; ?>
</main><!-- #kandungan -->

<footer class="footer">
  <div class="container footer-grid">

    <div class="footer-kolum">
      <div class="footer-logo">
        <div class="logo-arab">نور الإشراق</div>
        <div class="logo-rumi">Pondok Moden Nurul Isyraq</div>
      </div>
      <p class="footer-slogan">Adab Di Atas Ilmu</p>
      <p class="footer-moto">&ldquo;Ke Arah Melahirkan Ilmuan Islam Berprestasi Tinggi&rdquo;</p>
    </div>

    <div class="footer-kolum">
      <h4>Pautan Pantas</h4>
      <?php
      wp_nav_menu([
          'theme_location' => 'kaki',
          'container'      => false,
          'menu_class'     => 'footer-senarai',
          'fallback_cb'    => function () {
              echo '<ul class="footer-senarai">';
              wp_list_pages(['title_li' => '', 'depth' => 1, 'number' => 6]);
              echo '</ul>';
          },
          'depth'          => 1,
      ]);
      ?>
    </div>

    <div class="footer-kolum">
      <h4>Hubungi Kami</h4>
      <ul class="footer-hubungi">
        <li><i class="fa-solid fa-location-dot"></i> <?php echo esc_html(pmni_get('pmni_alamat')); ?></li>
        <?php foreach (['pmni_telefon', 'pmni_telefon2', 'pmni_telefon3'] as $t) :
            $nombor = pmni_get($t);
            if (!$nombor) continue; ?>
          <li><i class="fa-solid fa-phone"></i>
            <a href="tel:<?php echo esc_attr(preg_replace('/\D/', '', $nombor)); ?>"><?php echo esc_html($nombor); ?></a>
          </li>
        <?php endforeach; ?>
        <li><i class="fa-regular fa-envelope"></i>
          <a href="mailto:<?php echo esc_attr(pmni_get('pmni_emel')); ?>"><?php echo esc_html(pmni_get('pmni_emel')); ?></a>
        </li>
      </ul>
    </div>

    <div class="footer-kolum">
      <h4>Ikuti Kami</h4>
      <div class="footer-sosial">
        <?php
        $sosial = [
            'pmni_fb'       => ['fa-brands fa-facebook-f', 'Facebook'],
            'pmni_ig'       => ['fa-brands fa-instagram', 'Instagram'],
            'pmni_yt'       => ['fa-brands fa-youtube', 'YouTube'],
            'pmni_tiktok'   => ['fa-brands fa-tiktok', 'TikTok'],
            'pmni_telegram' => ['fa-brands fa-telegram', 'Telegram'],
            'pmni_threads'  => ['fa-brands fa-threads', 'Threads'],
            'pmni_x'        => ['fa-brands fa-x-twitter', 'X'],
        ];
        foreach ($sosial as $key => $data) :
            $url = pmni_get($key);
            if (!$url) continue; ?>
          <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener"
             aria-label="<?php echo esc_attr($data[1]); ?>">
            <i class="<?php echo esc_attr($data[0]); ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>

  <div class="footer-bawah">
    <div class="container">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Hak cipta terpelihara.
    </div>
  </div>
</footer>

<?php $wa = preg_replace('/\D/', '', pmni_get('pmni_wa')); ?>
<?php if ($wa) : ?>
<a class="wa-float" href="https://wa.me/<?php echo esc_attr($wa); ?>"
   target="_blank" rel="noopener" aria-label="Hubungi kami melalui WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
</a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
