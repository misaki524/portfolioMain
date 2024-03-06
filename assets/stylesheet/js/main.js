$(document).ready(function() {
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  const pHome = $('.p-home'); // p-home要素を取得
  const pWrap = $('.p-wrap__group');
  const slide = $('.slide-items');

  ham.on('click', function () {
    ham.toggleClass('active');
    nav.toggleClass('active');
    if (ham.hasClass('active')) {
      nav.show().fadeIn(2000);
    } else {
      nav.fadeOut(2000); // ハンバーガーメニューが非表示の場合はnavを非表示
    }
  });
});

$(function() {
  // 一旦hide()で隠してフェードインさせる
  $('.trimming01').hide().fadeIn('slow');
});

$(document).ready(function() {
  // ページが読み込まれたら実行する処理
  EachTextAnimeControl();
});

// スクロール時のイベントを定義
$(window).scroll(function () {
  // EachTextAnimeControl関数を実行
  EachTextAnimeControl();
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
  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  //spanタグを追加する
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

  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述