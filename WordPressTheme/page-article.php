<?php
/**
* Template Name: article
*/
get_header(); ?>
<main>
  <section class="p-news-article">
    <div class="p-news-article__mv c-lower-mv fade-in">
      <figure class="p-news-article__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-news-article-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/news/news-mv.jpg' ); ?>" media=" (min-width:
            768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news-mv.jpg' ); ?>" alt="
            アドネス株式会社ニュース記事メインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">ニュース<br /><span class="c-lower-mv__subtitle">News</span></h1>
    </div>
    <div class="p-news-article__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <section class="p-news-article__content l-inner">
        <p class="p-news-article__title">これは記事のタイトルです。</p>
        <p class="p-news-article__text">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br /><br />この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br /><br />文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
        </p>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>


    <?php get_footer(); ?>