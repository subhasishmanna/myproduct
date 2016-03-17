<?php

/*Plugin Name: Subhasish popular post plugin.

Description: Show popular post.
Author: Subhasish Maanna
Version: 0.1

*/
function my_popular_post_view($postID){
	$total_key = 'views';
	//get the current 'views' field
	$total = get_post_meta($postID, $total_key, true);
	//if current 'views' field is empty , set it to zero
	if($total==''){
		delete_post_meta($postID, $total_key);
		add_post_meta($postID, $total_key, 0, true);
		
		} else {
			$total++;
			update_post_meta($postID, $total_key, $total);
		}
	
}


/*
* Dynamically inject counter into posts
*/
function my_count_popular_post($post_id){
// check that is a single post and that user login
if(!is_single()) return;
if(!is_user_logged_in()){
	//get post id
	if(empty($post_id)){
		global $post;
		$post_id = $post->ID;
		}
	// run post Popular post views count
	my_popular_post_view($post_id);
	}	
	
}
add_action('wp_head','my_count_popular_post');


// add popular post function to all data table
function my_add_views_column($defaults){
	$defaults['post_views'] = 'VIEW COUNT';
	return $defaults;
}
add_filter('manage_posts_columns','my_add_views_column');
function my_display_views($columns_name){
	if($columns_name ==='post_views'){
		echo (int) get_post_meta(get_the_ID(), 'views', true);
	}
}
add_action('manage_posts_custom_column','my_display_views');




/// WIDGET OF THIS PLUGIN
/**
 * Adds Popular widgett widget.
 */
class popular_posts extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'popular_posts', // Base ID
			__( 'popular Posts', 'text_domain' ), // Name
			array( 'description' => __( 'Five Most Popular Posts', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		//main start
		$query_args = array(
		'post_type'=>'post',
		'post_per_page'=>5,
		'meta_key'=>'views',
		'orderby'=>'meta_value_num',
		'order'=>'DESC',
		'ignore_sticky_posts'=> true
		);
	$the_query = new WP_Query($query_args);

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<ul>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				
				echo '<li>';
				echo '<a href="'.get_the_permalink().'" rel="bookmark">';
				echo get_the_title();
			echo '('.get_post_meta( get_the_ID(),'views', true).')';
				echo '</a>';
				echo'</li>';
			}
			echo '</ul>';
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		
		
		
		
		
		
		
		//main end
		echo $args['after_widget'];
		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Popular Posts', 'text_domain' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_popular_posts_widget() {
    register_widget( 'popular_posts' );
}
add_action( 'widgets_init', 'register_popular_posts_widget' );
