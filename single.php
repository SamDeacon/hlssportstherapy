<div class="standard-page-wrap index-blog-single">
  <div class="container">
<div class="content-left">
<?php $the_post_id = get_the_id(); ?>
<?php the_post_thumbnail('larger-service-landscape' ); ?>
<?php get_template_part('templates/content-single', get_post_type()); ?>
</div>
<div class="sidebar-right">

    <?php the_post_thumbnail('larger-service-landscape' ); ?>
    <div class="links">
        Other recent posts:
        <?php 
        wp_reset_query();
$args = array( 
    'post_type' => 'post', 
    'posts_per_page' => 3,
    'post__not_in' => array($the_post_id),
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>

<a class="blog-side-title" href="<?php echo get_permalink(); ?>">
<?php
  echo '<h3><span>>></span> ';
  the_title();
  echo '</h3>';
  echo '</a>';
endwhile;
wp_reset_query();
?>

    </div>
</div>

    </div>
</div>