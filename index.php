<?php get_header(); ?>

<main>
  <section>
    <div class="main-visual">
      <img class="main-visual__image" src="<?php echo get_template_directory_uri(); ?>/img/main-visual.png" alt="メイン画像" />
      <img class="main-visual__image-sp" src="<?php echo get_template_directory_uri(); ?>/img/main-visual-sp.png" alt="メイン画像" />
      <div class="main-visual__container">
        <div class="main-visual__up">
          <div class="main-visual__copy">
            <p>始めよう、</p>
            <span class="is-dot">一</span>
            <span class="is-dot">人</span>
            <span class="is-dot">で</span>
            <span class="is-dot">悩</span>
            <span class="is-dot">ま</span>
            <span class="is-dot">な</span>
            <span class="is-dot">い</span>
            <span>婚活</span>
            <span>専任パートナーが、あなたの交際を徹底サポートします</span>
          </div>
        </div>
        <div class="main-visual__down">
          <div class="main-visual__banners">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bnr_no1_member.png" alt="会員数No.1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bnr_no1_seikon.png" alt="成婚数No.1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ai_matching.png" alt="AIマッチング">
          </div>
          <div class="main-visual__reference">
            <span>当社は、登録会員数 No.1の日本結婚相談所連盟（※）の加盟相談所です。
            <br>（※2019年1月 日本マーケティング機構調べ）</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="cv-point">
      <div class="cv-point__text">
        \ まずはこちら、対面でもオンラインでもOK! /
      </div>
      <div class="cv-point__button">
        <a href="#" class="cv-point__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/start-btn.png" alt="ボタン" />
          <span>無料相談を予約する</span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
