<?php
  wp_footer();
  /*
      you need wp_footer() because the wp_enqueue_script() in the functions.php file
      uses it to append the app.js file to footer if the last argument is set to true
  */
?>

<footer class="c-footer" data-scroll-section>
  <div class="o-container">

    <div class="o-layout -gutter">
      <div class="o-layout_item u-1/2@from-medium" data-scroll>
        <h1 class="o-title" data-scroll>
          <span class="o-title_line"><span>Left</span></span>
          <span class="o-title_line"><span>half</span></span>
        </h1>
      </div>
      
      <div class="o-layout_item u-1/2@from-medium" data-scroll>

        <?php

          wp_nav_menu( array(
            'menu'              => "footer-menu",
            'container'         => "nav",
            'container_class'   => "c-footer_nav",
            'walker'            => new Footer_Nav_Walker()
          ) );

        ?>

      </div>
    </div>

    <p class="c-footer_copyright"><?php echo esc_html__("All rights reserved 2020, UI", "theme_UI"); ?></p>
  </div>
</footer>
