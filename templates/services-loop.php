<?php 
?>
<div class="three-column-wrap hover-thumb">

<?php 
$args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>

<a class="block service" href="<?php echo get_permalink(); ?>">
<?php
  echo '<div class="thumb-wrap-hover">';
  the_post_thumbnail('services-thumbnail' );
  echo '<span class="nubbin">+</span>';
  echo '</div>';
  echo '<div class="entry-content">';
  echo '<h3>';
  the_title();
  echo '</h3>';
  the_content();
  echo '</div></a>';
endwhile;
wp_reset_query();
?>

</div>

