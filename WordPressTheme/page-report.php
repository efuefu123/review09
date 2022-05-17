<?php
/**
* Template Name: report
*/
get_header(); ?>
<main>
  <section class="p-report">
    <div class="p-report__mv c-lower-mv fade-in">
      <figure class="p-report__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-report-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/company/company-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/company/sp-company-mv.jpg' ); ?>"
            alt="アドネス株式会社資料請求メインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">資料請求<br /><span class="c-lower-mv__subtitle">Report</span></h1>
    </div>
    <div class="p-report__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <section class="p-report__content l-inner">
        <p class="p-report__title">これは記事のタイトルです。</p>
        <p class="p-report__text">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br /><br />この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br /><br />文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
        </p>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>


    <?php get_footer(); ?>