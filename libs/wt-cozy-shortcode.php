<?php
function pricing_table_1_shortcode() {
?>
<!-- BEGIN PRICING TABLES STYLE 1 -->

<?php
$pricing_table_args = array(
	'post_type' => 'price-table',
	'post_status' => 'publish',
	'order' => 'ASC'
);
$pricing_table = new WP_Query($pricing_table_args);

	while ($pricing_table->have_posts()) : $pricing_table->the_post();

	$price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
	$tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
	$package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
	$package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
	$price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);
?>

	<div class="pricing clearfix">		
		<div class="item col-sm-4 <?php if ($price_table_featured == 'on') { echo 'featured'; }; ?>" data-animation-direction="from-left" data-animation-delay="350">
			<header>
				<h2><?php
					the_title();
					if ($price_table_featured == 'on') {
						?>
						<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip_description; ?>"></i>
						<?php
					}
					?>
				</h2>
				<div class="price">
					<?php echo $package_price; ?>
					<small> <?php echo $package_time; ?></small>
				</div>
			</header>
			<ul>
				<?php
				foreach ($price_table_group as $key => $value) {
					if ($value['price_feature_disable'] == 'on') {
						echo '<li class="disabled">' . $value['price_feature_text'] . '</li>';
					} else {
						echo '<li>' . $value['price_feature_text'] . '</li>';
					}
				}
				?>
			</ul>
			<a href="<?php echo esc_url( home_url( '/register/' ) ); ?>" class="btn btn-default-color"><?php _e('Sign Up', 'cozy'); ?></a>
		</div>
	</div>
	
	<?php endwhile; wp_reset_postdata(); ?>
<!-- END PRICING TABLES -->
<?php
    }
add_shortcode('price_table_1', 'pricing_table_1_shortcode');



function pricing_table_2_shortcode() {
?>
<!-- BEGIN PRICING TABLES STYLE 2 -->

<?php
$price_table_args = array(
	'post_type' => 'price-table',
	'post_status' => 'publish',
	'order' => 'ASC'
);
$price_table_data2 = new WP_Query($price_table_args);

while ($price_table_data2->have_posts()) : $price_table_data2->the_post();

	$price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
	$tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
	$package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
	$package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
	$price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);
?>

	<div class="gray-bg content clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="pricing style2">
						<div class="item col-md-3 <?php if ($price_table_featured == 'on') { echo 'featured'; } ?>" data-animation-direction="from-left" data-animation-delay="250">
							<header>
								<h2>
								<?php
									the_title();
									if ($price_table_featured == 'on') {
								?>
									<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="<?php echo $tooltip_description; ?>"></i> 
								<?php } ?>
								</h2>
								<div class="price">
									<?php echo $package_price; ?>
									<small> <?php echo $package_price; ?></small>
								</div>
							</header>
							<ul>
								<?php
								foreach ($price_table_group as $key => $value) {
									if ($value['price_feature_disable'] == 'on') {
										echo '<li class="disabled">' . $value['price_feature_text'] . '</li>';
									} else {
										echo '<li>' . $value['price_feature_text'] . '</li>';
									}
								}
								?>
							</ul>
							<a href="<?php echo esc_url( home_url( '/register/' ) ); ?>" class="btn btn-default-color"><?php _e('Sign Up', 'cozy'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php endwhile; wp_reset_postdata(); ?>
<!-- END PRICING TABLES STYLE 2 -->
<?php
}
add_shortcode('price_table_2', 'pricing_table_2_shortcode');



function get_terms_by_post_type($taxonomies, $post_types) {
    global $wpdb;
    $query = $wpdb->get_results("SELECT t.*, COUNT(*) AS count from $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id WHERE p.post_type IN('" . join("', '", $post_types) . "') AND tt.taxonomy IN('" . join("', '", $taxonomies) . "') GROUP BY t.term_id");
    return $query;
}