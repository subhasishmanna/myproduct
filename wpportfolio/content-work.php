	<div class="grid_6 spotlight project" style="background:<?php echo the_field('background_color_associated_with_image'); ?>;">
		<a href="<?php the_permalink(); ?>">
		<img src="<?php echo the_field('home_page_slider_image'); ?>" alt="" />
		</a>
		
		<h4>
			<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			</a>
		</h4>
		<?php echo the_field('description'); ?>
		
		<p>
			<a class="btn blue" href="<?php the_permalink(); ?>" style="background:<?php echo the_field('button_color'); ?>">
			View Project &rarr;
			
			</a>
		</p>
		
	</div>