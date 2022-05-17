<?php
/**
* Template Name: contact
*/
get_header(); ?>
<main>
  <section class="p-contact">
    <div class="p-contact__mv c-lower-mv fade-in">
      <figure class="p-contact__mv-wrapper c-lower-mv__image-wrapper">
        <picture class="p-contact-mv__image c-lower-mv__image">
          <source srcset="<?php echo get_theme_file_uri( '/assets/images/company/company-mv.jpg' ); ?>"
            media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri( '/assets/images/company/sp-company-mv.jpg' ); ?>"
            alt="アドネス株式会社お問い合わせメインビュー" />
        </picture>
      </figure>
      <h1 class="c-lower-mv__title">お問い合わせ<br /><span class="c-lower-mv__subtitle">Contact</span></h1>
    </div>
    <div class="p-contact__container">
      <div class="c-breadcrumb">
        <?php
          if ( function_exists( 'bcn_display' ) ) { 
            bcn_display();
            }
        ?>
      </div>
      <section class="p-contact__content l-inner">
        <p class="p-contact__text">個人情報保護方針にご同意の上、<br class="u-hidden-tab">下記フォームに必要事項をご入力ください。</p>
        <!-- MW WP Form置き換え -->
        <!-- <div class="p-contact-form">
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">お名前<span class="p-contact-form__must-input">必須</span>
            </h2>
            <div class="p-contact-form__item-name-wrapper">
              <input type="text" class="p-contact-form__item-text p-contact-form__item-text--last-name" placeholder="姓">
              <input type="text" class="p-contact-form__item-text p-contact-form__item-text--first-name"
                placeholder="名">
            </div>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">会社名<span class="p-contact-form__must-input">必須</span></h2>
            <input type="text" class="p-contact-form__item-text">
          </div>
          <div class=" p-contact-form__item">
            <h2 class="p-contact-form__item-name">部署</h2>
            <input type="text" class="p-contact-form__item-text">
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">メールアドレス<span class="p-contact-form__must-input">必須</span></h2>
            <div class="p-contact-form__item-email-wrapper">
              <input type="email" class="p-contact-form__item-email" placeholder="example@domain.com">
              <p class="p-contact-form__text">※フリーメールはご利用できません</p>
            </div>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">電話番号<span class="p-contact-form__must-input">必須</span></h2>
            <div class="p-contact-form__item-tel-wrapper">
              <input type="tel" class="p-contact-form__item-tel" placeholder="090-1234-5678">
              <p class="p-contact-form__text">※事業用番号、携帯電話などご連絡の取りやすい番号をご入力ください</p>
            </div>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">相談内容</h2>
            <textarea class="p-contact-form__item-textarea"></textarea>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">当社を知ったきっかけ<span class="p-contact-form__must-input">必須</span></h2>
            <label for="当社を知ったきっかけ1"><input type="radio" id="当社を知ったきっかけ1" class=" p-contact-form__item-radio"
                name="当社を知ったきっかけ" value="SNSで" checked><span class="p-contact-form__radiobutton"></span>SNSで</label>
            <label for="当社を知ったきっかけ2"><input type="radio" id="当社を知ったきっかけ2" class="p-contact-form__item-radio"
                name="当社を知ったきっかけ" value="検索で"><span class="p-contact-form__radiobutton"></span>検索で</label>
            <label for="当社を知ったきっかけ3"><input type="radio" id="当社を知ったきっかけ3" class="p-contact-form__item-radio"
                name="当社を知ったきっかけ" value="知人の紹介で"><span class="p-contact-form__radiobutton"></span>知人の紹介で</label>
            <label for="当社を知ったきっかけ4"><input type="radio" id="当社を知ったきっかけ4" class="p-contact-form__item-radio"
                name="当社を知ったきっかけ" value="クチコミで"><span class="p-contact-form__radiobutton"></span>クチコミで</label>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">事業内容に弊社と同内容はあるか<span class="p-contact-form__must-input">必須</span></h2>
            <label for="事業内容に弊社と同内容はあるか"><input type="radio" id="事業内容に弊社と同内容はあるか" class="p-contact-form__item-radio"
                name="事業内容に弊社と同内容はあるか" value="ありません"><span
                class="p-contact-form__radiobutton"></span>ありません（サイト上などにて弊社と同業の事業内容を明記している企業様のお問合せはお断りしています）</label>
          </div>
          <div class="p-contact-form__item">
            <h2 class="p-contact-form__item-name">個人情報の取り扱いについて<span class="p-contact-form__must-input">必須</span></h2>
            <label for="個人情報の取り扱いについて"><input type="radio" id="個人情報の取り扱いについて" class="p-contact-form__item-radio"
                name="個人情報の取り扱いについて" value="同意します"><span class="p-contact-form__radiobutton"></span>同意します</label>
          </div>
          <div class="p-contact-form__privacy-policy-wrapper">
            <p class="p-contact-privacy-policy__main-title">「個人情報の取り扱いについて」</p>
            <section class="p-contact-privacy-policy__content">
              <ul class="p-contact-privacy-policy__items">
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">1．個人情報の定義</h3>
                  <p class="p-contact-privacy-policy__description">
                    このプライバシーポリシーにおいて、「個人情報」とは、生存する個人に関する情報であって、以下のいずれかに該当するものをいいます。<br />（１）当該情報に含まれる氏名、生年月日その他の記述等により、特定の個人を識別できるもの（他の情報と容易に照合でき、それにより特定の個人を識別できるものを含む）。<br />（２）個人識別符号が含まれるもの。
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">2．個人情報の取得</h3>
                  <p class="p-contact-privacy-policy__description"> （１）当社は、以下の方法で個人情報を取得します。 申込者から直接個人情報の提供を受ける方法
                    申込者が当社サービスを利用する際に自動的に個人情報を記録する方法<br />第三者から間接的に申込者の個人情報の提供を受ける方法<br />（２）当社は、インフォマティブ情報（識別子情報やインターネットの利用にかかるログ情報など、個人に関する情報のことで、個人を特定することができないもの。例として、年齢・性別・職業・居住地域、Cookie、IPアドレス、広告識別子及び位置情報等）を取得しています。申込者が当社サービスの利用にあたり当社に個人情報を提供した場合、当社は、当該情報と、当該申込者のインフォマティブ情報を紐付ける場合がありますが、この場合には当該インフォマティブ情報も個人情報として取り扱います。
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">3．個人情報の利用目的</h3>
                  <p class="p-contact-privacy-policy__description">
                    当社は、以下の目的で個人情報を利用します。<br />（１）申込者が利用する当社サービス（利用登録手続中の当社サービスを含みます。）の運営及びそれに伴う申込者とのやりとり・情報提供<br />（２）当社サービスの安全な運営に必要な不正対策<br />（３）当社サービスの改善・新規開発<br />（４）申込者に対する各種サービスの提案・情報提供・広告配信<br />（５）当社が編集・発行・運営する各種媒体への掲載<br />（６）上記の各利用目的に必要な各種調査・分析・マーケティング
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">4．個人情報の管理について</h3>
                  <p class="p-contact-privacy-policy__description">
                    （１）当社は、「７．個人情報管理責任者」のもと、個人情報の漏洩、滅失またはき損等を防止するために、必要かつ適切な組織的、人的、物理的、技術的安全管理措置を講じます。<br />（２）当社は、個人情報取扱業務の全部または一部を第三者に委託することがあります。この場合、当社は、委託先に対して必要かつ適切な監督を行います。
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">5．個人情報の第三者提供</h3>
                  <p class="p-contact-privacy-policy__description">
                    申込者から承諾を得たとき、個人情報保護法その他の法令等に基づく場合、または次のいずれかに該当する場合を除き、個人情報を第三者に提供することはありません。<br />（１）人の生命、身体、または財産の保護のために個人データの第三者提供が必要である場合であって、本人の同意を得ることが困難である場合<br />（２）公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を取ることが困難である場合<br />（３）国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがある場合<br />（４）有料サービス利用や商品注文等に伴うクレジットカード等の決済手続きに際して申込者の銀行口座やクレジットカード等の正当性を金融機関、カード会社等に確認する場合
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">6．個人情報の開示等の請求</h3>
                  <p class="p-contact-privacy-policy__description">
                    （１）申込者は、申込者本人が識別される個人情報の開示・訂正、利用停止または消去（以下「個人情報の開示等」といいます。）を求めることができます。<br />２）個人情報の開示等をご希望の方は、①開示等を希望される個人情報、②当該個人情報を提供した時期を明記し、（３）に記載の本人確認書類の写しを添付の上、「７.個人情報に関する問合せ先」までご連絡ください。なお、開示等については、１件当たり手数料として１１００円（消費税込）をいただきますが、振込先については、お問い合わせに返信する形でお知らせします。<br />３）個人情報の開示等の際に必要な本人確認書類は、以下のうちいずれか１つとなります。<br />①&nbsp;パスポート（あるいは外国人登録証）<br />②&nbsp;運転免許証<br />③&nbsp;健康保険証、年金手帳、納税証明書（または非課税証明書）
                  </p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">7．個人情報管理責任者</h3>
                  <p class="p-contact-privacy-policy__description">株式会社アドネス<br />代表取締役&nbsp;三上功太</p>
                </li>
                <li class="p-contact-privacy-policy__item">
                  <h3 class="p-contact-privacy-policy__title">8．個人情報に関する問合せ先</h3>
                  <p class="p-contact-privacy-policy__description">こちらよりお問い合わせください。<br />info@addness.co.jp</p>
                </li>
              </ul>
            </section>
            </p>
          </div>
          <div class="p-contact-form__submit-wrapper">
            <a class="p-contact-form__submit">送信する</a>
          </div>
        </div> -->
        <?php echo do_shortcode('[mwform_formkey key="205"]'); ?>
        <!-- MW WP Form置き換え -->
      </section>
    </div>
    <section class="c-cta">
      <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
    </section>


    <?php get_footer(); ?>