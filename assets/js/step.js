//アコーディオンをクリックした時の動作
$(document).on('click', '.c-accordion__title', function () {//タイトル要素をクリックしたら
  var findElm = $(this).next(".c-accordion__box");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作

  if ($(this).hasClass('is-close')) {//タイトル要素にクラス名closeがあれば
    $(this).removeClass('is-close');//クラス名を除去し
    $(this).next('.c-accordion__box').removeClass('is-flex');//クラス名closeを付与
  } else {//それ以外は
    $(this).addClass('is-close');//クラス名closeを付与
    $(this).next('.c-accordion__box').addClass('is-flex');//クラス名closeを付与
  }
});