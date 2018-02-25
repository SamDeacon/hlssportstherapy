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
		'title'         => __( 'Homepage Metaboxes', 'cmb2' ),
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

	add_action( 'cmb2_admin_init', 'cmb2_availability_metaboxes' );
	/**
	 * AVAILABILITY TEMPLATE METABOXES
	 */
	function cmb2_availability_metaboxes() {
	
		// Start with an underscore to hide fields from custom fields list
		$prefix = '_avilability_';
	
		/**
		 * Initiate the metabox
		 */
		$cmb = new_cmb2_box( array(
			'id'            => 'avilability_metabox',
			'title'         => __( 'Avilability Template Metaboxes', 'cmb2' ),
			'object_types'  => array( 'page', ), // Post type
			'show_on'      => array( 'key' => 'page-template', 'value' => 'template-availability.php' ),
			'context'      => 'normal', //  'normal', 'advanced', or 'side'
			'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
			'show_names'   => true, // Show field names on the left
		) );
			// BOX 1 - days
		$cmb->add_field( array(
			'name' => __( 'Box 1 Title', 'cmb2' ),
			'id'   => $prefix . 'box_1_title',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Box 1 Column 1 Header', 'cmb2' ),
			'id'   => $prefix . 'box_1_header_1',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Box 1 Column 2 Header', 'cmb2' ),
			'id'   => $prefix . 'box_1_header_2',
			'type' => 'text',
		) );

		$box_1_group = $cmb->add_field( array(
			'id'          => 'box_1_group',
			'type'        => 'group',
			'description' => __( 'Generates repeatable row contentent in first box', 'cmb2' ),
			'options'     => array(
				'group_title'   => __( 'Box 1 Row {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Add Another Row', 'cmb2' ),
				'remove_button' => __( 'Remove Row', 'cmb2' ),
				'sortable'      => true, // beta
				'closed'     => true, // true to have the groups closed by default
			),
		) );
		
		$cmb->add_group_field( $box_1_group, array(
			'name' => 'Column 1 Text',
			'id'   => 'column_1_text',
			'type' => 'text',
		) );
		
		$cmb->add_group_field( $box_1_group, array(
			'name' => 'Column 2 Text',
			'id'   => 'column_2_text',
			'type' => 'text',
		) );
					// BOX 2 - days
		$cmb->add_field( array(
			'name' => __( 'Box 2 Title', 'cmb2' ),
			'id'   => $prefix . 'box_2_title',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Box 2 Column 1 Header', 'cmb2' ),
			'id'   => $prefix . 'box_2_header_1',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Box 2 Column 2 Header', 'cmb2' ),
			'id'   => $prefix . 'box_2_header_2',
			'type' => 'text',
		) );

		$box_2_group = $cmb->add_field( array(
			'id'          => 'box_2_group',
			'type'        => 'group',
			'description' => __( 'Generates repeatable row contentent in first box', 'cmb2' ),
			'options'     => array(
				'group_title'   => __( 'Box 2 Row {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Add Another Row', 'cmb2' ),
				'remove_button' => __( 'Remove Row', 'cmb2' ),
				'sortable'      => true, // beta
				'closed'     => true, // true to have the groups closed by default
			),
		) );
		
		$cmb->add_group_field( $box_2_group, array(
			'name' => 'Column 1 Text',
			'id'   => 'column_1_text',
			'type' => 'text',
		) );
		
		$cmb->add_group_field( $box_2_group, array(
			'name' => 'Column 2 Text',
			'id'   => 'column_2_text',
			'type' => 'text',
		) );
			// box 3 - less heddings
			$cmb->add_field( array(
			'name' => __( 'Box 3 Title', 'cmb2' ),
			'id'   => $prefix . 'box_3_title',
			'type' => 'text',
		) );

		$box_3_group = $cmb->add_field( array(
			'id'          => 'box_3_group',
			'type'        => 'group',
			'description' => __( 'Generates repeatable row contentent in first box', 'cmb2' ),
			'options'     => array(
				'group_title'   => __( 'Box 3 Row {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Add Another Row', 'cmb2' ),
				'remove_button' => __( 'Remove Row', 'cmb2' ),
				'sortable'      => true, // beta
				'closed'     => true, // true to have the groups closed by default
			),
		) );
		
		$cmb->add_group_field( $box_3_group, array(
			'name' => 'Column 1 Text',
			'id'   => 'column_1_text',
			'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$cmb->add_group_field( $box_3_group, array(
			'name' => 'Column 1 Text Subheading (optional)',
			'id'   => 'column_1_text_sub',
			'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		
		$cmb->add_group_field( $box_3_group, array(
			'name' => 'Column 2 Text',
			'id'   => 'column_2_text',
			'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
	
	}