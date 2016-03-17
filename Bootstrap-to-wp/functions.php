<?php 

// theme style
function bootstrap_to_wp_name_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '3.1.0', 'all');
	wp_enqueue_style( 'main-style', get_template_directory_uri(). '/style.css', array(), '1.0', 'all');
	
	
	wp_enqueue_script('jquery');
	//wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.5', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('bootstrap-js'), '1.0', true );
	
	
	// For Internet Explorer less than version 9.
	global $wp_scripts;
	wp_register_script( 'html-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '3.5', true );
	wp_register_script( 'resopnd', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '3.5', false );
	$wp_scripts->add_data('html-shiv','conditional','lt IE 9');
	$wp_scripts->add_data('resopnd','conditional','lt IE 9');
}

add_action( 'wp_enqueue_scripts', 'bootstrap_to_wp_name_scripts' );

/*=============REMOVE ADMIN BAR==============*/
add_filter('show_admin_bar','__return_false');


/*============= REGISTER MENUS ==============*/

function boot_to_wp_nav_menu (){
	register_nav_menus( array(
	'header_menu' => __('Header Menu'),
	) );
}
add_action('init','boot_to_wp_nav_menu');

/*============= REGISTER MENUS ==============*/
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of blog page with a sidebar' );

// Add theme support.

add_theme_support( 'post-thumbnails');  ;


