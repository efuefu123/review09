<?php
/**
* Template Name: news-article
*/
get_header(); ?>

<main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section class="p-news-article">
    <div class="p-news-article__mv c-lower-mv fade-in">
      <figure class="p-news-article__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-news-article-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/news/news-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news-mv.jpg' ); ?>"
            alt="アドネス株式会社ニュース記事メインビュー" />
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
        <h2 class="p-news-article__title"><?php the_title();?></h2>
        <p class="p-news-article__text">
          <?php the_content();?>
        </p>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>