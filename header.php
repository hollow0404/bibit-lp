<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <script>
      (function(d) {
        var config = {
          kitId: 'mnj2sfc',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"><script>
    <title>一人で悩まない婚活 | BiBit</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="header-container__first">
          <div class="header-container__left">
            <img class="header-container__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像">
            <div class="header-container__appeal is-pc">
              <i class="fas fa-car"></i>
              <div class="header-container__appeal-text">お近くへ出張相談いたします</div>
              <div class="header-container__appeal-label">無料</div>
            </div>
          </div>
          <div class="header-container__right">
            <div class="header-container__time-zone">         
              受付時間 10:00 ~ 19:00
            </div>
            <div class="header-container__call">
              <i class="fas fa-phone"></i>
              <a href="tel:077-576-6627" class="header-container__phone-number">
                077-576-6627
              </a>
            </div>
          </div>
        </div>
        <div class="header-container__second is-sp">
          <div class="header-container__appeal">
            <i class="fas fa-car"></i>
            <div class="header-container__appeal-text">お近くへ出張相談いたします</div>
            <div class="header-container__appeal-label">無料</div>
          </div>
        </div>
      </div>
    </header>
