<section class="blog index-blog">
<div class="container">


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<h2><strong>Latest</strong> from the Blog</h2>
<div class="blog-loop-wrap hover-thumb">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</div>
<?php the_posts_navigation(); ?>
</div>
</section>