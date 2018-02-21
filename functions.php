<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

define("GLOBAL_MOBILE", "07495304974");
define("GLOBAL_EMAIL", "hlssportstherapy@gmail.com");
define("GLOBAL_FB_URL", "https://www.facebook.com/hssportstherapy92/");

/**
 * Gets a number of posts and displays them as options
 * @param  array $query_args Optional. Overrides defaults.
 * @return array             An array of options that matches the CMB2 options array
 */
function cmb2_get_post_options( $query_args ) {
  
    $args = wp_parse_args( $query_args, array(
      'post_type'   => 'post',
      'numberposts' => -1,
    ) );
  
    $posts = get_posts( $args );
  
    $post_options = array();
    if ( $posts ) {
      foreach ( $posts as $post ) {
            $post_options[ $post->ID ] = $post->post_title;
      }
    }
  
    return $post_options;
  }
  
  /**
   * Gets 5 posts for your_post_type and displays them as options
   * @return array An array of options that matches the CMB2 options array
   */
  function cmb2_get_your_post_type_post_options() {
    return cmb2_get_post_options( array( 'post_type' => 'page', 'numberposts' => -1 ) );
  }



include_once('lib/cmb2_metaboxes.php');
include_once('lib/custom_post_types.php');
// include_once('lib/cmb2_admin.php');

function register_my_menu() {
  
  // register_nav_menu('primary_navigation', __('Primary Navigation', 'sage'));
  // register_nav_menu('main-mobile-menu',__( 'Mobiel Nav (Full menu)' ));
}
add_action( 'after_setup_theme', 'register_my_menu' );


add_action( 'after_setup_theme', 'img_setup' );
function img_setup() {
add_image_size( 'home-banner-image', 1400, 480, true );
add_image_size( 'header', 1400, 400, true );
add_image_size( 'single-header', 1100, 500, true );
add_image_size( 'homepage-box', 360, 360, true );
add_image_size( 'blog-thumbnail', 360, 360, true );
add_image_size( 'larger-landscape', 800, 540, true );
add_image_size( 'larger-service-landscape', 800, 620, true );
add_image_size( 'services-thumbnail', 400, 270, true );
add_image_size( 'blog-thumbnail-small', 200, 200, true );
}

function my_assets() {
	wp_enqueue_style( 'css/main', get_stylesheet_directory_uri() . '/public/css/main.css' );

  if (is_front_page()) {
    wp_enqueue_script( 'js/slick', get_stylesheet_directory_uri() . '/public/scripts/slick.min.js', ['jquery'], '1.0', true );
  }
  wp_enqueue_script( 'js/main', get_stylesheet_directory_uri() . '/public/scripts/main.js', ['jquery'], '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'my_assets' );
add_post_type_support( 'services', 'excerpt' );


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt).'...';
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content).'...';
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}