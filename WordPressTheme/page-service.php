<?php
/**
* Template Name: service
*/
get_header(); ?>

<main>
  <section class="p-service">
    <div class="p-service__mv c-lower-mv fade-in">
      <figure class="p-service__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-service-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/service/service-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/service/sp-service-mv.jpg' ); ?>"
            alt="アドネス株式会社サービスメインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">サービス<br /><span class="c-lower-mv__subtitle">Service</span></h1>
    </div>
    <div class="p-service__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <div class="p-service__content l-inner">
        <div class="p-service__title-wrapper">
          <p class="p-service__title">Policy</p>
          <p class="p-service__lead">
            <span class="js-border-yellow">
              <span class="u-appear-tab">「&nbsp;</span>全てのお客様に<br class="u-hidden-tab" />最適なSNS戦略を<span
                class="u-appear-tab">&nbsp;」</span></span>
          </p>
        </div>
        <div class="p-service__banner-wrapper u-appear-tab--flex fade-up">
          <a class="p-service-banner" href="#service01">
            <p class="p-service-banner__title">
              <!-- カスタムフィールド サービス01概要−タイトル -->
              <?php if( get_field('service01_summary_title') ) { ?>
              <?php the_field('service01_summary_title'); ?>
              <?php } ?>
            </p>
            <!-- <p class="p-service-banner__title">SNSマーケティング支援事業</p> -->
            <p class="p-service-banner__lead">
              <!-- カスタムフィールド サービス01概要−内容 -->
              <?php if( get_field('service01_summary_content') ) { ?>
              <?php the_field('service01_summary_content'); ?>
              <?php } ?>
            </p>
            <!-- <p class="p-service-banner__lead"> SNSマーケティングを教える<br class="u-appear-tab">オンラインコミュニティ </p> -->
          </a>
          <a class="p-service-banner" href="#service02">
            <!-- <p class="p-service-banner__title">SNS人材育成事業</p>
            <p class="p-service-banner__lead"> SNSマーケティングに強い<br class="u-appear-tab">人材の育成 </p> -->
            <p class="p-service-banner__title">
              <!-- カスタムフィールド サービス02概要−タイトル -->
              <?php if( get_field('service02_summary_title') ) { ?>
              <?php the_field('service02_summary_title'); ?>
              <?php } ?>
            </p>
            <p class="p-service-banner__lead">
              <!-- カスタムフィールド サービス02概要−内容 -->
              <?php if( get_field('service02_summary_content') ) { ?>
              <?php the_field('service02_summary_content'); ?>
              <?php } ?>
            </p>
          </a>
        </div>
        <div class="p-service__detail p-service-detail fade-up">
          <div id="service01" class="p-service-detail__area">
            <div class="p-service-detail__content">
              <h2 class="p-service-detail__subtitle">
                <!-- カスタムフィールド サービス01詳細−タイトル -->
                <?php if( get_field('service01_detail_title') ) { ?>
                <?php the_field('service01_detail_title'); ?>
                <?php } ?>
              </h2>
              <p class="p-service-detail__title">
                <!-- カスタムフィールド サービス01詳細−サブタイトル -->
                <?php if( get_field('service01_detail_subtitle') ) { ?>
                <?php the_field('service01_detail_subtitle'); ?>
                <?php } ?>
              </p>
              <p class="p-service-detail__description">
                <!-- カスタムフィールド サービス01詳細−内容 -->
                <?php if( get_field('service01_detail_content') ) { ?>
                <?php the_field('service01_detail_content'); ?>
                <?php } ?>
              </p>
              <!-- <h2 class="p-service-detail__subtitle">SNSマーケティング支援事業</h2>
              <p class="p-service-detail__title">センサーズ for Business</p>
              <p class="p-service-detail__description"> 企業のニーズに合ったSNS戦略を徹底サポートいたします。</p>-->
              <div class="p-service-detail__links-wrapper01 u-hidden-tab">
                <p class="p-service-detail__description p-service-detail__description01">導入事例はこちらからご覧下さい。</p>
                <div class="p-service-detail__link-wrapper p-service-detail__link-wrapper01 c-util-link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case"
                    class="p-service-detail__link c-util-link__link">
                    <p class="p-service-detail__link-text">導入事例</p>
                    <span class="p-service-detail__link-arrow"></span>
                  </a>
                </div>
                <p class="p-service-detail__description p-service-detail__description02">センサーズ for businessを詳しく見たい方はこちら。
                </p>
                <div class="p-service-detail__link-wrapper p-service-detail__link-wrapper02 c-util-link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-service-detail__link c-util-link__link">
                    <p class="p-service-detail__link-text">センサーズ</p>
                    <span class="p-service-detail__link-arrow"></span>
                  </a>
                </div>
              </div>
              <div class="p-service-detail__links-wrapper02 u-appear-tab--flex">
                <div class="p-service-detail__link-wrapper">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case" class="p-service-detail__link">
                    <p class="p-service-detail__link-text--pc">導入事例はこちら</p>
                  </a>
                </div>
                <div class="p-service-detail__link-wrapper">
                  <a href="https://test.anby-webpartner.net/wp-content/uploads/2022/04/アドネス会社案内資料.pdf"
                    download="アドネス会社案内資料.pdf" class="p-service-detail__link">
                    <p class="p-service-detail__link-text--pc">センサーズ for Businessの詳細はこちら</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="service02" class="p-service-detail__area">
            <div class="p-service-detail__content">
              <h2 class="p-service-detail__subtitle">
                <!-- カスタムフィールド サービス02詳細−タイトル -->
                <?php if( get_field('service02_detail_title') ) { ?>
                <?php the_field('service02_detail_title'); ?>
                <?php } ?>
              </h2>
              <p class="p-service-detail__title">
                <!-- カスタムフィールド サービス02詳細−サブタイトル -->
                <?php if( get_field('service02_detail_subtitle') ) { ?>
                <?php the_field('service02_detail_subtitle'); ?>
                <?php } ?>
              </p>
              <p class="p-service-detail__description">
                <!-- カスタムフィールド サービス02詳細−内容 -->
                <?php if( get_field('service02_detail_content') ) { ?>
                <?php the_field('service02_detail_content'); ?>
                <?php } ?>
              </p>
              <!-- <h2 class="p-service-detail__subtitle">SNS人材育成事業</h2>
              <p class="p-service-detail__title">SNSプランナー養成講座</p>
              <p class="p-service-detail__description">企業のSNSアカウント運用から、SNSに最適化された販売導線の構築までできる人材を育成するサービスです。</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>

    <?php get_footer(); ?>