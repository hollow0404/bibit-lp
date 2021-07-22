<section class="is-color-bg is-contact">
  <div class="contact">
    <div class="sec-title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" />
      <div class="sec-title__text">
        無料相談のお申し込み
      </div>
    </div>
    <div class="contact__text">
      通常2営業日以内に専任パートナーより、ご希望の連絡方法にて返信させていただき、日程調整を行います。<br>相談時の強引な勧誘は一切ございませんのでご安心ください。<br>※その他ご質問・ご要望も承ります。
    </div>
    <form class="contact__form">
      <div class="contact__block">
        <p>
          <label>お名前（実名を避けたい方はニックネーム等でも構いません）</label>
        </p>
        <input type="text" class="contact__text-box">
      </div>
      <div class="contact__block">
        <p>
          <label>ふりがな</label>
        </p>
        <input type="text" class="contact__text-box">
      </div>
      <div class="contact__block is-harf">
        <p>
          <label>ご年齢</label>
        </p>
        <input type="text" class="contact__text-box">
      </div>
      <div class="contact__block">
        <p>
          <label>電話番号（お電話でのご連絡をご希望の方は必ず入力してください）</label>
        </p>
        <input type="text" class="contact__text-box">
      </div>
      <div class="contact__block is-harf">
        <p>
          <label>都道府県</label>
        </p>
        <select name="pref_name" class="contact__select-box">
          <option value="" selected>選択してください</option>
          <option value="北海道">北海道</option>
          <option value="青森県">青森県</option>
          <option value="岩手県">岩手県</option>
          <option value="宮城県">宮城県</option>
          <option value="秋田県">秋田県</option>
          <option value="山形県">山形県</option>
          <option value="福島県">福島県</option>
          <option value="茨城県">茨城県</option>
          <option value="栃木県">栃木県</option>
          <option value="群馬県">群馬県</option>
          <option value="埼玉県">埼玉県</option>
          <option value="千葉県">千葉県</option>
          <option value="東京都">東京都</option>
          <option value="神奈川県">神奈川県</option>
          <option value="新潟県">新潟県</option>
          <option value="富山県">富山県</option>
          <option value="石川県">石川県</option>
          <option value="福井県">福井県</option>
          <option value="山梨県">山梨県</option>
          <option value="長野県">長野県</option>
          <option value="岐阜県">岐阜県</option>
          <option value="静岡県">静岡県</option>
          <option value="愛知県">愛知県</option>
          <option value="三重県">三重県</option>
          <option value="滋賀県">滋賀県</option>
          <option value="京都府">京都府</option>
          <option value="大阪府">大阪府</option>
          <option value="兵庫県">兵庫県</option>
          <option value="奈良県">奈良県</option>
          <option value="和歌山県">和歌山県</option>
          <option value="鳥取県">鳥取県</option>
          <option value="島根県">島根県</option>
          <option value="岡山県">岡山県</option>
          <option value="広島県">広島県</option>
          <option value="山口県">山口県</option>
          <option value="徳島県">徳島県</option>
          <option value="香川県">香川県</option>
          <option value="愛媛県">愛媛県</option>
          <option value="高知県">高知県</option>
          <option value="福岡県">福岡県</option>
          <option value="佐賀県">佐賀県</option>
          <option value="長崎県">長崎県</option>
          <option value="熊本県">熊本県</option>
          <option value="大分県">大分県</option>
          <option value="宮崎県">宮崎県</option>
          <option value="鹿児島県">鹿児島県</option>
          <option value="沖縄県">沖縄県</option>
        </select>
      </div>
      <div class="contact__block">
        <p>
          <label>メールアドレス</label>
        </p>
        <input type="email" class="contact__text-box">
      </div>
      <div class="contact__block">
        <p>
          <label>メールアドレス（確認）</label>
        </p>
        <input type="email" class="contact__text-box">
      </div>
      <div class="contact__block">
        <p>
          <label>ご希望の連絡方法</label>
        </p>
        <div class="contact__container">
          <label for="1" class="contact__radio-box">
            <input type="radio" name="hash" value="good" id="1" checked="checked">
            電話
          </label>
          <label for="2" class="contact__radio-box">
            <input type="radio" name="hash" value="bad" id="2">
            メール
          </label>
        </div>
      </div>
      <div class="contact__block">
        <p>
          <label>ご希望の相談形式</label>
        </p>
        <div class="contact__container">
          <label for="3" class="contact__radio-box">
            <input type="radio" name="test" value="good" id="3" checked="checked">
            対面
          </label>
          <label for="4" class="contact__radio-box">
            <input type="radio" name="test" value="bad" id="4">
            オンライン
          </label>
        </div>
      </div>
      <div class="contact__block">
        <p>
          <label>その他お問い合わせ内容</label>
        </p>
        <textarea class="contact__textarea-box" rows="6"></textarea>
      </div>
      <input class="contact__submit" type="submit" value="無料相談を申込む">
    </form>
  </div>
</section>