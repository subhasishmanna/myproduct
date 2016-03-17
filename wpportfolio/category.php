<?php get_header(); ?>

<div class="grid_12 omega clearfix">
<p>Category: <?php single_cat_title(); ?></p>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'post'); ?>
<?php endwhile; else: ?>
<h1>No post found.</h1>
<?php endif; ?>
</div>
<?php get_template_part('content', 'testimonials'); ?>
<?php get_footer(); ?>