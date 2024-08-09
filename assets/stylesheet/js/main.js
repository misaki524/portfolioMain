jQuery(function ($) {
  $(window).on('load', function () {
    // windowのloadイベントが発火したときの処理
    EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
  });

  $(document).ready(function () {
    const ham = $('#js-hamburger');
    const nav = $('.p-home__nav');
    const pHomeNav = $('.p-home__items');
    const pHome = $('.p-home'); // p-home要素を取得
    const pWrap = $('.p-wrap__group');
    const slide = $('.slide-items');

    ham.on('click', function () {
      ham.toggleClass('active');
      nav.toggleClass('active');
      pHomeNav.toggleClass('active');
    });

    // 一旦hide()で隠してフェードインさせる
    $('.trimming01').hide().fadeIn('slow');

    // spanタグを追加する
    var element = $(".p-page__title");
    element.each(function () {
      var text = $(this).text();
      var textbox = "";
      text.split('').forEach(function (t, i) {
        if (t !== " ") {
          if (i < 10) {
            textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
          } else {
            var n = i / 10;
            textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
          }
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });

    EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/

    // Swiperの初期化
    const swiper = new Swiper(".swiper", {
      // ページネーションが必要なら追加
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      // ナビボタンが必要なら追加
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // スクロール時のイベントを定義
    $(window).scroll(function () {
      EachTextAnimeControl();
    });
  });

  // eachTextAnimeにappeartextというクラス名を付ける定義
  function EachTextAnimeControl() {
    $('.p-page__title').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("appeartext");
      } else {
        $(this).removeClass("appeartext");
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
  });
});
document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper('.swiper', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 30,
  });
});