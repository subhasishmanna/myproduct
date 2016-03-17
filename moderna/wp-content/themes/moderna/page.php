<?php get_header(); ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php bloginfo('home'); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><i class="icon-angle-right"></i></li>
					
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		
		
	
	
		<!-- Descriptions -->
		<div class="row">
			<div class="col-md-12">
				<div class="inter-content">
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?> 
				<?php endwhile; ?>

					<?php else : ?>
						
							<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
						
					<?php endif; ?>
				
				
				</div>
			</div>
		
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		
	
	
	</div>
	</section>
	<?php get_footer(); ?>