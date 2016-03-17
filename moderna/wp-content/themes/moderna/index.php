<?php get_header(); ?>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Fully responsive</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Modern Style</h4>
								<div class="icon">
								<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Customizable</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Valid HTML5</h4>
								<div class="icon">
								<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
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
		<!-- Portfolio Projects -->
		
		<?php echo do_shortcode('[portfolio]'); ?>

	</div>
	
	</section>
	<!-- posts sections -->
	
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
				<div class="col-md-9">
				
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
	
	
	
	<!-- end sections -->
	<?php get_footer(); ?>