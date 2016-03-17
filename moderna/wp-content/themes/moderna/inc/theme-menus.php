<?php

function moderna_register_menus (){
	register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
	
) );
	
	
}
add_action('init','moderna_register_menus');

function moderna_fall_back_menu () {
	
	echo '<ul class="nav navbar-nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	
}