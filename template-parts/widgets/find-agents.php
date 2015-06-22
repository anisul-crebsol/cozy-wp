<?php

/**
 * Agents widget class
 */

class WT_Cozy_Widget_Find_Agents extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_find_agents', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_find_agents', __('Cozy Sidebar Find Agents', 'cozy'), $widget_ops);
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
        $image = apply_filters( 'widget_image', empty( $instance['image'] ) ? '' : $instance['image'], $instance, $this->id_base );
        $search = apply_filters( 'widget_search', empty( $instance['search'] ) ? '' : $instance['search'], $instance, $this->id_base );
        ?>
<!-- BEGIN FIND AGENTS -->
<div id="find_agents" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">

    <form role="search" method="get" class="search-form" id="search-form" action="<?php echo home_url( '/' ); ?>">
        <?php
            if ( ! empty( $title ) ) {
            echo '<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">' . $title . '</h2>';
        }
        ?>

        <img src="<?php echo $image ?>" alt="" id="agents-img"/>
        <input type="hidden" value="" id="s" name="s">
        <select id="agents_country" name="agents_country" data-placeholder="Choose a country">
            <option value="">Select one</option>
            <?php
            $count = get_countries();
            if($count){
                foreach( $count as $country){ ?>
                    <option value="<?php echo $country ?>"><?php echo $country ?></option>
            <?php
                }
            }
            ?>
        </select>

        <select id="agents_state" name="agents_state" data-placeholder="Choose your state/region">
            <option value="">Select one</option>
        </select>

        <select id="agents_city" name="agents_city" data-placeholder="Choose your city">
            <option value="">Select one</option>
        </select>
        <input type="hidden" name="agent_search" value="agent_search" />
        <div class="form-actions">
            <button type="submit" class="btn btn-default">
            <?php
                if ($search) {
                    echo $search;
                }
                else {
                    echo 'Search';
                }
             ?>
             </button>
        </div>
    </form>
</div>
<!-- END FIND AGENTS -->

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
        if (!isset($image)){ $image = ""; }
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['image'] = strip_tags($new_instance['image']);
        $instance['search'] = strip_tags($new_instance['search']);
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
        $image = strip_tags($instance['image']);
        $search = strip_tags($instance['search']);

?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Image URL:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="text" value="<?php echo esc_attr($image); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('search'); ?>"><?php _e('Search Button Text:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('search'); ?>" name="<?php echo $this->get_field_name('search'); ?>" type="text" value="<?php echo esc_attr($search); ?>" /></p>

<?php
    }
}

