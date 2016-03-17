<?php get_header(); ?>
</div>
<div id="featured" class="clearfix flexslider">
<?php
$args = array(
		'post_type' => 'work',
);
 $the_query = new WP_Query($args);
 ?>
 <ul class="slides">
 
<?php if(have_posts($the_query)): while( $the_query->have_posts()): $the_query->the_post(); ?>
		<li style="background:<?php echo the_field('background_color_associated_with_image'); ?>;">	
			<div class="container">
					<div class="grid_8" style="display:inline-block;">
					<img src="<?php echo the_field('home_page_slider_image'); ?>" alt="" / style="width:700px; display:inline-block;">
					</div>
					<div id="featured-info" class="grid_4 omega" style="clear:both; display:inline-block; width:200px;">
						<h5>Featured Project</h5>
						<h3 style="color:<?php echo the_field('button_color'); ?>;"><?php the_title(); ?></h3>
						<p><?php //the_field('description'); ?></p>
						<a class="btn blue" style="background-color: <?php echo the_field('button_color'); ?>" href="#">View Project &rarr;</a>
					</div>
					
		</li>

<?php endwhile; endif; ?>
</ul>
</div>

<div class="container clearfix">
	
			<div class="grid_12 omega">
				<h5>Featured Post</h5>
			</div>
			
			<?php
		$args = array(
			'post_type'=>'post',
			'category_name'=>'Featured',
			'posts_per_page'=> 1,
			'orderby' => 'rand',
		);
	$the_query = new WP_Query($args); ?>
	<?php if(have_posts($the_query)): while( $the_query->have_posts()): $the_query->the_post(); ?>
		
			
			<div class="push_2 grid_10 omega clearfix">
				<article>
						<?php get_template_part('content','post'); ?>
				</article>
			</div>
		<?php endwhile; endif; ?>
</div>
<div class="grid_12 omega clearfix">
					<div class="grid_6 recent-post">
						<article>
							<h5>Recent Post</h5>
								<?php
		$args = array(
			'post_type'=>'post',
			
			'posts_per_page'=> 1,
			'cat'           => -4,
		);
	$the_query = new WP_Query($args); ?>
	<?php if(have_posts($the_query)): while( $the_query->have_posts()): $the_query->the_post(); ?>
		
						<?php get_template_part('content','post'); ?>	
				<?php endwhile; endif; ?>		
						</article>
					</div>
					
						<?php $args = array(
								'post_type'=>'work',
								
								'posts_per_page'=> 1,
								
							);
						$the_query = new WP_Query($args); ?>
						<?php if(have_posts($the_query)): while( $the_query->have_posts()): $the_query->the_post(); ?>
											
						
						<?php get_template_part('content', 'work'); ?>
					
		<?php endwhile; endif; ?>
</div>
<?php get_template_part('content', 'testimonials'); ?>
<?php get_footer(); ?>