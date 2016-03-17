<?php get_header();?>


<section class="posts" id="postsindex" >
	<div class="container">
		<div class="row" >
			<div class="col-lg-12"  >
			
				<div class="row">
				<div class="col-md-3" style="background:rgba(243, 243, 249, 0.34);">
				<?php $usr = get_user_meta(get_current_user_id(), 'nickname', true);  
			//echo  $usr;
			get_sidebar('post');
			
			
			?>
				</div>
				<div class="col-md-8" style="background:red; float:right;">
				
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div class="index-posts">
				<div class="index-posts-heading">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="index-posts-exc">
				<?php the_excerpt(); ?> 
				</div>
				
				
				</div>
				</div>
				<?php endwhile; ?>

					<?php else : ?>
						
							<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
						
					<?php endif; ?>
				</div>
				
				
				</div>
			</div>
		</div>
	</div>

	
	</section>



<?php get_footer();?>