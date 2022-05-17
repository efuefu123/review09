<?php get_header(); ?>

<main>
  <section class="p-top">
    <section class="p-top-mv p-top__mv">
      <div class="p-top-mv__container">
        <h1 class="p-top-mv__title">アドネス株式会社_SNSで世界を拓く
        </h1>
        <figure class="p-top-mv__image-container fade-in">
          <picture class="p-top-mv__image">
            <source srcset="<?php echo get_theme_file_uri( '/assets/images/top/top-mv.jpg' ); ?>"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri( '/assets/images/top/sp-top-mv.jpg' ); ?>"
              alt="アドネス株式会社メインビュー_SNSで世界を拓く" />
          </picture>
        </figure>
        <div class="p-top-mv__button-wrapper">
          <div class="p-top-mv__button-wrap">
            <a class="p-top-mv__button"
              href="https://test.anby-webpartner.net//wp-content/uploads/2022/04/アドネス会社案内資料.pdf"
              download="アドネス会社案内資料.pdf">会社案内の資料を請求する</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.top-mv -->
    <section class="p-top-service p-top_service fade-up">
      <div class="p-top-service__container l-inner">
        <!-- タイトル -->
        <h2 class="p-top-service__title"><img class="p-top-news__service-image"
            src="<?php echo get_theme_file_uri( '/assets/images/top/top-sectiontitle-service.png' ); ?>" alt="サービス" />
        </h2>
        <!-- コンテンツ -->
        <div class="p-top-service__content">
          <p class="p-top-service__description">
            <span class="p-top-service__description-borderTop"></span>
            SNSマーケティングにおいて圧倒的な成功実績を持つ企業として、SNSマーケティングのコンサルティングからSNSのアカウント運用、SNSプロモーション、カスタマーサポート、SNS上におけるブランド戦略、SNSマーケティング人材育成サービスまで多岐に渡るサポートを行っています。
            <span class="p-top-service__link-wrapper-pc c-util-link u-appear-tab">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/company"
                class="p-top-service__link-pc c-util-link__link">
                <!-- <img class="p-top-service__link-image c-util-link__image" src="<?php echo get_theme_file_uri( '/assets/images/common/arrow_01.png' ); ?>"> -->
                <span class="p-top-service__link-arrow p-top-service__link-arrow--pc"></span>会社概要
              </a>
            </span><span class="p-top-service__description-borderBottom"></span>
          </p>
          <!-- ボタン -->
          <div class="p-top-service__button-wrapper">
            <div class="p-top-service__button-wrap-marketing">
              <a class="p-top-service__button p-top-service__button-marketing"
                href="<?php echo esc_url( home_url( '/' ) ); ?>/service">SNSマーケティング教育サービス</a>
            </div>
            <div class="p-top-service__button-wrap-operation">
              <a class="p-top-service__button p-top-service__button-operation"
                href="<?php echo esc_url( home_url( '/' ) ); ?>/service">SNS運用代行サービス</a>
            </div>
          </div>
          <div class="p-top-service__link-wrapper c-util-link u-hidden-tab">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/company" class="p-top-service__link c-util-link__link">
              <span class="p-top-service__link-arrow p-top-service__link-arrow--sp"></span>会社概要 </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.top-service -->
    <section class="p-top-news p-top_news fade-up">
      <div class="p-top-news__container l-inner">
        <!-- タイトル -->
        <h2 class="p-top-news__title"><img class="p-top-news__title-image"
            src="<?php echo get_theme_file_uri( '/assets/images/top/top-sectiontitle-news.png' ); ?>" alt="ニュース" />
        </h2>
        <!-- コンテンツ -->
        <div class="p-top-news__content">
          <div class="p-top-news__cards">
            <!-- ループ開始 -->
            <?php
            $wp_query = new WP_Query();//サブループの記載
            //連想配列
            $my_posts = array(
              'post_type' => 'news',
              'posts_per_page'=> '3',//投稿ページから取得する記述
              'order' => 'DESC',
              'paged' => $paged,
            );
            $wp_query->query( $my_posts );
            // 記事がある場合
            if ( $wp_query->have_posts()) : ?>
            <!-- ループ開始 -->
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <a class="p-top-news__card p-top-news-card" href="<?php the_permalink(); ?>">
              <figure class="p-top-news-card__image-wrapper">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-top-news-card__image','alt' => the_title_attribute('echo=0'))); ?>
                <!-- <img class="p-top-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_01.jpg' ); ?>" alt="ニュース画像1" />
                <img class="p-top-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_01.jpg' ); ?>" alt="ニュース画像1" /> -->
              </figure>
              <div class="p-top-news-card__body">
                <p class="p-top-news-card__text"><?php if(mb_strlen($post->post_content, 'UTF-8')>27){
                  $content= mb_substr($post->post_content, 0, 27, 'UTF-8');
                  echo $content.'...';
                  }else{
                    echo $post->post_content;
                  }
                  ?>
                  <!-- これはテキストです。コレはテキストです。コレはテキストです。 -->
                </p>
                <time class="p-top-news-card__date"
                  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d');?></time>
              </div>
            </a>
            <!-- <div class="p-top-news__card p-top-news-card">
              <figure class="p-top-news-card__image-wrapper">
                <img class="p-top-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_02.jpg' ); ?>" alt="ニュース画像2" />
                <img class="p-top-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_02.jpg' ); ?>" alt="ニュース画像2" />
              </figure>
              <div class="p-top-news-card__body">
                <p class="p-top-news-card__text">
                  これはテキストです。コレはテキストです。コレはテキストです。</p>
                <time class="p-top-news-card__date">2022.01.19</time>
              </div>
            </div> -->
            <!-- <div class="p-top-news__card p-top-news-card">
              <figure class="p-top-news-card__image-wrapper">
                <img class="p-top-news-card__image u-hidden-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/sp-news_03.jpg' ); ?>" alt="ニュース画像3" />
                <img class="p-top-news-card__image u-appear-tab"
                  src="<?php echo get_theme_file_uri( '/assets/images/news/news_03.jpg' ); ?>" alt="ニュース画像3" />
              </figure>
              <div class="p-top-news-card__body">
                <p class="p-top-news-card__text">これはテキストです。コレはテキストです。コレはテキストです。</p>
                <time class="p-top-news-card__date">2022.01.19</time>
              </div>
            </div> -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
          <div class="p-top-news__link-wrapper c-util-link">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="p-top-news__link c-util-link__link">
              <span class="p-top-news__link-arrow p-top-news__link-arrow--sp"></span>
              <p class="p-top-news__link-text">一覧を見る</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.top-news -->
    <section class="p-top-case p-top_case">
      <div class="p-top-case__container l-inner">
        <!-- タイトル -->
        <h2 class="p-top-case__title">
          <img class="p-top-case__title-image"
            src="<?php echo get_theme_file_uri( '/assets/images/top/top-sectiontitle-case-pc.png' ); ?>" alt="導入事例" />
        </h2>
        <!-- コンテンツ -->
        <div class="p-top-case__content">
          <div class="p-top-case__media p-top-case__media--01 c-media fade-up">
            <div class="c-media__content-wrapper">
              <div class="c-media__title-wrapper">
                <p class="c-media__title">Case1</p>
                <h3 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス</h3>
              </div>
              <p class="c-media__lead">センサーズを導入後、<br class="u-appear-tab">Instagram経由の売上が<br
                  class="u-hidden-tab">前月比<span class="js-border-yellow u-hidden-tab">2,000％向上</span><span
                  class="u-text-bluebackground u-appear-tab">2,000％向上</span></p>
              <div class="c-media__flow">
                <p class="c-media__flow-title">課題解決の流れ</p>
                <div class="c-media__flow-parts">
                  <div class="c-media__flow-part c-media__flow-part01">
                    <p class="c-media__flow-part-title u-hidden-tab">クライアント様の課題</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper01">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>"
                          alt="クライアント様の課題" class="c-media__flow-part-image01">
                      </figure>
                      <p class="c-media__flow-part-title  c-media__flow-part-title01 u-appear-tab--block">
                        クライアント様の課題
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text01-01">
                        フォロワーは多くいるが、<br>商品の<span class="u-font-maincolor js-border-yellow">購入に繋がらない</span>
                      </p>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part02">
                    <p class="c-media__flow-part-title u-hidden-tab">対策</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper02">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_02.png' ); ?>" alt="対策"
                          class="c-media__flow-part-image02">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title02 u-appear-tab--block">対策
                      </p>
                      <ul class="c-media__flow-part-list c-media__flow-part-list01-02">
                        <li class="c-media__flow-part-item">投稿内容のブラッシュアップ</li>
                        <li class="c-media__flow-part-item">販売導線の最適化</li>
                        <li class="c-media__flow-part-item">SNSに合った商品オファー<br>の再設計</li>
                      </ul>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part03">
                    <p class="c-media__flow-part-title u-hidden-tab">成果</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper03">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_03.png' ); ?>" alt="成果"
                          class="c-media__flow-part-image03">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title03  u-appear-tab--block">成果
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text01-03">Instagramの売上が<br><span
                          class="u-font-maincolor js-border-yellow">前月比2000％向上</span></p>
                    </div>
                  </div>
                </div>
                <div class="c-media__link-wrapper c-util-link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case#case01"
                    class="c-media__link c-util-link__link">
                    <span class="c-media__link-arrow c-media__link-arrow--sp"></span>
                    <p class="c-media__link-text">導入事例</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="p-top-case__media p-top-case__media--02 c-media fade-up">
            <div class="c-media__content-wrapper">
              <div class="c-media__title-wrapper">
                <p class="c-media__title">Case2</p>
                <h3 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス</h3>
              </div>
              <p class="c-media__lead">センサーズを導入後2ヶ月で、<br class="u-appear-tab">TikTokのフォロワーが<span
                  class="js-border-yellow u-hidden-tab">20,000人増加</span><span
                  class="u-appear-tab u-text-bluebackground">20,000人増加</span><br class="u-appear-tab"><span
                  class="u-hidden-tab">&nbsp; </span>Instagramのフォロワーが<span
                  class="js-border-yellow u-hidden-tab">2,000人増加</span><span
                  class="u-appear-tab u-text-bluebackground">2,000人増加</span></p>
              <div class="c-media__flow">
                <p class="c-media__flow-title">課題解決の流れ</p>
                <div class="c-media__flow-parts">
                  <div class="c-media__flow-part c-media__flow-part01">
                    <p class="c-media__flow-part-title  c-media__flow-part-title01  u-hidden-tab">クライアント様の課題
                    </p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper01">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>"
                          alt="クライアント様の課題" class="c-media__flow-part-image01">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title01 u-appear-tab--block">
                        クライアント様の課題
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text02-01">フォロワーが、<br><span
                          class="u-font-maincolor js-border-yellow">増えにくくなってきた</span></p>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part02">
                    <p class="c-media__flow-part-title u-hidden-tab">対策</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper02">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_02.png' ); ?>" alt="対策"
                          class="c-media__flow-part-image02">
                      </figure>
                      <p class="c-media__flow-part-title  c-media__flow-part-title02 u-appear-tab--block">対策
                      </p>
                      <ul class="c-media__flow-part-list c-media__flow-part-list02-02">
                        <li class="c-media__flow-part-item">投稿内容を各SNSに最適化<br>したものに方向転換</li>
                        <li class="c-media__flow-part-item">"バズ"を狙うための<br class="u-hidden-tab">投稿を作成</li>
                      </ul>
                      <p class="c-media__flow-part-supplement u-appear-tab--block">
                        ※バズとはSNS上で非常に多くの方に閲覧されること。普段の投稿の100倍〜1000倍近くの反応が得られることもあります。</p>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part03">
                    <p class="c-media__flow-part-title u-hidden-tab">成果</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper03">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_03.png' ); ?>" alt="成果"
                          class="c-media__flow-part-image03">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title03 u-appear-tab--block">成果
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text02-03">TikTokのフォロワーが<br><span
                          class="u-font-maincolor js-border-yellow">20,000人増加</span><br>Instagramのフォロワーが<br><span
                          class="u-font-maincolor js-border-yellow">2,000人増加</span></p>
                    </div>
                  </div>
                </div>
                <div class="c-media__link-wrapper c-util-link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case#case02"
                    class="c-media__link c-util-link__link">
                    <span class="c-media__link-arrow c-media__link-arrow--sp"></span>
                    <p class="c-media__link-text">導入事例</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="p-top-case__media p-top-case__media--03 c-media fade-up">
            <div class="c-media__content-wrapper">
              <div class="c-media__title-wrapper">
                <p class="c-media__title">Case3</p>
                <h3 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス
                </h3>
              </div>
              <p class="c-media__lead">SNSで集客した見込み客に対しての<span class="u-text-bluebackground">CVRが<span
                    class="js-border-yellow u-hidden-tab">500%向上</span><span
                    class="u-text-bluebackgroun u-appear-tab">500%向上</span></span><br>SNS以外を経由した売上も向上
              </p>
              <div class="c-media__flow">
                <p class="c-media__flow-title">課題解決の流れ</p>
                <div class="c-media__flow-parts">
                  <div class="c-media__flow-part c-media__flow-part01">
                    <p class="c-media__flow-part-title u-hidden-tab">クライアント様の課題</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper01">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>"
                          alt="クライアント様の課題" class="c-media__flow-part-image01">
                      </figure>
                      <p class="c-media__flow-part-title   c-media__flow-part-title01 u-appear-tab--block">
                        クライアント様の課題
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text03-01">SNSで集客した見込み客に<br
                          class="u-hidden-tab">対しての<span class="u-font-maincolor js-border-yellow">成約率が良くない</span>
                      </p>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part02">
                    <p class="c-media__flow-part-title u-hidden-tab">対策</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper02">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_02.png' ); ?>" alt="対策"
                          class="c-media__flow-part-image02">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title02 u-appear-tab--block">対策
                      </p>
                      <ul class="c-media__flow-part-list c-media__flow-part-list03-02">
                        <li class="c-media__flow-part-item">見込み客へのセールス手法 <br>の切り替え</li>
                        <li class="c-media__flow-part-item">販売導線の再設計</li>
                      </ul>
                    </div>
                  </div>
                  <div class="c-media__flow-part c-media__flow-part03">
                    <p class="c-media__flow-part-title  c-media__flow-part-title02  u-hidden-tab">成果</p>
                    <div class="c-media__flow-part-body">
                      <figure class="c-media__flow-part-image-wrapper03">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_03.png' ); ?>" alt="成果"
                          class="c-media__flow-part-image03">
                      </figure>
                      <p class="c-media__flow-part-title c-media__flow-part-title03 u-appear-tab--block">成果
                      </p>
                      <p class="c-media__flow-part-text c-media__flow-part-text03-03">SNSで集客した<br
                          class="u-hidden-tab">見込み客<br class="u-appear-tab">に対しての<br class="u-hidden-tab"><span
                          class="u-font-maincolor js-border-yellow">CVRが500％向上</span></p>
                    </div>
                  </div>
                </div>
                <div class="c-media__link-wrapper c-util-link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case#case03"
                    class="c-media__link c-util-link__link">
                    <span class="c-media__link-arrow c-media__link-arrow--sp"></span>
                    <p class="c-media__link-text">導入事例</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.top-case -->
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>


    <?php get_footer(); ?>