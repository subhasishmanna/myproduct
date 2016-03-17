<?php get_header(); ?>

<div class="grid_12 omega clearfix">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<div class="intro">
			<p><?php the_field( 'description' ); ?></p>
		</div>
		
		<p>
			<a class="btn blue" href="<?php the_field( 'web_site_url' ); ?>" style="background-color: <?php the_field( 'button_color' ); ?>">
				View Project &rarr;
			</a>
		</p>

		<hr>

		<div class="project-images">
			<img src="<?php the_field( 'home_page_slider_image' ); ?>" alt="" />
			

		</div>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>