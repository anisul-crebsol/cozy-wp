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

        global $wt_cozy; ?>
        <!-- BEGIN NEWSLETTER -->
        <div class="col-sm-12" data-animation-direction="from-bottom" data-animation-delay="200">
            <div id="newsletter" class="col-sm-12">
                <h2 class="section-title"><?php echo $wt_cozy['section_newsletter_title2']?><br><span><?php echo $wt_cozy['section_newsletter_title']?></span></h2>
                <p><?php echo $wt_cozy['section_newsletter_description']?></p>
                <div class="newsletter newsletter-subscription">
                    <form method="post" action="http://localhost/cozy-wp/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                        <div class="input-group">
                            <input class="newsletter-email form-control" type="email" name="ne" size="30" required>
                            <span class="input-group-btn newsletter-td-submit">
                            <input class="newsletter-submit btn btn-default" type="submit" value="Subscribe"/>
                            </span>
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