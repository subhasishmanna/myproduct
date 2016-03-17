<?php
	
	//wp_reset_postdata();

	$args = array(
		
		'post_type' => 'post',
		'posts_per_page' => 1

	);

	$the_query = new WP_Query( $args );				

	//wp_reset_postdata();

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<h3><?php the_title() ;?></h3>	
	<?php the_content(); ?>

<?php endwhile; else: ?>
	
	<p>No content available</p>

<?php endif; ?>