<?php

/**
 * Agents widget class
 */

class WT_Widget_Find_Agents extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_find_agents', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_agents', __('Sidebar Find Agents'), $widget_ops);
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
<!-- BEGIN FIND AGENTS -->
<div id="find_agents" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">

    <form role="search" method="get" class="search-form" id="search-form" action="<?php echo home_url( '/' ); ?>">
        <h2 class="section-title">Find An Agent</h2>
        <img src="http://placehold.it/307x188" alt="" id="agents-img"/>

        <select id="agents_country" name="s" data-placeholder="Choose a country">
            <option value=""> </option>
            <?php
            // position is a meta key and ourteam is a custom post type for my project
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
            <option value=""> </option>
        </select>

        <select id="agents_city" name="agents_city" data-placeholder="Choose your city">
            <option value=""> </option>
        </select>
        <input type="hidden" name="agent_search" value="agent_search" />
        <div class="form-actions">
            <button type="submit" class="btn btn-default">Search</button>
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

