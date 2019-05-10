<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>


<footer class="footer">
  <div class="container margin_footer custom_foot">
    <div class="columns has-text-centered">
      <div class="column has-text-white">
      <?php wp_nav_menu(array(

    'theme_location' => 'main-menu',
    'menu_class' => 'my-footer-menu',

));?>
      </div>

      <div class="column">
      <h3 class="h3_footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a lacus sapien.</h3>
      <div class="social_link_footer">
              <a class="style_border" href="https://www.facebook.com/1neobridge/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a class="style_border" href="https://www.instagram.com/neo_bridge_/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
              <a class="style_border" href="https://twitter.com/Neobridge2" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="style_border" href="https://www.linkedin.com/company/neobridge/about/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>

        <div class="column has-text-centered-mobile">
        <div class="logo_footer">
            RelaisNeo
        </div>
        </div>
    </div>
  </div>
  <!--<div class="container margin_footer custom_foot">
    <div class="columns is-mobile is-multiline">
        <div class="column is-4 is-hidden-mobile">
        <a class="link" href="#"><i class="fas fa-chevron-right"></i> Accueil</a>
        <a class="link" href="#"><i class="fas fa-chevron-right"></i> Page d'exemple</a>
        <a class="link" href="#"><i class="fas fa-chevron-right"></i> Blog</a>
        <a class="link" href="#"><i class="fas fa-chevron-right"></i> Test</a>
        <a class="link" href="#"><i class="fas fa-chevron-right"></i> lol</a>
    </div>

        <div class="column is-4-desktop is-12-mobile has-text-centered">
        <h3 class="h3_footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a lacus sapien.
</h3>
        <div class="social_link_footer">
              <a class="style_border" href="https://www.facebook.com/1neobridge/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a class="style_border" href="https://www.instagram.com/neo_bridge_/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
              <a class="style_border" href="https://twitter.com/Neobridge2" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="style_border" href="https://www.linkedin.com/company/neobridge/about/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>

        <div class="column has-text-right is-4-desktop is-12-mobile has-text-centered-mobile">
        <div class="logo_footer">
            RelaisNeo
        </div>

        </div>
    </div>
  </div>-->
</footer>
<?php wp_footer();?>
