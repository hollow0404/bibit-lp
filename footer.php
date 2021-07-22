<?php wp_footer(); ?> 

    <footer>
      <div class="footer-container">
        <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/footer.png" alt="背景"/>
        <img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/footer-sp.png" alt="背景"/>
        <div class="footer-container__contents">
          <div class="footer-container__address">
            <p>事業所：滋賀県大津市</p>
            <p>面談オフィス：滋賀県彦根市野田山町901-2</p>
          </div>
          <div class="footer-container__number">
            <a href="tel:077-576-6627">
              077-576-6627
            </a>
          </div>
          <small>
            ©<?php echo date('Y'); ?> BiBit, All rights reserved
          </small>
        </div>
      </div>
    </footer>

  </body>
</html>
