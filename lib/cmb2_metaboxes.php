<?php

add_action( 'cmb2_admin_init', 'cmb2_home_metaboxes' );
/**
 * HOMEPAGE METABOXES
 */
function cmb2_home_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_home_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	// Email text field
	$cmb->add_field( array(
		'name' => __( 'About seciton content', 'cmb2' ),
		'id'   => $prefix . 'about',
		'type' => 'wysiwyg',
	) );

		// Email text field
		$cmb->add_field( array(
			'name' => __( 'Button 1 text', 'cmb2' ),
			'id'   => $prefix . 'link_1_text',
			'type' => 'text',
		) );
			// Email text field
	$cmb->add_field( array(
		'name' => __( 'Button 1 link', 'cmb2' ),
		'id'   => $prefix . 'link_1_url',
		'type'       => 'select',
		'options_cb' => 'cmb2_get_your_post_type_post_options',
		) );
	$cmb->add_field( array(
		'name' => __( 'Button 2 link (leave blank to hide)', 'cmb2' ),
		'id'   => $prefix . 'link_2_text',
		'type' => 'text',
	) );
	$cmb->add_field( array(
		'name' => __( 'Button 2 link', 'cmb2' ),
		'id'   => $prefix . 'link_2_url',
		'type'       => 'select',
		'options_cb' => 'cmb2_get_your_post_type_post_options',
	) );
	$cmb->add_field( array(
		'name' => __( 'About Image', 'cmb2' ),
		'id'   => $prefix . 'about_img',
		'type' => 'file',
	) );

	// Add other metaboxes as needed

}

add_action( 'cmb2_admin_init', 'cmb2_test_metabox' );

function cmb2_test_metabox() {
	
		// Start with an underscore to hide fields from custom fields list
		$prefix = '_test_';
	
		/**
		 * Initiate the metabox
		 */
		$cmb = new_cmb2_box( array(
			'id'            => 'testimonial_metabox',
			'title'         => __( 'Test Metabox', 'cmb2' ),
			'object_types'  => array( 'hls_testimonials', ), // Post type
			'context'      => 'side', //  'normal', 'advanced', or 'side'
			'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
			'show_names'   => true, // Show field names on the left
		) );
	
		// Email text field
		$cmb->add_field( array(
			'name' => __( 'Location / subtitle', 'cmb2' ),
			'id'   => $prefix . 'sub_title',
			'type' => 'text',
		) );
	

		// Add other metaboxes as needed
	
	}