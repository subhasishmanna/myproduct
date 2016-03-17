<?php 
	

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'footer1',
        'id' => 'footer1',
        'description' => __( 'Widgets in this area will be shown on footer Area.', 'theme-slug' ),
        'before_widget' => '<div class="widget"><ul class="link-list"> <li>',
		'after_widget'  => '</li></ul></div> ',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
    ) );

	register_sidebar( array(
        'name' => 'postleft',
        'id' => 'postleft',
        'description' => __( 'Widgets in this area will be shown on post section.', 'theme-slug' ),
        'before_widget' => '<div class="widget"><ul class="link-list"> <li>',
		'after_widget'  => '</li></ul></div> ',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
    ) );

	
	
	
	
	
	
}