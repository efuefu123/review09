<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="robots" content="all" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta情報 -->
  <!-- <title>アドネス株式会社</title> -->
  <meta name="description"
    content="SNSに関するマーケティングやコンサルティング、運営代行、人材育成を中心とした事業を行っています。理念である「世界を巻き込むwell-beingの実現」に向けて、邁進していきます。" />
  <meta name="keywords" content="SNS,マーケティング,コンサルティング,センサーズ" />
  <!-- ogp -->
  <meta property="og:title" content="アドネス株式会社ホームページ" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image"
    content="<?php echo get_theme_file_uri( '/assets/images/common/ogp-company-logo.png' ); ?>" />
  <meta property=" og:site_name" content="アドネス株式会社" />
  <meta property="og:description"
    content="SNSに関するマーケティングやコンサルティング、運営代行、人材育成を中心とした事業を行っています。理念である「世界を巻き込むwell-beingの実現」に向けて、邁進していきます。" />
  <meta name="twitter:card" content="summary" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri( '/assets/images/favicon.ico' ); ?>" />
  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="site-wrapper">
    <header class=" l-header fade-in">
      <div class="l-header__container">
        <div class="l-header__content">
          <!-- ロゴ -->
          <div class="l-header__content-left">
            <figure class="l-header__logo-wrapper">
              <div class="l-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <picture class="l-header__logo-image">
                    <source srcset="<?php echo get_theme_file_uri( '/assets/images/common/logo.svg' ); ?>" />
                    <img src="<?php echo get_theme_file_uri( '/assets/images/common/logo.png' ); ?>" alt="アドネス株式会社ロゴ" />
                  </picture>
                </a>
              </div>
            </figure>
          </div>
          <!-- ナビ -->
          <div class="l-header__content-center">
            <div class="l-header__nav">
              <div class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/company">会社概要</a>
              </div>
              <div class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/service">サービス</a>
              </div>
              <div class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news">ニュース</a></div>
              <div class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/case">導入事例</a></div>
            </div>
          </div>
          <!-- 資料請求・お問い合わせ -->
          <div class="l-header__content-right">
            <a class="l-header__document-request c-header-document-request"
              href="https://test.anby-webpartner.net/wp-content/uploads/2022/04/アドネス会社案内資料.pdf"
              download="アドネス会社案内資料.pdf">
              <div class=" c-header-document-request__icon-wrapper">
                <img class="c-header-document-request__icon"
                  src="<?php echo get_theme_file_uri( '/assets/images/common/header-icon-document-request.png' ); ?>"
                  alt="資料請求のロゴ" />
              </div>
              <p class="c-header-document-request__text">資料請求</p>
            </a>
            <a class="l-header__contact c-header-contact l-header-contact-bgleft"
              href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">
              <div class=" c-header-contact__icon-wrapper">
                <span class="l-header-contact__bg">
                  <img class="c-header-contact__icon"
                    src="<?php echo get_theme_file_uri( '/assets/images/common/header-icon-contact.png' ); ?>"
                    alt="お問い合わせのロゴ" />
                </span>
              </div>
              <p class="c-header-contact__text">お問<span class="u-appear-tab">い</span>合<span
                  class="u-appear-tab">わ</span>せ
              </p>
            </a>
            <div class="l-header-drawer__icon c-drawer-icon">
              <div class="c-drawer-icon__bars">
                <div class="c-drawer-icon__bar1"></div>
                <div class="c-drawer-icon__bar2"></div>
                <div class="c-drawer-icon__bar3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="c-drawer-menu-overlay"></div>


    <div class="c-drawer-menu">
      <div class="c-drawer-menu__container">
        <div class="l-header-drawer__icon  c-drawer-menu__icon">
          <div class="c-drawer-icon__bars">
            <div class="c-drawer-icon__bar1"></div>
            <div class="c-drawer-icon__bar2"></div>
            <div class="c-drawer-icon__bar3"></div>
          </div>
        </div>
        <p class="c-drawer-menu__title">Menu</p>
        <ul class="c-drawer-menu__items">
          <li class="c-drawer-menu__item">
            <a class="c-drawer-menu__item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/company">
              <div class="c-drawer-menu__item-title">
                <p class="c-drawer-menu__item-ja">会社概要</p>
                <p class="c-drawer-menu__item-en">Company info</p>
              </div>
              <div class="c-drawer-menu__item-arrow"></div>
            </a>
          </li>
          <li class="c-drawer-menu__item">
            <a class="c-drawer-menu__item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/service">
              <div class="c-drawer-menu__item-title">
                <p class="c-drawer-menu__item-ja">サービス</p>
                <p class="c-drawer-menu__item-en">Service</p>
              </div>
              <div class="c-drawer-menu__item-arrow"></div>
            </a>
          </li>
          <li class="c-drawer-menu__item">
            <a class="c-drawer-menu__item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/news">
              <div class="c-drawer-menu__item-title">
                <p class="c-drawer-menu__item-ja">ニュース</p>
                <p class="c-drawer-menu__item-en">News</p>
              </div>
              <div class="c-drawer-menu__item-arrow"></div>
            </a>
          </li>
          <li class="c-drawer-menu__item">
            <a class="c-drawer-menu__item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/case">
              <div class="c-drawer-menu__item-title">
                <p class="c-drawer-menu__item-ja">導入事例</p>
                <p class="c-drawer-menu__item-en">Case</p>
              </div>
              <div class="c-drawer-menu__item-arrow"></div>
            </a>
          </li>
        </ul>
        <div class="c-drawer-menu__button-wrapper">
          <a href="https://test.anby-webpartner.net/wp-content/uploads/2022/04/アドネス会社案内資料.pdf" download="アドネス会社案内資料.pdf"
            class="c-drawer-menu__button">会社案内の資料を請求する</a>
        </div>
      </div>
    </div>