<div class="top-link-bar">
  <div class="container">
    <div class="icon-link">
      <a href="tel:<?php echo constant("GLOBAL_MOBILE"); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/call.png" alt="">
        <span>Phone: <?php echo constant("GLOBAL_MOBILE"); ?></span>
      </a>
    </div>
    <div class="icon-link">
      <a href="mailto:<?php echo constant("GLOBAL_EMAIL"); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/email.png" alt="">
        <span>Email: <?php echo constant("GLOBAL_EMAIL"); ?></span>
      </a>
    </div>
    <div class="icon-link right nav-button" id="nav-tog">
      <div class="nav-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
       <div class="bar"></div>
    </div>
  </div>
  <div class="icon-link right fb">
    <a href="<?php echo constant("GLOBAL_FB_URL"); ?>" target="_blank"><span>Follow Us On: </span><img src="<?php echo get_template_directory_uri(); ?>/public/img/icons/facebook.png" alt="">
    </a>
  </div>
  </div>
  <nav class="nav-mobile">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
</div>
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
  </div>
</header>
<?php if (is_front_page()) : ?>
  <div id="home-slick-slider" class="home-slick-slider">
      <div class="slide-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/pictures/home-header.jpg');">
      <div class="container content-wrap">
      <h2>H.S. SPORTS THERAPY
        <span>COMMITTED TO YOUR HEALTH AND WELLBEING</span>
      </h2>
      <a href="/about" class="cta-button">
    FIND OUT MORE</a>
    </div>
    </div>
    <div class="slide-wrap dark" style="background-image: url('https://dustincarbonera.files.wordpress.com/2015/05/02245_2015-teletech-sports-league-communications_banner-4x8_base_web.jpg');">
    <div class="container content-wrap">  
    <h2>H.S. SPORTS THERAPY
        <span>COMMITTED TO YOUR HEALTH AND WELLBEING</span>
      </h2>
      <a href="/about" class="cta-button">
    FIND OUT MORE</a>
    </div>
    </div>
    <div class="slide-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/pictures/stock_freedumbbells.jpg');">
      <div class="container content-wrap">
      <h2>H.S. SPORTS THERAPY
        <span>COMMITTED TO YOUR HEALTH AND WELLBEING</span>
      </h2>
      <a href="/about" class="cta-button">
    FIND OUT MORE</a>
    </div>
    </div>
  </div>
  <?php else : ?>
<div class="page-banner-std" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/pictures/default-page-banner.jpg');">
<div class="dark-overlay"></div>
<div class="page-header-content">
  <h1 class="page-banner-heading">
<?php 
if (is_home()) {
  echo 'News &amp; Blog';
} else {
  the_title();
}
?>
</h1>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
</div>

  </div>
</div>
  <?php endif; ?>
