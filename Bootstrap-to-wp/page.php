<?php get_header(); ?>
   
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="page-header">
			<h1><?php the_title(); ?></h1>
			</div>
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			<?php get_template_part('404'); ?>
		<?php endif;  ?>
        </div>
        
         
		  <?php get_sidebar('1'); ?>
       
        
      </div>

      <?php get_footer(); ?>