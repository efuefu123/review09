<footer class="l-footer fade-in">
  <div class="l-footer_container l-inner">
    <div class="l-footer__top">
      <figure class="l-footer__logo-wrapper">
        <a class="l-footer__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <picture class=" l-footer__logo-image">
            <source srcset="<?php echo get_theme_file_uri( '/assets/images/common/footer-logo.svg' ); ?>"
              media="(min-width: 400px)" />
            <img src="<?php echo get_theme_file_uri( '/assets/images/common/footer-logo.svg' ); ?>" alt="アドネス株式会社ロゴ" />
          </picture>
        </a>
      </figure>
      <div class="l-footer__snsIcon-wrapper">
        <a class="l-footer__snsIcon"><img
            src="<?php echo get_theme_file_uri( '/assets/images/common/footer-icon-youtube.png' ); ?>"
            alt="YouTube" /></a>
        <a class="l-footer__snsIcon" href="https://twitter.com/mikami_01" target=”_blank” rel=”noopener”><img
            src=" <?php echo get_theme_file_uri( '/assets/images/common/footer-icon-twitter.png' ); ?>"
            alt="Twitter" /></a>
        <a class="l-footer__snsIcon"><img
            src="<?php echo get_theme_file_uri( '/assets/images/common/footer-icon-facebook.png' ); ?>"
            alt="Facebook" /></a>
      </div>
    </div>
    <div class="l-footer__bottom">
      <div class="l-footer__menu-wrapper">
        <div class="l-footer__menu">
          <div class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/company">会社概要</a></div>
          <span class="l-footer__nav-bar"></span>
          <div class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/service">サービス</a></div>
          <span class="l-footer__nav-bar"></span>
          <div class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news">ニュース</a></div>
          <span class="l-footer__nav-bar"></span>
          <div class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/case">導入事例</a></div>
          <div class="u-hidden-tab u-br u-newline"></div>
          <div class="l-footer__nav-item"><a
              href="<?php echo esc_url( home_url( '/' ) ); ?>/privacy-policy">プライバシーポリシー</a></div>
        </div>
      </div>
      <div class="l-footer__contact-wrapper">
        <a class="l-footer__contact-item"
          href="https://test.anby-webpartner.net//wp-content/uploads/2022/04/アドネス会社案内資料.pdf"
          download="アドネス会社案内資料.pdf"><img
            src="<?php echo get_theme_file_uri( '/assets/images/common/footer-icon-document-request.png' ); ?>"
            alt="資料請求" />資料ダウンロード</a>
        <a class="l-footer__contact-item" href="tel:050-1541-0722"><img
            src="<?php echo get_theme_file_uri( '/assets/images/common/footer-icon-tel.png' ); ?>"
            alt="電話番号" />050-1541-0722</a>
        <a class="l-footer__contact-item" href="<?php echo esc_url( home_url( '/' ) ); ?>/contact"><img
            src="<?php echo get_theme_file_uri( '/assets/images/common/footer-icon-contact.png' ); ?>"
            alt="お問い合わせ" />お問い合わせ</a>
      </div>
    </div>
    <div class="l-footer__copyright">
      <p>© 2021 AddNess</p>
    </div>
  </div>
</footer>
</section>
</main>
<?php wp_footer(); ?>
</div>
</body>

</html>