<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'moderna_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function moderna_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $service_posttype_meta_box = array(
    'id'          => 'services_meta_box',
    'title'       => __( 'Services Meta Box', 'theme-text-domain' ),
    'desc'        => 'Meta box',
    'pages'       => array( 'services' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Icon', 'theme-text-domain' ),
        'id'          => 'icon',
        'type'        => 'text',
		'desc'       => __( 'Use font awesome icon. Do not include fa class Example:facebook  <br>Get all icon <a href="http://fortawesome.github.io/Font-Awesome/icons/">here </a> ', 'theme-text-domain' ),
		
      ),
      
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $service_posttype_meta_box );







}