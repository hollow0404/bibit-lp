<script>
  $(function () {
    let tableButtons = $(".is-table"); // is-tableのクラスを全て取得し、変数tableButtonsに配列で定義
    $(".is-table").on("click", function () { // tabをクリックしたらイベント発火
      $(".is-active").removeClass("is-active"); // activeクラスを消す
      $(".is-main-color").removeClass("is-main-color");
      $(this).addClass("is-active"); // クリックした箇所にactiveクラスを追加
      $(this).addClass("is-main-color");
      const index = tableButtons.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
      if (index === 0) {
        $(function () {
          $(".p-1").removeClass("js-is-hidden");
          $(".p-2").addClass("js-is-hidden");
        });
      }
      else if (index === 1) {
        $(function () {
          $(".p-1").addClass("js-is-hidden");
          $(".p-2").removeClass("js-is-hidden");
        });
      }
    })
  });
</script>

<section class="is-color-bg">
  <div class="sec-title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" />
    <div class="sec-title__text">
      料金プラン
    </div>
  </div>
  <div class="plan">
    <div class='plan__title is-table is-active is-sp is-main-color'>
      ベーシックプラン
    </div>
    <div class='plan__title is-table is-sp'>
      プレミアムプラン
    </div>
    <table class='c-table-price'>
      <thead>
        <tr>
          <th class='js-is-delete'></th>
            <th class='p-1'>
            <span>ベーシックプラン</span>
          </th>
          <th class='p-2 js-is-hidden'>
            <span>プレミアムプラン</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>入会金</th>
          <td class='p-1'>
            <strong>88,000</strong>
            円(税込)
          </td>
          <td class='p-2 js-is-hidden'>
            <strong>110,000</strong>
            円(税込)
          </td>
        </tr>
        <tr>
          <th>月額費用</th>
          <td class='p-1'>
            <strong>11,000</strong>
            円(税込)
          </td>
          <td class='p-2 js-is-hidden'>
            <strong>14,300</strong>
            円(税込)
          </td>
        </tr>
        <tr>
          <th>休会費用</th>
          <td class='p-1 is-red'>
            <strong>0</strong>
            円
          </td>
          <td class='p-2 js-is-hidden is-red'>
            <strong>0</strong>
            円
          </td>
        </tr>
        <tr>
          <th>お見合い料</th>
          <td class='p-1 is-red'>
            <strong>0</strong>
            円
          </td>
          <td class='p-2 js-is-hidden is-red'>
            <strong>0</strong>
            円
          </td>
        </tr>
        <tr>
          <th>お見合い申込可能件数</th>
          <td class='p-1'>
            <span>50件 / 月</span>
          </td>
          <td class='p-2 js-is-hidden'>
            <span>200件 / 月</span>
          </td>
        </tr>
        <tr>
          <th>お見合い申受可能件数</th>
          <td class='p-1 is-red'>
            <span>無制限</span>
          </td>
          <td class='p-2 js-is-hidden is-red'>
            <span>無制限</span>
          </td>
        </tr>
        <tr>
          <th>電話・LINE相談</th>
          <td class='p-1 is-red'>
            <span>無制限</span>
          </td>
          <td class='p-2 js-is-hidden is-red'>
            <span>無制限</span>
          </td>
        </tr>
        <tr>
          <th>直紹介人数</th>
          <td class='p-1'>
            <span>1名 / 月</span>
          </td>
          <td class='p-2 js-is-hidden'>
            <span>3名 / 月</span>
          </td>
        </tr>
        <tr>
          <th>面談数(上限)</th>
          <td class='p-1'>
            <span>1回 / 月</span>
          </td>
          <td class='p-2 js-is-hidden'>
            <span>3回 / 月</span>
          </td>
        </tr>
        <tr>
          <th>オンラインお見合い</th>
          <td class='p-1 is-red'>
            <span>対応可能</span>
          </td>
          <td class='p-2 js-is-hidden is-red'>
            <span>対応可能</span>
          </td>
        </tr>
        <tr>
          <th>成婚料</th>
          <td class='p-1'>
            <span>198,000円</span>
          </td>
          <td class='p-2 js-is-hidden'>
            <span>198,000円</span>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="sec-title">
      <div class="sec-title__text">
        お得な割引制度
      </div>
    </div>
    <ul class="plan__discount">
      <li>
        <div class="plan__discount-title">
          乗り換え割引
        </div>
        <div class="plan__discount-body">
          他社からお乗り換えの場合 入会金 
          <strong>0</strong>
          <span>円</span>
        </div>
      </li>
      <li>
        <div class="plan__discount-title">
          20代割引
        </div>
        <div class="plan__discount-body">
          入会金・成婚料
          <strong>半額</strong>
           + 月額利用料
          <strong>20</strong>
          <span>%引き</span>
        </div>
      </li>
      <li>
        <div class="plan__discount-title">
          シングルマザー割引
        </div>
        <div class="plan__discount-body">
          入会金・成婚料
          <strong>半額</strong>
        </div>
      </li>
    </ul>
    <div class="sec-title">
      <div class="sec-title__text">
        キャンペーン
      </div>
    </div>
    <ul class="plan__discount">
      <li>
        <div class="plan__discount-title is-campaign">
          全額返金制度
        </div>
        <div class="plan__discount-body">
          入会後お見合いが成立しなければ
          <strong>全額返金</strong>
        </div>
      </li>
    </ul>
    </div>
  </div>
</section>