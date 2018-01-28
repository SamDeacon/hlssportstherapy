<?php
/**
 * Template Name: Services Page Template
 */
?>
<section class="services with-intro-para">
<div class="container">
  <div class="intro-para">
<h2><strong>Treatments</strong> and Services</h2>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
<?php
include_once('templates/services-loop.php');
?>
      </div>
</section>