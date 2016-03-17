<?php
// add style
function wp_portfilo_styles() {
	
	wp_enqueue_style( 'grid', get_template_directory_uri(). '/css/grid.css', array(), '0.1', 'all');
	wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css', array(), '0.1', 'all');
	wp_enqueue_style( 'social', get_template_directory_uri(). '/css/webfonts/ss-social.css', array(), '0.1', 'all');
	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic' );	
	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
	if( is_page( 'home' ) ) {
		wp_enqueue_style( 'flexslider' );
	}
	
	wp_enqueue_style( 'main-style', get_template_directory_uri(). '/style.css');
	
	
	wp_enqueue_script('jquery');
	if( is_page( 'home' ) ) {
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '1.3', true );
	}
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '1.3', true );
	
	
	
	
	

}

add_action( 'wp_enqueue_scripts', 'wp_portfilo_styles' );

// enable custom menus.
add_theme_support('menus');


// creayte dyanemic widget area
function creat_widget($name, $id, $description ) {
	$args = array(
	'name'          => __( $name),
	'id'            => $id,
	'description'   => $description,
   
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>' );
	 register_sidebar($args);
	
}

// footer left 
creat_widget ('Footer Left', 'footer_left', 'This will Apper on Footer Left');
creat_widget ('Footer Center', 'footer_center', 'This will Apper on Footer Center');
creat_widget ('Footer Right', 'footer_right', 'This will Apper on Footer Right');


