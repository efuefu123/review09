<?php
/**
* Template Name: case
*/
get_header(); ?>
<main>
  <section class="p-case">
    <div class="p-case__mv c-lower-mv fade-in">
      <figure class="p-case__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-case-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/case/case-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/case/sp-case-mv.jpg' ); ?>"
            alt="アドネス株式会社導入事例メインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">導入事例<br /><span class="c-lower-mv__subtitle">Case</span></h1>
    </div>
    <div class="p-case__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <section class="p-case__content l-inner">
        <div class="p-case__banner-wrapper fade-up">
          <a class="p-case-banner" href="#case1">
            <p class="p-case-banner__title"><span class="js-border-yellow">Case1</span></p>
            <p class="p-case-banner__lead">売上が増加した事例</p>
          </a>
          <a class="p-case-banner" href="#case2">
            <p class="p-case-banner__title"><span class="js-border-yellow">Case2</span></p>
            <p class="p-case-banner__lead">フォロワーが増加した事例</p>
          </a>
          <a class="p-case-banner" href="#case3">
            <p class="p-case-banner__title"><span class="js-border-yellow">Case3</span></p>
            <p class="p-case-banner__lead">CVRが増加した事例</p>
          </a>
        </div>
        <div id="case1" class="p-case__media p-case__media--01 c-media">
          <div class="c-media__content-wrapper">
            <div class="c-media__title-wrapper">
              <p class="c-media__title">Case1</p>
              <h2 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス</h2>
            </div>
            <p class="c-media__lead">センサーズを導入後、<br class="u-appear-tab">Instagram経由の売上が<br class="u-hidden-tab">前月比<span
                class="js-border-yellow u-hidden-tab">2,000％向上</span><span
                class="u-text-bluebackground u-appear-tab">2,000％向上</span></p>
            <div class="c-media__flow">
              <p class="c-media__flow-title">課題解決の流れ</p>
              <div class="c-media__flow-parts">
                <div class="c-media__flow-part c-media__flow-part01">
                  <p class="c-media__flow-part-title u-hidden-tab">クライアント様の課題</p>
                  <div class="c-media__flow-part-body">
                    <figure class="c-media__flow-part-image-wrapper01">
                      <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>" alt="クライアント様の課題"
                        class="c-media__flow-part-image01">
                    </figure>
                    <p class="c-media__flow-part-title  c-media__flow-part-title01 u-appear-tab--block">クライアント様の課題</p>
                    <p class="c-media__flow-part-text c-media__flow-part-text01-01">フォロワーは多くいるが、<br>商品の<span
                        class="u-font-maincolor js-border-yellow">購入に繋がらない</span></p>
                  </div>
                </div>
                <div class="c-media__flow-part c-media__flow-part02">
                  <p class="c-media__flow-part-title u-hidden-tab">対策</p>
                  <div class="c-media__flow-part-body">
                    <figure class="c-media__flow-part-image-wrapper02">
                      <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_02.png' ); ?>" alt="対策"
                        class="c-media__flow-part-image02">
                    </figure>
                    <p class="c-media__flow-part-title c-media__flow-part-title02 u-appear-tab--block">対策</p>
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
                    <p class="c-media__flow-part-title c-media__flow-part-title03  u-appear-tab--block">成果</p>
                    <p class="c-media__flow-part-text c-media__flow-part-text01-03">Instagramの売上が<br><span
                        class="u-font-maincolor js-border-yellow">前月比2000％向上</span></p>
                  </div>
                </div>
              </div>
              <div class="c-media__footer">
                <p class="c-media__flow-title"><span class="u-appear-tab">詳細</span>解説</p>
                <p class="c-media__flow-description">フォロワーを増やすことには成功したが、そこからの商品販売がうまくいかない方は多くいます。<span
                    class="u-font-weight700 js-border-yellow">原因の多くは販売導線の設計の不備です。</span><br>case1のクライアント様に関しましては、その点以外にも商品オファーを改善したいというご要望をいただきましたので、そちらも改善することで、大幅な売上改善に繋がりました。<span
                    class="u-font-weight700 js-border-yellow">”売上に繋がるSNS戦略”が弊社の強みです。</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="case2" class="p-case__media p-case__media--02 c-media">
          <div class="c-media__content-wrapper">
            <div class="c-media__title-wrapper">
              <p class="c-media__title">Case2</p>
              <h2 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス</h2>
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
                  <p class="c-media__flow-part-title  c-media__flow-part-title01  u-hidden-tab">クライアント様の課題</p>
                  <div class="c-media__flow-part-body">
                    <figure class="c-media__flow-part-image-wrapper01">
                      <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>" alt="クライアント様の課題"
                        class="c-media__flow-part-image01">
                    </figure>
                    <p class="c-media__flow-part-title c-media__flow-part-title01 u-appear-tab--block">クライアント様の課題</p>
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
                    <p class="c-media__flow-part-title  c-media__flow-part-title02   u-appear-tab--block">対策</p>
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
                    <p class="c-media__flow-part-title c-media__flow-part-title03 u-appear-tab--block">成果</p>
                    <p class="c-media__flow-part-text c-media__flow-part-text02-03">TikTokのフォロワーが<br><span
                        class="u-font-maincolor js-border-yellow">20,000人増加</span><br>Instagramのフォロワーが<br><span
                        class="u-font-maincolor js-border-yellow">2,000人増加</span></p>
                  </div>
                </div>
              </div>
              <div class="c-media__footer">
                <p class="c-media__flow-title"><span class="u-appear-tab">詳細</span>解説</p>
                <p class="c-media__flow-description">自社のフォロワーを伸ばしたいという要望は多くいただきます。<br class="u-appear-tab">そういった方には<span
                    class="u-font-weight700 js-border-yellow">フォロワーを爆発的に増やす施策</span>（いわゆるSNSバズ）を活用した施策を行います。<br>今回は弊社の持つノウハウを活用し、大きなバズを連続的に生み出したことで得られた成果になります。<br>バズは流行の移り変わりが激しく、1ヶ月前のバズるためのノウハウが廃れてることは頻繁に起こります。<br>我々は、多くのSNSのアカウントから常に最新のSNSノウハウを集計、分析しています。<br>そのためクライアント様の<span
                    class="u-font-weight700 js-border-yellow">ご要望に沿った最適なご提案が可能です。</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="case3" class="p-case__media p-case__media--03 c-media">
          <div class="c-media__content-wrapper">
            <div class="c-media__title-wrapper">
              <p class="c-media__title">Case3</p>
              <h2 class="c-media__subtitle">SNSマーケティング<br class="u-appear-tab">教育サービス
              </h2>
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
                      <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_01.png' ); ?>" alt="クライアント様の課題"
                        class="c-media__flow-part-image01">
                    </figure>
                    <p class="c-media__flow-part-title   c-media__flow-part-title01 u-appear-tab--block">クライアント様の課題</p>
                    <p class="c-media__flow-part-text c-media__flow-part-text03-01">SNSで集客した見込み客に<br
                        class="u-hidden-tab">対しての<span class="u-font-maincolor js-border-yellow">成約率が良くない</span></p>
                  </div>
                </div>
                <div class="c-media__flow-part c-media__flow-part02">
                  <p class="c-media__flow-part-title u-hidden-tab">対策</p>
                  <div class="c-media__flow-part-body">
                    <figure class="c-media__flow-part-image-wrapper02">
                      <img src="<?php echo get_theme_file_uri( '/assets/images/case/case_02.png' ); ?>" alt="対策"
                        class="c-media__flow-part-image02">
                    </figure>
                    <p class="c-media__flow-part-title c-media__flow-part-title02 u-appear-tab--block">対策</p>
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
                    <p class="c-media__flow-part-title c-media__flow-part-title03 u-appear-tab--block">成果</p>
                    <p class="c-media__flow-part-text c-media__flow-part-text03-03">SNSで集客した<br
                        class="u-hidden-tab">見込み客<br class="u-appear-tab">に対しての<br class="u-hidden-tab"><span
                        class="u-font-maincolor js-border-yellow">CVRが500%向上</span></p>
                  </div>
                </div>
              </div>
              <div class="c-media__footer">
                <p class="c-media__flow-title"><span class="u-appear-tab">詳細</span>解説</p>
                <p class="c-media__flow-description">
                  SNSで気軽に情報を受け取れる見込み客は、情報過多の中で情報を精査して自分の好みの情報を受け取っています。<br>そのためありふれた企業アカウントでは、全く情報を受け取ってもらえません。その壁を乗り越えるための施策を行いました。<br
                    class="u-hidden-tab">その結果、今までスルーされていた情報を受け取ってもらうことに成功し、<span
                    class="u-font-weight700 js-border-yellow">CVRが大幅に向上しました。</span><br
                    class="u-appear-tab">またSNSからの口コミが増え、外部からの流入も向上。<br><span
                    class="u-font-weight700 js-border-yellow">結果、事業全体の売上が向上しました。</span><br><span
                    class="u-br"></span>SNS上のフォロワーが増える、SNSで売上が大きく上がることで企業認知、商品認知が広がり、<span
                    class="u-font-weight700 js-border-yellow">事業全体の売上向上に繋がることはとても多いです。</span></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>


    <?php get_footer(); ?>