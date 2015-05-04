<?php

/**
 * Property Search widget class
 */

class WT_Widget_Property_Search extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_property_search', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_property_search', __('Sidebar Property Search', 'cozy'), $widget_ops);
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
        
        /** BEGIN SIDEBAR ABOUT WIDGET */

        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        /**
         * Filter the content of the Text widget.
         *
         * @since 2.3.0
         *
         * @param string    $widget_text The widget content.
         * @param WP_Widget $instance    WP_Widget instance.
         */
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
?>
<!-- BEGIN ADVANCED SEARCH -->
<h2 class="section-title">Search Property</h2>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group">

        <div class="col-sm-12">
            <input type="hidden" name="s">
            <input type="hidden" name="advancedSearch" value="advancedSearch">
            <input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">

            <select class="col-sm-12" id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
                <option value=""> </option>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="land">Land</option>
            </select>

            <select id="search_status" name="search_status" data-placeholder="Status">
                <option value=""> </option>
                <option value="for-sale">For Sale</option>
                <option value="for-rent">For Rent</option>
            </select>
        </div>

        <div class="col-md-6">
            <select id="search_minarea" name="search_minarea" data-placeholder="Min. Area">
                <option value=""> </option>
                <option value="50">50m2</option>
                <option value="100">100m2</option>
                <option value="150">150m2</option>
                <option value="200">200m2</option>
                <option value="300">300m2</option>
                <option value="500">500m2</option>
                <option value="700">700m2</option>
                <option value="1000">1000m2</option>
            </select>

        </div>

        <div class="col-md-6">
            <select id="search_maxarea" name="search_maxarea" data-placeholder="Max. Area">
                <option value=""> </option>
                <option value="50">50m2</option>
                <option value="100">100m2</option>
                <option value="150">150m2</option>
                <option value="200">200m2</option>
                <option value="300">300m2</option>
                <option value="500">500m2</option>
                <option value="700">700m2</option>
                <option value="1000">1000m2</option>
            </select>
        </div>

        <div class="col-sm-12">
            <select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
                <option value=""> </option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="5plus">5+</option>
            </select>

            <select id="search_bathrooms" name="search_bathrooms" data-placeholder="Bathrooms">
                <option value=""> </option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="4plus">4+</option>
            </select>
        </div>

        <div class="col-md-6">
            <select id="search_minprice" name="search_minprice" data-placeholder="Min. Price">
                <option value=""> </option>
                <option value="0">$0</option>
                <option value="25000">$25000</option>
                <option value="50000">$50000</option>
                <option value="75000">$75000</option>
                <option value="100000">$100000</option>
                <option value="150000">$150000</option>
                <option value="200000">$200000</option>
                <option value="300000">$300000</option>
                <option value="500000">$500000</option>
                <option value="750000">$750000</option>
                <option value="1000000">$1000000</option>
            </select>
        </div>

        <div class="col-md-6">
            <select id="search_maxprice" name="search_maxprice" data-placeholder="Max. Price">
                <option value=""> </option>
                <option value="25000">$25000</option>
                <option value="50000">$50000</option>
                <option value="75000">$75000</option>
                <option value="100000">$100000</option>
                <option value="150000">$150000</option>
                <option value="200000">$200000</option>
                <option value="300000">$300000</option>
                <option value="500000">$500000</option>
                <option value="750000">$750000</option>
                <option value="1000000">$1000000</option>
                <option value="1000000plus">>$1000000</option>
            </select>
        </div>

        <p>&nbsp;</p>
        <p class="center">
            <button type="submit" class="btn btn-default-color">Search</button>
        </p>
    </div>
</form>
<!-- END ADVANCED SEARCH -->
<?php
		
    }
	
    /** END SIDEBAR ABOUT WIDGET */


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
        $text = esc_textarea($instance['text']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
<?php
    }
}
