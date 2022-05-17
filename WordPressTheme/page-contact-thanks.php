<?php
/**
* Template Name: contact-thanks
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
    <div2 class="p-contact__container">
      <div class="c-breadcrumb">
        <!-- <div class="c-breadcrumb">
          <a href="" class="c-breadcrumb__home">ホーム</a>
          <a href="" class="c-breadcrumb__contact">お問い合わせ</a>
        </div> -->
      </div>
      <section class="p-contact-thanks">
        <div class="p-contact-thanks__container l-inner">
          <p class="p-contact-thanks__text">
            <span class="p-contact-thanks-first">お問い合わせが完了しました。</span>
          </p>
          <p class="p-contact-thanks__text">
            担当者が内容を確認後、折り返しご連絡いたします。
          </p>
          <p class="p-contact-thanks__text">
            また、ご入力いただきましたメールアドレスへ内容確認の自動返信メールを送信しております。<br />もしもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます
          </p>
          <p class="p-contact-thanks__text">お手数ですが、再度お問い合わせいただくか、お電話
            （<a class="p-contact-thanks-tel" href="tel:050-1541-0722">050-1541-0722</a>） にてお問い合わせください。
          </p>
        </div>
      </section>
      <section class="c-cta">
        <?php get_template_part('template/document-request'); ?><?php get_template_part('template/contact'); ?>
      </section>


      <?php get_footer(); ?>