<?php
/**
 * Template Name: Welcome template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
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
			
			
			
					<?php
						$the_query = new WP_Query(array('post_type' => 'slide', 'posts_per_page' => 3,));

						// The Loop
						if ( $the_query->have_posts() ) {
					
						while ( $the_query->have_posts() ) {
					
						$the_query->the_post();
						$idd = get_the_ID();
						$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'slide-size' );
						echo '<li>';
						echo '<img src="'.$slide_img[0].'" alt="" />';
						echo '<div class="flex-caption">';
						echo '<h4>';
						the_title();
						echo '</h4>';
						
						$myExcerpt = get_the_excerpt();
						$tags = array("<p>", "</p>");
						$myExcerpt = str_replace($tags, "", $myExcerpt);
						echo '<p>';
						echo $myExcerpt.'<br>';
						echo '<a href="'. get_permalink( get_the_ID() ) . '" class="btn btn-theme">Learn More</a>';
						echo '</p>';
						echo '</div>';
						echo '</li>';
					}
					
				} 
				?>
	
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
						<h2><span>Moderna</span> WORDPRESS Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					
					<?php
						$the_query = new WP_Query(array('post_type' => 'services', 'posts_per_page' => 4,));

						// The Loop
						if ( $the_query->have_posts() ) {
					
						while ( $the_query->have_posts() ) {
					
						$the_query->the_post();
						$idd = get_the_ID();
						$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'slide-size' );
					?>
					
						
						
						<div class="col-md-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?php the_title(); ?></h4>
								<div class="icon">
								<i class="fa fa-<?php echo get_post_meta($idd, 'icon', true ); ?> fa-3x"></i>
								</div>
								<?php the_excerpt(); ?>
									
							</div>
							<div class="box-bottom">
								<a href="<?php echo get_permalink( get_the_ID() ); ?>">Learn more</a>
							</div>
						</div>
					</div>
						
						
						
						
						
						
						
					<?php	}
					
				} 
				?>
	

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
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
					
					
					
					
					<?php
						$the_query = new WP_Query(array('post_type' => 'work', 'posts_per_page' => 4,));

						// The Loop
						if ( $the_query->have_posts() ) {
					
						while ( $the_query->have_posts() ) {
					
						$the_query->the_post();
						$idd = get_the_ID();
						$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'work' );
					?>
					
						
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo the_title(); ?>" href="<?php echo $slide_img[0]; ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						
						<img src="<?php echo $slide_img[0]; ?>" alt="<?php echo the_excerpt(); ?>">
						</div>
						</li>
						
					<?php	}
					
				} 
				?>
					</ul>
					</section>
				</div>
				
			</div>
		</div>

	</div>
	</section>
	<?php get_footer(); ?>