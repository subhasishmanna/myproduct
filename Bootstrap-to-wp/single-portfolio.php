<?php 

get_header();
 ?>
   <div class="container">
      <!-- Example row of columns -->
 
        <div class="row single-post">
			<h2 ><a href=""data-target="#myModal" data-toggle="modal">Portfolio</a></h2>
			<div class="next-prev">
			<?php echo previous_post_link('%link', '<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>'); ?>
			<?php next_post_link('%link', '<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>'); ?>
			</div>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="col-md-8  portfolio-piece"> 
			<p><?php the_post_thumbnail(); ?></p>
			</div>
			<div class="col-md-4">
			
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<p><a class="btn btn-primary btn-large" href="<?php the_field('link'); ?>"> View Final Project &nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></p>
			</div>
			
		<?php endwhile; else: ?>
			<?php get_template_part('404'); ?>
		<?php endif;  ?>
        </div>
        <!-- Button trigger modal -->



     
	<?php get_footer(); ?>