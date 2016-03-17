<?php 
// Template Name: Portfolio grid template.
get_header();
 ?>
   <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="page-header">
			<h1><?php the_title(); ?></h1>
			</div>
		<?php the_content(); ?>
		<?php endwhile; else: ?>
			<?php get_template_part('404'); ?>
		<?php endif;  ?>
        </div>
        </div>
		<div class="row"> 
		<?php $args=array(
			'post_type'=>'portfolio',
			
		); 
		$query = new WP_Query($args);
		if($query->have_posts()): while($query->have_posts()): 		$query->the_post();
		?>
		<div class="col-sm-3 portfolio-piece">
		<p><?php the_post_thumbnail('thumbnail'); ?></p>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
		<?php endwhile; else: ?>
		No Post Found.
		<?php endif; ?>
		</div>
		
		
	<?php get_footer(); ?>