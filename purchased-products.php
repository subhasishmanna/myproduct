<ul class="products">
    <?php
        $user_id = get_current_user_id();
        $current_user= wp_get_current_user();
        $customer_email = $current_user->email;
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
            );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); $_product = get_product( $loop->post->ID );
            if (wc_customer_bought_product($customer_email, $user_id,$_product->id)){
                woocommerce_get_template_part( 'content', 'product' );
            }
            endwhile;
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
    ?>
</ul><!--/.products-->