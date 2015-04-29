<?php

/**
 * Newsletter widget class
 */

class WT_Widget_Newsletter extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_newsletter', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_newsletter', __('Sidebar Newsletter'), $widget_ops);
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

        global $wt_cozy; 

        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $title2 = apply_filters( 'widget_title2', empty( $instance['title2'] ) ? '' : $instance['title2'], $instance );
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
        $placeholder = apply_filters( 'widget_placeholder', empty( $instance['placeholder'] ) ? '' : $instance['placeholder'], $instance );
        $subscribe = apply_filters( 'widget_subscribe', empty( $instance['subscribe'] ) ? '' : $instance['subscribe'], $instance );
        ?>
        <!-- BEGIN NEWSLETTER -->
        <div class="col-sm-12" data-animation-direction="from-bottom" data-animation-delay="200">

            <div id="newsletter" class="col-sm-12">
                <h2 class="section-title"><?php echo $title; ?><br><span><?php echo $title; ?></span></h2>
                <p><?php echo $text; ?></p>
                <div class="newsletter newsletter-subscription">
                    <form method="post" action="<?php echo plugin_dir_url('') .'newsletter/do/subscribe.php' ?>" onsubmit="return newsletter_check(this)">
                        <div class="input-group">
                            <input class="newsletter-email form-control" type="email" placeholder="<?php echo $placeholder; ?>" name="ne" size="30" required>
                            <?php if ( is_page_template('page-home-search.php')) { ?>
                            <span class="input-group-btn newsletter-td-submit">
                            <input class="newsletter-submit btn btn-default" type="submit" value="<?php echo $subscribe; ?>"/>
                            </span>
                            <?php }
                            else { ?>
                            <span class="input-group-btn newsletter-td-submit">
                            <input class="newsletter-submit btn btn-default-color" type="submit" value="<?php echo $subscribe; ?>"/>
                            </span>
                            <?php } ?> 
                        </div>  
                    </form>
                </div>
            </div>
        </div>
        <!-- END NEWSLETTER -->
        
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
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['title2'] = strip_tags($new_instance['title2']);
        $instance['placeholder'] = strip_tags($new_instance['placeholder']);
        $instance['subscribe'] = strip_tags($new_instance['subscribe']);
        if ( current_user_can('unfiltered_html') )
            $instance['text'] =  $new_instance['text'];
        else
            $instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
        $instance['filter'] = isset($new_instance['filter']);
        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */

    public function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
        $title = strip_tags($instance['title']);
        $title2 = strip_tags($instance['title2']);
        $text = strip_tags($instance['text']);
        $placeholder = strip_tags($instance['placeholder']);
        $subscribe = strip_tags($instance['subscribe']);

?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p><label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('2nd Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" type="text" value="<?php echo esc_attr($title2); ?>" /></p>

        <textarea class="widefat" rows="5" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

        <p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>

        <p><label for="<?php echo $this->get_field_id('placeholder'); ?>"><?php _e('Placeholder Text:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('placeholder'); ?>" name="<?php echo $this->get_field_name('placeholder'); ?>" type="text" value="<?php echo esc_attr($placeholder); ?>" /></p>

        <p><label for="<?php echo $this->get_field_id('subscribe'); ?>"><?php _e('Subscribe Button Text:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subscribe'); ?>" name="<?php echo $this->get_field_name('subscribe'); ?>" type="text" value="<?php echo esc_attr($subscribe); ?>" /></p>

<?php
    }
}
