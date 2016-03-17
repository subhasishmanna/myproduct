<?php
/*

	Template Name: WP_Query Template

*/
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>				
			<?php endwhile; // end of the loop. ?>


			<?php
				
				wp_reset_postdata();

				$week = date('W');
				$year = date('Y');

				$args = array(
					
					'year' => $year,
					'w'	=> $week				

				);

				$the_query = new WP_Query( $args );				
				

			?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>	
			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>