<?php

/**
 * Info widget class
 */

class WT_Widget_Listings extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_listings', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_listings', __('Footer Latest Listings'), $widget_ops);
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

        global $wt_cozy; ?>
        <!-- BEGIN LATEST LISTINGS -->
                    <div class="block col-sm-3">
                        <h3>Latest Listings</h3>
                        <ul class="footer-listings">
                            <?php
                            $delay = 250;
                            //$display_posts = get_option();
                            $listing_args = array(
                                'post_type' => 'listing',
                                'tax_query' => array(
                                    array(
                                        'taxonomy'  => 'status',
                                        'field'     => 'slug',
                                        'terms'     => array( 'featured' ),
                                        'operator'  => 'NOT IN',
                                    ),
                                ),
                                'showposts' => 3 //$display_posts
                            );
                            query_posts($listing_args);
                            if (have_posts()) : while (have_posts()) : the_post();
                            
                            $listing_status = wp_listings_get_status();
                            $listing_price = get_post_meta( $post->ID, '_listing_price', true);
                            $listing_address = get_post_meta( $post->ID, '_listing_address', true);
                            $listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
                            $listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
                            $listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );
                            ?>
                            <li>
                                <div class="image">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        echo get_the_post_thumbnail($post->ID, array( 58, 58 ));
                                    }
                                    else {
                                        echo '<img src="http://placehold.it/58x58" />';
                                    }
                                    ?>
                                    </a>
                                </div>
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span>+</span></a></p>
                            </li>
                            <?php $delay+=200; endwhile; endif; wp_reset_query(); ?>
                        </ul>
                    </div>
        <!-- END LATEST LISTINGS -->
        
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

    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */

    public function form( $instance ) {

    }
}