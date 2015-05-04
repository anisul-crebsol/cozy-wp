<?php
/**
 * Partners widget class
 *
 */
class WT_Widget_Partners extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'widget_partners', 'description' => __('Arbitrary text or HTML.'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('wt_cozy_partners', __('Sidebar Partners'), $widget_ops, $control_ops);
	}

	public function widget( $args, $instance ) {

		/** This filter is documented in wp-includes/default-widgets.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		echo '<div class="col-sm-12" data-animation-direction="from-bottom" data-animation-delay="200">';
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<div id="partners">	
			<?php global $wt_cozy; ?>					
			<?php 
				$page_id = ($wt_cozy['opt_select_partners']);
				$entries = get_post_meta( $page_id, '_wt_partners_repeat_group', true );
				
				foreach ( (array) $entries as $key => $entry ) {
					$mouseOverImg = $entry['partner_image_hover'];
					$partners_image = $entry['partner_image'];
					if($partners_image) : $partners_image = $partners_image; else : $partners_image = 'http://placehold.it/194x45'; endif;			
				 ?>
				<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
				<a href="<?php echo $entry['partner_link']; ?>"><img src="<?php echo $partners_image; ?>" alt='' <?php if($mouseOverImg): echo $mouseOverImage = "onmouseover=\"this.src='$mouseOverImg';\"  onmouseout=\"this.src='$partners_image';\""; endif; ?> ></img></a>
				</div>								
			<?php }	?>	
		</div>
		<?php
		echo '</div>';
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['filter'] = ! empty( $new_instance['filter'] );
		return $instance;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = esc_textarea($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'cozy'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

<?php
	}
}