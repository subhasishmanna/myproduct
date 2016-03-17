<?php
	
add_action( 'init', 'moderna_create_post_type' );
function moderna_create_post_type() {
  register_post_type( 'slide',
    array(
      'labels' => array(
        'name' => __( 'Slide' ),
        'singular_name' => __( 'Slide' ),
		'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Slide' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit Slide' ),
        'new_item' => __( 'New Slide' ),
        'view' => __( 'View Slide' ),
        'view_item' => __( 'View Slide' ),
        'search_items' => __( 'Search Slide' ),
        'not_found' => __( 'No Slide found' ),
        'not_found_in_trash' => __( 'No Slide found in Trash' ),
        'parent' => __( 'Parent Slide' ),
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_icon'    => 'dashicons-slides',
	  'supports'	 => array('title','editor','excerpt','thumbnail'),
    )
  );
  register_post_type( 'jobs',
    array(
      'labels' => array(
        'name' => __( 'jobs' ),
        'singular_name' => __( 'Jobs' ),
		'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Job' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit Job' ),
        'new_item' => __( 'New Job' ),
        'view' => __( 'View Job' ),
        'view_item' => __( 'View Job' ),
        'search_items' => __( 'Search Job' ),
        'not_found' => __( 'No Job found' ),
        'not_found_in_trash' => __( 'No Job found in Trash' ),
        'parent' => __( 'Parent Slide' ),
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_icon'    => 'dashicons-slides',
	  'supports'	 => array('title','editor','excerpt','thumbnail', 'custom-fields'),
    )
  );
  
  
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'services' ),
        'singular_name' => __( 'service' ),
		'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Service' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit Service' ),
        'new_item' => __( 'New Service' ),
        'view' => __( 'View Service' ),
        'view_item' => __( 'View Service' ),
        'search_items' => __( 'Search Service' ),
        'not_found' => __( 'No Service found' ),
        'not_found_in_trash' => __( 'No Service found in Trash' ),
        'parent' => __( 'Parent Service' ),
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_icon'    => 'dashicons-share-alt',
	  'supports'	 => array('title','editor','excerpt', 'custom-fields' ),
    )
  );
  register_post_type( 'work',
    array(
      'labels' => array(
        'name' => __( 'Works' ),
        'singular_name' => __( 'Work' ),
		'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Work' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit Work' ),
        'new_item' => __( 'New Work' ),
        'view' => __( 'View Work' ),
        'view_item' => __( 'View Work' ),
        'search_items' => __( 'Search Work' ),
        'not_found' => __( 'No Work found' ),
        'not_found_in_trash' => __( 'No Work found in Trash' ),
        'parent' => __( 'Parent Work' ),
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_icon'    => 'dashicons-share-alt',
	  'supports'	 => array('title','excerpt', 'thumbnail' ),
    )
  );
}