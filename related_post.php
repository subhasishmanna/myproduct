<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: Subhasish Manna
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Subhasish Manna
Version: 1.6
Author URI: http://ma.tt/
*/
add_filter('the_content', function($content){
	if(is_singular( 'post' )){
	$id = get_the_ID();
	$terms = get_the_terms( $id, 'category' );
	$cats = array();
	
	foreach( $terms as $term ){
		$cats[] = $term->term_id;
		
	}
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'category__in' => $cats,
		'post__not_in' => array($id),
		'orderby' => 'rand',
	
	
	
	);
	$the_query  =  new WP_Query($args );
	$content .='<ul>';
	while( $the_query -> have_posts()){
		$the_query -> the_post();
		
		$content .='<li><a href="'.get_the_permalink().'">' . get_the_title() . '</a></li>';
	}
	$content .='</ul>';
	
	return $content;
	
	}else{
		return $content;
	}
	
	
	
});