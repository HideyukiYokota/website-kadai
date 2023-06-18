"use strict";
{
  // ハンバーガーメニュー
  const open = document.getElementById("open");
  const overlay = document.querySelector(".pc-head");
  const spHead = document.querySelector(".sp-head");
  const close = document.getElementById("close");

  open.addEventListener("click", () => {
    overlay.style.display = "block";
    spHead.style.display = "none";
  });

  close.addEventListener("click", () => {
    overlay.style.display = "none";
    spHead.style.display = "flex";
  });

}

// カルーセル

$(function () {
  $(".Carousel").slick({
    dots: false,
    infinite: true,
    speed: 1000,
    slideToShow: 1,

    autoplay: true,
    arrows: true,
 
  });
});

$(function(){
  var pagetop = $('.totop');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 200) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
     $('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});

