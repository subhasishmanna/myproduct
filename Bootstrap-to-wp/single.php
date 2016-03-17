<?php get_header(); ?>
   
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<article class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p>	By <?php the_author_posts_link(); ?>
				On 
				<?php the_time('l, F jS, Y'); ?>
				In
				<?php the_category(','); ?>.
				 <a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a>
				
				</p>
			
			<hr />
		<?php the_content(); ?>
		</article>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<?php get_template_part('404'); ?>
		<?php endif;  ?>
        </div>
        
         
		  <?php get_sidebar('blog'); ?>
       
        
      </div>

      <?php get_footer(); ?>