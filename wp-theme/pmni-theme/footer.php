<?php if (!defined('ABSPATH')) exit; ?>
</main>
<footer role="contentinfo">
  <div class="footer-grid">
    <div>
      <h3 class="footer-col-title">Pautan Pantas</h3>
      <ul class="footer-pautan">
        <li><div class="icon-box"><i class="fa-solid fa-mosque"></i></div><a href="<?php echo esc_url(home_url('/profil/')); ?>">Profil &amp; Pentadbiran PMNI</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-book-quran"></i></div><a href="<?php echo esc_url(home_url('/akademik/')); ?>">Akademik &amp; Tarbiyah</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-building"></i></div><a href="<?php echo esc_url(home_url('/pembangunan/')); ?>">Pembangunan &amp; Infaq</a></li>
        <li><div class="icon-box"><i class="fa-solid fa-file-arrow-down"></i></div><a href="<?php echo esc_url(home_url('/muat-turun/')); ?>">Muat Turun Dokumen</a></li>
        <?php if ($u = pmni_get('pmni_yt')) : ?><li><div class="icon-box"><i class="fa-brands fa-youtube"></i></div><a href="<?php echo esc_url($u); ?>" target="_blank" rel="noopener">YouTube @pmnalisyraq</a></li><?php endif; ?>
        <?php if ($u = pmni_get('pmni_telegram')) : ?><li><div class="icon-box"><i class="fa-brands fa-telegram"></i></div><a href="<?php echo esc_url($u); ?>" target="_blank" rel="noopener">Telegram Al-Isyraq TV</a></li><?php endif; ?>
        <?php if ($u = pmni_get('pmni_wa_channel')) : ?><li><div class="icon-box"><i class="fa-brands fa-whatsapp"></i></div><a href="<?php echo esc_url($u); ?>" target="_blank" rel="noopener">WhatsApp Channel</a></li><?php endif; ?>
      </ul>
    </div>
    <div>
      <h3 class="footer-col-title">Hubungi Kami</h3>
      <ul class="footer-hubungi">
        <li><i class="fa-solid fa-location-dot"></i><span><?php echo esc_html(pmni_get('pmni_alamat')); ?></span></li>
        <li><i class="fa-solid fa-phone"></i><span class="tel-link">
          <?php echo esc_html(pmni_get('pmni_telefon')); ?> &middot; <?php echo esc_html(pmni_get('pmni_telefon2')); ?> &middot; <?php echo esc_html(pmni_get('pmni_telefon3')); ?><br>
          <a href="tel:<?php echo esc_attr(pmni_tel(pmni_get('pmni_telefon'))); ?>">Telefon</a> |
          <a href="https://wa.me/<?php echo esc_attr(pmni_wa()); ?>" target="_blank" rel="noopener">WhatsApp</a>
        </span></li>
        <li><i class="fa-regular fa-envelope"></i><a href="mailto:<?php echo esc_attr(pmni_get('pmni_emel')); ?>"><?php echo esc_html(pmni_get('pmni_emel')); ?></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div>
      <div class="footer-copy">Perhubungan Awam &amp; Media <?php echo date('Y'); ?> &copy;</div>
      <div class="footer-kemaskini">Kemaskini: <span id="tarikh-kemaskini"></span></div>
    </div>
    <div class="footer-sosmed">
      <?php
      $s = ['pmni_fb'=>['fa-brands fa-facebook-f','Facebook'],'pmni_ig'=>['fa-brands fa-instagram','Instagram'],
            'pmni_telegram'=>['fa-brands fa-telegram','Telegram'],'pmni_yt'=>['fa-brands fa-youtube','YouTube'],
            'pmni_tiktok'=>['fa-brands fa-tiktok','TikTok'],'pmni_threads'=>['fa-brands fa-threads','Threads'],
            'pmni_x'=>['fa-brands fa-x-twitter','X'],'pmni_wa_channel'=>['fa-brands fa-whatsapp','WhatsApp Channel']];
      foreach ($s as $k => $d) { $u = pmni_get($k); if (!$u) continue;
        printf('<a href="%s" target="_blank" rel="noopener" title="%s" aria-label="%s"><i class="%s"></i></a>',
          esc_url($u), esc_attr($d[1]), esc_attr($d[1]), esc_attr($d[0])); } ?>
    </div>
  </div>
</footer>

<a href="https://wa.me/<?php echo esc_attr(pmni_wa()); ?>?text=Assalamualaikum%2C%20saya%20ingin%20bertanya%20mengenai%20PMNI."
   target="_blank" rel="noopener" class="wa-float" title="WhatsApp PMNI" aria-label="Hubungi PMNI melalui WhatsApp">
  <i class="fa-brands fa-whatsapp"></i><span class="wa-dot"></span>
</a>
<?php wp_footer(); ?>
</body>
</html>
