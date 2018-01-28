<?php

function services_post_type()
{
    register_post_type('services',
                       [
                           'labels'      => [
                               'name'          => __('Services'),
                               'singular_name' => __('Service'),
                               'add_new_item' => __('Add New Service'),
                               
                           ],
                           'menu_icon'           => 'dashicons-universal-access-alt',
                           'public'      => true,
                           'supports' => array('title', 'editor', 'thumbnail'),
                           'has_archive' => true,
                       ]
    );
}

function testimonials_post_type()
{
    register_post_type('hls_testimonials',
                       [
                           'labels'      => [
                               'name'          => __('Testimonials'),
                               'singular_name' => __('Testimony'),
                               'add_new_item' => __('Add New Testimony'),
                            ],
                           'menu_icon'           => 'dashicons-editor-quote',
                           'public'      => true,
                           'supports' => array('title', 'editor', 'thumbnail'),
                           'has_archive' => false,
                       ]
    );
}
add_action('init', 'services_post_type');
add_action('init', 'testimonials_post_type');