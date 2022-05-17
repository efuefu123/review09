<?php
/**
* Template Name: news
*/
get_header(); ?>

<main>
  <section class="p-news">
    <div class="p-news__mv c-lower-mv fade-in">
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
        <div class="p-news__category news-category fade-up">
          <p class="p-news-category__text u-hidden-tab">種別：</p>
          <div class="p-news-category__kind-wrapper">
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text"
                href="<?php echo esc_url( get_post_type_archive_link( 'news' )); ?>">全て</a>
            </div>
            <?php
            $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
            foreach ( $genre_terms as $genre_term ) :
            ?>
            <?php
              $term = get_queried_object();
              $term_slug = $term -> slug;
              ?>
            <div class="p-news-category__kind <?php
              if( $term_slug == esc_html( $genre_term->slug )) {
              echo "is-active";
              } ?>">
              <a class="p-news-category__kind-text"
                href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
            </div>
            <?php endforeach; ?>
            <!-- <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">未分類</a>
            </div> -->
            <!-- <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">media</a>
            </div>
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">infonews</a>
            </div>
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">プレスリリース</a>
            </div>
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">イベント</a>
            </div>
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">サービス資料</a>
            </div>
            <div class="p-news-category__kind">
              <a class="p-news-category__kind-text">ホワイトペーパー</a>
            </div> -->
          </div>
        </div>
        <div class="p-news__group-wrapper fade-up">
          <ul class="p-news__group">
            <!-- ループ開始 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="p-news__item">
              <a class="p-news__card p-news-card" href="<?php the_permalink(); ?>">
                <figure class="p-news-card__image-wrapper">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-news-card__image','alt' => the_title_attribute('echo=0'))); ?>
                  <!-- <img class="p-news-card__image u-hidden-tab"
                    src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_01.jpg' ); ?>" alt="ニュース画像1" />
                  <img class="p-news-card__image u-appear-tab"
                    src="<?php echo get_theme_file_uri( '/assets/images/news/news_01.jpg' ); ?>" alt="ニュース画像1" /> -->
                </figure>
                <div class="p-news-card__body">
                  <div class="p-news-card__meta">
                    <time class="p-news-card__date"
                      datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d');?></time>
                    <div class="p-news-card__category"><?php
                    $terms = get_the_terms($post->ID, 'genre');
                    if ( $terms ) {
                      echo $terms[0]->name;
                    }  elseif (empty($terms[0]->name)) {
                      echo '未分類';
                    }
                    ?></div>
                  </div>
                  <p class="p-news-card__text">
                    <?php if(mb_strlen($post->post_content, 'UTF-8')>50){
                    $content= mb_substr($post->post_content, 0, 50, 'UTF-8');
                    echo $content.'...';
                    }else{
                      echo $post->post_content;
                    }
                  ?></p>
                </div>
              </a>
              <!-- <a class="p-news__card p-news-card">
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
              </a> -->
            </li>
            <?php endwhile; ?> <?php endif; ?>
          </ul>
        </div>
        <?php wp_pagenavi(); ?>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>

    <?php get_footer(); ?>