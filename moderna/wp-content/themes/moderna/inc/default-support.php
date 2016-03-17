<?php  
	

add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', array('aside', 'gallery', 'audio', 'video' ) );
add_image_size( 'slide-size', 1024, 360, true );
add_image_size( 'work', 800, 600, true );