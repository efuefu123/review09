"use strict";

/*--------------------------------------------
アニメーション用（フェードイン）
--------------------------------------------*/
jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // var topBtn = $('.page-top');
  // topBtn.hide();
  // ボタンの表示設定
  // $(window).scroll(function () {
  // 	if ($(this).scrollTop() > 70) {
  // 		// 指定px以上のスクロールでボタンを表示
  // 		topBtn.fadeIn();
  // 	} else {
  // 		// 画面が指定pxより上ならボタンを非表示
  // 		topBtn.fadeOut();
  // 	}
  // });
  // ボタンをクリックしたらスクロールして上に戻る
  // topBtn.click(function () {
  // 	$('body,html').animate(
  // 		{
  // 			scrollTop: 0,
  // 		},
  // 		300,
  // 		'swing'
  // 	);
  // 	return false;
  // });
  // ボタンをクリックしたらスクロールして上に戻る
  $(function () {
    $('.to-top').on('click', function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500, 'swing');
      return false;
    });
  }); // ヘッダー
  // $(window).on('scroll', function () {
  // 	if ($('.slider1').height() < $(this).scrollTop()) {
  // 		$('.header').css('background', 'rgba(17,17,17,1)');
  // 	} else {
  // 		$('.header').css('background', 'rgba(17,17,17,0.5)');
  // 	}
  // });
  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  // $(document).on('click', 'a[href*="#"]', function () {
  // 	let time = 400;
  // 	let header = $('header').innerHeight();
  // 	let target = $(this.hash);
  // 	if (!target.length) return;
  // 	let targetY = target.offset().top - header;
  // 	$('html,body').animate({ scrollTop: targetY }, time, 'swing');
  // 	return false;
  // });

  /*--------------------------------------------
  // ドロワーメニュー
  --------------------------------------------*/

  $(function () {
    $('.c-drawer-icon').on('click', function () {
      $('.c-drawer-icon').toggleClass('is-open');
      $('.c-drawer-menu').toggleClass('is-active');
      $('.c-drawer-menu-overlay').toggleClass('is-active');
      $('body').toggleClass('no-scroll');
    });
  });
  $(function () {
    $('.c-drawer-menu__icon').on('click', function () {
      $('.c-drawer-icon').toggleClass('is-open');
      $('.c-drawer-menu').toggleClass('is-active');
      $('.c-drawer-menu-overlay').toggleClass('is-active');
      $('body').toggleClass('no-scroll');
    });
  });
  /*--------------------------------------------
  // スムーススクロール
  --------------------------------------------*/

  $(function () {
    // #で始まるリンクをクリックした場合
    $('a[href^="#"]').click(function () {
      // スクロールの速度
      var speed = 400; // スクロールタイプ

      var type = 'swing'; // href属性の取得

      var href = $(this).attr('href'); // 移動先の取得（hrefが#indexならトップ$(html)に、）

      var target = $(href == '#index' ? 'html' : href); // 移動先のポジション取得

      var position = target.offset().top - 150; // animateでスムーススクロール

      $('body,html').animate({
        scrollTop: position
      }, speed, type);
      return false;
    });
  });
  /*--------------------------------------------
  // 会社概要ページ バリューのアコーディオン
  --------------------------------------------*/

  $(function () {
    $('.p-company-value__item-head').on('click', function () {
      $(this).next().slideToggle();
    });
  });
  /*--------------------------------------------
  //下線を引くアニメーション
  --------------------------------------------*/

  $(window).on('scroll', function () {
    $('.js-border-yellow').each(function () {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > position - windowHeight + 150) {
        $(this).addClass('is-active');
      }
    });
  });
  /*--------------------------------------------
  //headerに影をつける
  --------------------------------------------*/

  $(window).on('scroll', function () {
    $('.l-header').each(function () {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (position > 100) {
        $(this).addClass('is-shadow');
      }
    });
  });
  /*--------------------------------------------
  //二回クリックでラジオボタンのチェックを外す
  --------------------------------------------*/

  $(function () {
    //インプット要素を取得する
    var inputs = $('input'); //読み込み時に「:checked」の疑似クラスを持っているinputの値を取得する

    var checked = inputs.filter(':checked').val(); //インプット要素がクリックされたら

    inputs.on('click', function () {
      //クリックされたinputとcheckedを比較
      if ($(this).val() === checked) {
        //inputの「:checked」をfalse
        $(this).prop('checked', false); //checkedを初期化

        checked = '';
      } else {
        //inputの「:checked」をtrue
        $(this).prop('checked', true); //inputの値をcheckedに代入

        checked = $(this).val();
      }
    });
  }); // /*--------------------------------------------
  // //iPhoneとAndroidのみ電話のリンクを有効にする
  // --------------------------------------------*/
  // let ua = navigator.userAgent;
  // if (ua.indexOf('iPhone') === -1 && ua.indexOf('Android') === -1) {
  // 	jQuery('a[href^="tel:"]')
  // 		.css('cursor', 'default')
  // 		.on('click', function (e) {
  // 			e.preventDefault();
  // 		});
  // }
});