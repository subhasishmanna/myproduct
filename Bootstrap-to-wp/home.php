<?php get_header(); ?>
   
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
		<div class="page-header col-md-12">
			<h1><?php wp_title(''); ?></h1>
			<!--carosuel start-->
			<?php
				$args = array(
					'post_type' => 'post',
					'category_name' => 'featured',
					
				);
		$the_query = new WP_Query($args);
		$post_count = 0;
			?>
			</div>
			 
			<div id="carousel-example-generic" class="carousel slide col-md-12" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				  <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
			<?php $post_count++; ?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $post_count - 1;  ?>" class="<?php if($post_count = 1){echo'active';} ?>"></li>
					<?php endwhile; endif; ?>
				  </ol>

			  <!-- Wrapper for slides -->
			  <?php $post_count1= 0; ?>
			  <?php rewind_posts(); ?>
			  <div class="carousel-inner" role="listbox">
			
			  <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
				<?php $post_count1++; ?>
			<div class="item <?php if($post_count1 == 1){echo'active';} ?>">
			
				  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="">
				  <div class="carousel-caption">
					<a class="ins-cap" href="<?php the_permalink();?>"><?php the_title(); ?></a>
				  </div>
				</div>
			<?php endwhile; endif; ?>
			

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
				</div>
			<!--carosuel end-->
			</div>
			<div class="row">
			<div class="col-md-9">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			
			<article class="post" >
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p>	By <?php the_author_posts_link(); ?>
				On 
				<?php the_time('l, F jS, Y'); ?>
				In
				<?php the_category(','); ?>.
				 <a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a>
				</p>
			
			<hr />
		<?php the_excerpt(); ?>
		</article>
		<?php endwhile; else: ?>
		</div>
			<?php get_template_part('404'); ?>
		<?php endif;  ?>
        </div>
        
         
		  <?php get_sidebar('blog'); ?>
       
        </div>
      

      <?php get_footer(); ?>