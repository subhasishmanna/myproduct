<?php 

/*
Plugin Name: HAppy Title
Plugin URI:
Description: Hpyy Title.
Version: 1.0
Author: Automattic
Author URI: 
License: GPLv2 or later
Text Domain: 
*/
//related post(category)
add_filter('the_content','myrelatedpost');
function myrelatedpost($content){
	// the query
	
	if( !is_single()){
		return $content;
		}
		$id = get_the_ID();
		$categories = get_the_terms( $id, 'category' );
		$categoriesID = array();
		foreach ($categories as $category ){
			$categoriesID[]= $category->term_id;
			}
		$args = array(
			'category_in'=>$categoriesID,
			'posts_per_page'=>5,
			'post__not_in'=>array(get_the_ID()),
			'orderby'=>'rand'
		);
		$loop = new WP_Query( $args ); 
		if($loop->have_posts()){
			$content.='RELATED POSTS:<br><ul>';
		while ( $loop->have_posts() ) {
		$loop->the_post();
		$content.='<li> <a href="' .get_permalink() .'">' . get_the_title() . '</a></li>';
		}
		$content.='</ul>';
		}
		return $content;
	
	
}