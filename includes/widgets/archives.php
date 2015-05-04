<?php

/**
 * Archives widget class
 */

class WT_Widget_Cozy_Archives extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_cozy_archives', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_archives', __('Sidebar Archives', 'cozy'), $widget_ops);
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
        $c = ! empty( $instance['count'] ) ? '1' : '0';
        $d = ! empty( $instance['dropdown'] ) ? '1' : '0';

        /** This filter is documented in wp-includes/default-widgets.php */
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Archives' ) : $instance['title'], $instance, $this->id_base );

        echo $args['before_widget'];
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        if ( $d ) {
            $dropdown_id = "{$this->id_base}-dropdown-{$this->number}";
?>
        <label class="screen-reader-text" for="<?php echo esc_attr( $dropdown_id ); ?>"><?php echo $title; ?></label>
        <select id="<?php echo esc_attr( $dropdown_id ); ?>" name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
            <?php
            /**
             * Filter the arguments for the Archives widget drop-down.
             *
             * @since 2.8.0
             *
             * @see wp_get_archives()
             *
             * @param array $args An array of Archives widget drop-down arguments.
             */
            $dropdown_args = apply_filters( 'widget_archives_dropdown_args', array(
                'type'            => 'monthly',
                'format'          => 'option',
                'show_post_count' => $c
            ) );

            switch ( $dropdown_args['type'] ) {
                case 'yearly':
                    $label = __( 'Select Year', 'cozy' );
                    break;
                case 'monthly':
                    $label = __( 'Select Month', 'cozy' );
                    break;
                case 'daily':
                    $label = __( 'Select Day', 'cozy' );
                    break;
                case 'weekly':
                    $label = __( 'Select Week', 'cozy' );
                    break;
                default:
                    $label = __( 'Select Post', 'cozy' );
                    break;
            }
            ?>

            <option value=""><?php echo esc_attr( $label ); ?></option>
            <?php wp_get_archives( $dropdown_args ); ?>

        </select>
<?php
        } else {
?>
<div id="accordion" class="panel-group blog-accordion">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul>
                <?php
                        /**
                         * Filter the arguments for the Archives widget.
                         *
                         * @since 2.8.0
                         *
                         * @see wp_get_archives()
                         *
                         * @param array $args An array of Archives option arguments.
                         */
                        wp_get_archives( apply_filters( 'widget_archives_args', array(
                            'type'            => 'yearly',
                            'show_post_count' => $c
                        ) ) );
                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        }

        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $new_instance = wp_parse_args( (array) $new_instance, array( 'title' => '', 'count' => 0, 'dropdown' => '') );
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['count'] = $new_instance['count'] ? 1 : 0;
        $instance['dropdown'] = $new_instance['dropdown'] ? 1 : 0;

        return $instance;
    }

    public function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'count' => 0, 'dropdown' => '') );
        $title = strip_tags($instance['title']);
        $count = $instance['count'] ? 'checked="checked"' : '';
        $dropdown = $instance['dropdown'] ? 'checked="checked"' : '';
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
        <p>
            <input class="checkbox" type="checkbox" <?php echo $dropdown; ?> id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" /> <label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e('Display as dropdown','cozy'); ?></label>
            <br/>
            <input class="checkbox" type="checkbox" <?php echo $count; ?> id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" /> <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Show post counts','cozy'); ?></label>
        </p>
<?php
    }
}