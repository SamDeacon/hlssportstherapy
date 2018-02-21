<?php
/**
 * Template Name: Home Page Template
 */
?>
<div class="container intro-para">

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

</div> 
<div class="blue-bg white-text">
<div class="container">

<p>
<span class="left">Call us and book your appointment today!</span>
<span class="right phone">    <a href="tel:<?php echo constant("GLOBAL_MOBILE"); ?>">
    <img class="phone-icon-white" src="<?php echo get_template_directory_uri(); ?>/public/img/icons/phone-white.png" alt="">
    <span>Phone: <?php echo constant("GLOBAL_MOBILE"); ?></span>
    </a>
    </span>
</p>
</div> 
</div>
<div class="container intro-para about-sect">

<?php 
  $page_meta = get_post_meta( get_the_ID());
  $page_1_link = get_permalink($page_meta['_home_link_1_url'][0]);
  $page_1_text = $page_meta['_home_link_1_text'][0];
  $page_2_link = get_permalink($page_meta['_home_link_2_url'][0]);
  $page_2_text = $page_meta['_home_link_2_text'][0];
  $about_text = $page_meta['_home_about'][0];
  $about_img = $page_meta['_home_about_img_id'][0];
  //echo '<pre>' . var_export($page_meta, true) . '</pre>';
?>
<div class="right-img mobile-only">
  <?php echo wp_get_attachment_image($about_img, 'larger-landscape'); ?>
</div>
<div class="left-text">
<div class="clearfix-me">
<?php echo wpautop($about_text); ?>
</div>
</div>
<div class="right-img desktop-only">
  <?php echo wp_get_attachment_image($about_img, 'larger-landscape'); ?>
</div>
<div class="clear-both">
<a href="<?php echo $page_1_link; ?>" class="cta-button"><?php echo $page_1_text; ?></a>
<a href="<?php echo $page_2_link; ?>" class="cta-button-black"><?php echo $page_2_text; ?></a>
</div>
</div>
<section class="services">
<h2><strong>Treatments</strong> and Services</h2>
<div class="container">
<?php
include_once('templates/services-loop.php');
?>
      <a href="<?php echo home_url() ?>/services-landing-page" class="cta-button">
        READ MORE
      </a>
      </div>
</section>

<section class="testimonials" style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/img/pictures/testimonial-writing.png');">
<div class="dark-overlay">
</div>
<h2>Testimonials</h2>
<div class="testimony-slider">
<?php
$args = array( 'post_type' => 'hls_testimonials', 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  $meta_tesimonial = get_post_meta( get_the_ID());
  echo '<div class="slider-content">';
  the_post_thumbnail( 'blog-thumbnail-small' );
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
  echo '<h3>';
  the_title();
  if ($meta_tesimonial['_test_sub_title'][0]) {
    echo'<span>'.($meta_tesimonial['_test_sub_title'][0]).'</span>';
  }

  echo '</h3>';
  echo '</div>';
endwhile;
wp_reset_query();
?>

</div>
</section>
<section class="blog">
<div class="container">
<h2><strong>Latest</strong> from the Blog</h2>
<div class="blog-loop-wrap hover-thumb">
<?php
$args = array( 'posts_per_page' => 2 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<div class="blog-post">';
echo '<a href="' . get_post_permalink() . '"><div class="thumb-wrap-hover">';
the_post_thumbnail('single-header');
echo '<span class="nubbin">+</span>';
echo '</div></a>';
echo '<div class="entry-content">';
  echo '<h3>';
    the_title();
  echo '</h3>';
  ?>
  <div class="span-time-wrap">
  <div class="span-time">
    <time><?= get_the_date('j'); ?></time><br>
    <time><?= get_the_date('M'); ?></time>
  </div>
  </div>
  <?php

  echo the_excerpt();

  echo '<a href="' . get_post_permalink() . '" class="cta-ghost-outline">READ MORE </a>';
  echo '</div>';
  echo '</div>';
endwhile;
wp_reset_query();
?>
</div>
       <a href="<?php echo home_url() ?>/blog" class="cta-button">
        Click Here for more Blog Articles &rarr;
      </a>
      </div>
</section>