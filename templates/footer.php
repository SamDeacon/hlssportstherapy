<footer class="the-footer">
<header class="page-header-container">
  <div class="container">
    <a href="<?php echo home_url() ?>" class="brand">
    <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/logo-header-brand.png" alt="">
  </a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <div class="footer-widgets">
    <div class="widget phone">
      <a href="tel:<?php echo constant("GLOBAL_MOBILE"); ?>" class="icon-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/phone.png" alt="">
      <span><strong>PHONE:</strong><br><?php echo constant("GLOBAL_MOBILE"); ?></span>
      </a>
    </div>
    <div class="widget email">
      <a href="mailto:<?php echo constant("GLOBAL_EMAIL"); ?>" class="icon-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/email-2.png" alt="">
      <span><strong>EMAIL:</strong><br><?php echo constant("GLOBAL_EMAIL"); ?></span>
      </a>
    </div>
    <div class="widget address">
    <a href="<?php echo home_url() ?>/contact"  class="icon-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/address.png" alt="">
      <span><strong>ADDRESS:</strong><br>
      46 Brook Street, Raunds, Northants, NN9 6LP<br>
      Pembrioke Centre, H.E. Bats Way, Rushden, NN10 9YP
      </span>
      </a>
    </div>
    </div>
  </div>
</header>
</footer>
<div class="footer-credits">
  <div class="container">
    <span class="copy" >Copyright &copy; <?php echo date("Y"); ?> H.S. Sports Therapy. All rights reserved</span>
    <span class="right">Website by <a href="http://nerdygoat.co.uk" target="_blank">nerdygoat.co.uk</a></span>
  </div>
  </div>