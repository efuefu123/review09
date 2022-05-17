<?php
/**
* Template Name: news
*/
get_header(); ?>

<main>
  <section class="p-news">
    <div class="p-news__mv c-lower-mv wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="1s">
      <figure class="p-news__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-news-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/news/news-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news-mv.jpg' ); ?>"
            alt="アドネス株式会社ニュースメインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">ニュース<br /><span class="c-lower-mv__subtitle">News</span></h1>
    </div>
    <div class="p-news__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <section class="p-news__content l-inner">
        <div class="p-news__category news-category wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
          <p class="p-news-category__text u-hidden-tab">種別：</p>
          <div class="p-news-category__kind-wrapper">
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">全て</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">未分類</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">media</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">infonews</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">プレスリリース</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">イベント</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">サービス資料</p>
            </div>
            <div class="p-news-category__kind">
              <p class="p-news-category__kind-text">ホワイトペーパー</p>
            </div>
          </div>
        </div>
        <div class="p-news__group-wrapper wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
          <div class="p-news__group">
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_01.jpg' ); ?>" alt="ニュース画像1" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_01.jpg' ); ?>" alt="ニュース画像1" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">イベント</div>
                </div>
                <p class="p-news-card__text">
                  これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_02.jpg' ); ?>" alt="ニュース画像2" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_02.jpg' ); ?>" alt="ニュース画像2" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">プレスリリース</div>
                </div>
                <p class="p-news-card__text">
                  これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_03.jpg' ); ?>" alt="ニュース画像3" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_03.jpg' ); ?>" alt="ニュース画像3" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">media</div>
                </div>
                <p class="p-news-card__text">
                  これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_04.jpg' ); ?>" alt="ニュース画像4" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_04.jpg' ); ?>" alt="ニュース画像4" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">サービス資料</div>
                </div>
                <p class="p-news-card__text">
                  これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_05.jpg' ); ?>" alt="ニュース画像5" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_05.jpg' ); ?>" alt="ニュース画像5" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">infonews</div>
                </div>
                <p class="p-news-card__text">
                  これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
            <a class="p-news__card p-news-card">
              <figure class="p-news-card__image-wrapper">
                <img class="p-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_06.jpg' ); ?>" alt="ニュース画像6" />
                <img class="p-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_06.jpg' ); ?>" alt="ニュース画像6" />
              </figure>
              <div class="p-news-card__body">
                <div class="p-news-card__meta">
                  <time class="p-news-card__date">2022.01.19</time>
                  <div class="p-news-card__category">ホワイトペーパー</div>
                </div>
                <p class="p-news-card__text">これはテキストです。コレはテキストです。これはテキストです。これはテキストです。これはテキストです。</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-news__pageNation-wrapper">
          <div class="p-news__pageNation">1</div>
          <div class="p-news__pageNation">2</div>
          <div class="p-news__pageNation">3</div>
          <div class="p-news__pageNation">...</div>
          <div class="p-news__pageNation">10</div>
          <div class="p-news__pageNation">＞</div>
        </div>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>

    <?php get_footer(); ?>