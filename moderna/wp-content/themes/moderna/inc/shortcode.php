<?php
	
function button_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			'link'=>'#',
			'class'=>'success',
			'text'=>'test text',
			'icon'=>'heart',
	),$atts,'btn'));
	
if($icon):
return '<a href="'.$link.'" class="btn btn-'.$class.'"><i class="fa fa-'.$icon.'"></i> '.$text.'</a>';
else:
	return '<a href="'.$link.'" class="btn btn-'.$class.'">'.$text.'</a>';
endif;
}
add_shortcode('btn','button_shortcode');	
/*function icon_button_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			'link'=>'#',
			'class'=>'success',
			'icon'=>'heart',
			'text'=>'test text',
	),$atts,'iconbtn'));
	
	
	return '<a href="'.$link.'" class="btn btn-'.$class.'"><i class="fa fa-'.$icon.'"></i> '.$text.'</a>';
}
add_shortcode('iconbtn','icon_button_shortcode'); */
	
	
	
	function progess_bar_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			'value'=> '' ,
			'class'=> 'progress' ,
			'color'=> '' ,
			
			
			
	),$atts,'progess_bar'));
	

return '<div class="'.$class.'">
  <div  class="progress-bar"  role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%; background:'.$color.'; ">
    <span class="sr-only" >60% Complete</span>
  </div>
</div>';

}
add_shortcode('progess_bar','progess_bar_shortcode');	

function pricing_table($atts, $content = null) {
	extract(shortcode_atts(array(
			'heading1'=>'very',
			'heading2'=>'Basic',
			'price'=>'&#36;15.00 / Month',
			'btn_link'=>'#',
			'btn_text'=>'Register now',
			'btn_type'=>'theme',
			'btn_icon'=>'bolt',
			'column'=>'4',
			
	),$atts,'pricing'));
	

return '<div class="col-md-'.$column.'">
				<div class="pricing-box-alt">
					<div class="pricing-heading">
						<h3>'.$heading1.'<strong>'.$heading2.'</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>'.$price.'</h6>
					</div>
					<div class="pricing-content">
						'.$content.'
					</div>
					<div class="pricing-action">
						<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="fa fa-'.$btn_icon.'"></i> '.$btn_text.'</a>
					</div>
				</div>
			</div>';

}
add_shortcode('pricing','pricing_table');	


	
function postlist_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			'post_type'=>'post',
			'count'=> '',
			
	),$atts,'postlist'));

	$the_query = new WP_Query(array('post_type'=> $post_type, 'posts_per_page' => $count,));
	$title ='<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
$title .=  '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
	}
	$title .='</ul>';
wp_reset_postdata();
	return $title;

}
add_shortcode('postlist','postlist_shortcode');

// job list shortcode

function jobs_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			
			'count'=> '3',
			
	),$atts,'jobs'));

	$the_query = new WP_Query(array('post_type'=> 'jobs', 'posts_per_page' => $count,));
	$jobs ='<div class="all-job-list">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$idd = get_the_ID();
		$joblink = get_post_meta($the_query->post->ID, 'job_link', true);
		
			$jobs .=  '
			<div class="singlejob">';
			$jobs .=	'<h2>'.get_the_title().'</h2>';
			$jobs .=	get_the_excerpt().'<br>';
			if ($joblink):
			$jobs .=	'<a href="'.$joblink.'">Apply Onlne</a>';
			else:
			$jobs .=	'<span>Job Over</span>';
			endif;
			$jobs .= '</div>';
			
			
		}
	
	wp_reset_postdata();
	$jobs .='</div>';
	return $jobs;

}
add_shortcode('jobs','jobs_shortcode');






// portfolio shortcode

function portfolio_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			'post_type'=>'post',
			'count'=> '',
			
	),$atts,'portfolio'));
	
	
	$list ='
			<div class="row">
			<div class="col-md-12">
				<h4 class="heading">Recent Works</h4>
				
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
					';

					
					
					
					
					
						$the_query = new WP_Query(array('post_type' => 'work', 'posts_per_page' => 4,));

						// The Loop
						if ( $the_query->have_posts() ) {
					
						while ( $the_query->have_posts() ) {
					
						$the_query->the_post();
						$idd = get_the_ID();
						$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'work' );
						 $myExcerpt = get_the_excerpt();
						  $tags = array("<p>", "</p>");
						  $myExcerpt = str_replace($tags, "", $myExcerpt);
						  $myTitle = get_the_title();
						  $ttags = array("<p>", "</p>");
						  $myTitle = str_replace($ttags, "", $myTitle);
						  
						
						
						$list .= '
						<li class="col-md-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.$myTitle.'" href="'.$slide_img[0].'">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						
						<img src="'.$slide_img[0].'" alt="'.$myExcerpt.'">
						</div>
						</li>';
						
						
						
						
						}
					wp_reset_postdata();
				} 
				
			
					
					
					
$list .= '			</ul>
					</section>
				</div>
			</div>
		</div>

';					
return $list;
}			
add_shortcode('portfolio','portfolio_shortcode');