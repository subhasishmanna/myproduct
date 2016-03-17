<?php
	

/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '3.1.0', 'all');
	wp_enqueue_style( 'fancybox', get_template_directory_uri(). '/css/fancybox/jquery.fancybox.css', array(), '2.1.4', 'all');
	wp_enqueue_style( 'jcarousel', get_template_directory_uri(). '/css/jcarousel.css', array(), '3.1.0', 'all');
	wp_enqueue_style( 'flexslider', get_template_directory_uri(). '/css/flexslider.css', array(), '2.0', 'all');
	wp_enqueue_style( 'main', get_template_directory_uri(). '/css/style.css', array(), '0.1', 'all');
	wp_enqueue_style( 'skin', get_template_directory_uri(). '/skins/default.css', array(), '0.1', 'all');

	
	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '2.1.4', true );
	wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array('jquery'), '2.1.4', true );
	wp_enqueue_script( 'google-code-prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'jquery.quicksand', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array('jquery'), '1.2', true );
	wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/js/portfolio/setting.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '2.0', true );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.3', true );
	
	
	
	
	
/*<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> */
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function moderna_admin_files (){
	wp_enqueue_style( 'moderna-icon', get_template_directory_uri(). '/css/moderna-icon.css', array(), '3.1.0', 'all');
	
	
}
add_action( 'admin_enqueue_scripts', 'moderna_admin_files' );