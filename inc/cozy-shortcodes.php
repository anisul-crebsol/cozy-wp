<?php
function pricing_table_1_shortcode() {
?>
<!-- BEGIN PRICING TABLES STYLE 1 -->
<div class="container">
	<div class="pricing clearfix">
		<?php
		$pricing_table_args = array(
			'post_type' => 'price-table',
			'post_status' => 'publish',
			'order' => 'ASC',
			'posts_per_page' => 3
		);
		$pricing_table = new WP_Query($pricing_table_args);

			while ($pricing_table->have_posts()) : $pricing_table->the_post();

			$price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
			$tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
			$package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
			$package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
			$price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);
		?>
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
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
<!-- END PRICING TABLES -->
<?php
    }
add_shortcode('price_table_1', 'pricing_table_1_shortcode');



function pricing_table_2_shortcode() {
?>
<!-- BEGIN PRICING TABLES STYLE 2 -->
<div class="gray-bg content clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
				$price_table_args = array(
					'post_type' => 'price-table',
					'post_status' => 'publish',
					'order' => 'ASC',
					'posts_per_page' => 4
				);
				$price_table_data2 = new WP_Query($price_table_args);

				while ($price_table_data2->have_posts()) : $price_table_data2->the_post();

					$price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
					$tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
					$package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
					$package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
					$price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);
				?>
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
			</div>
		</div>
	</div>
</div>
<!-- END PRICING TABLES STYLE 2 -->
<?php
}
add_shortcode('price_table_2', 'pricing_table_2_shortcode');



function pricing_table_3_shortcode() {
?>

<!-- BEGIN PRICING TABLES STYLE 3 -->
<div class="container">
    <div class="pricing style3">
        <?php
        $price_table_args = array(
            'post_type' => 'price-table',
            'post_status' => 'publish',
            'order' => 'ASC',
        );
        $price_table_data2 = new WP_Query($price_table_args);

        while ($price_table_data2->have_posts()) : $price_table_data2->the_post();

        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
        $tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
        $package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
        $package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
        $price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);
?>
        <div class="item col-sm-12 <?php if ($price_table_featured == 'on') { echo 'featured'; }
        ?>" data-animation-direction="from-top" data-animation-delay="250">
            <header>
                <h2><?php
                    the_title();
                    if ($price_table_featured == 'on') {
                        ?>
                        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip_description; ?>"></i>                                          
                        <?php
                    }
                    ?></h2>
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
        <?php wp_reset_postdata(); endwhile; ?>
    </div>
</div>
<!-- END PRICING TABLES STYLE 3-->
<?php
}

add_shortcode('price_table_3', 'pricing_table_3_shortcode');



function pricing_table_4_shortcode() {
?>
<!-- BEGIN PRICING TABLES STYLE 4 -->
<?php
$price_table_args = array(
    'post_type' => 'price-table',
    'post_status' => 'publish',
    'order' => 'ASC',
);
$price_table_data2 = new WP_Query($price_table_args);

if ($price_table_data2->have_posts()) :
    $price_feature_count = 1;
    while ($price_table_data2->have_posts()) :
        $price_table_data2->the_post();
        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
        //#pricing-free
        if ($price_feature_count % 2 == 1) {
            $div_class = 'left';
        } else {
            $div_class = 'right';
        }

        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
        $image = get_post_meta(get_the_id(), '_wt_price_image', true);
		$tooltip_description = get_post_meta(get_the_id(), '_wt_tooltip_description', true);
		$package_price = get_post_meta(get_the_id(), '_wt_package_price', true);
		$package_time = get_post_meta(get_the_id(), '_wt_package_time', true);
        ?>

        <style>
            #pricing-standard<?php echo $price_feature_count; ?>{
                background-image: url("<?php echo $image; ?>");
            }
            #pricing-free<?php echo $price_feature_count; ?> {
                background-image: url("<?php echo $image; ?>");
            }
        </style>
        <div class="pricing style4" id="<?php
        if (($price_feature_count % 2) == 1) {
            echo 'pricing-free' . $price_feature_count;
        } else {
            echo 'pricing-standard' . $price_feature_count;
        }
        ?>">
            <div class="container">
                <div class="row">
                    <div class="item col-sm-12 <?php echo $div_class; ?>" data-animation-direction="from-<?php echo $div_class; ?>" data-animation-delay="50" style=" padding-right: 7%;">
                        <a href="<?php echo esc_url( home_url( '/register/' ) ); ?>">
                            <h2> <?php
                                the_title();
                                if ($price_table_featured == 'on') {
                                    ?>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip_description; ?>"></i>
                                <?php } ?></h2>
                            <span class="price">
                                <?php echo $package_price; ?>
                                <small> <?php echo $package_time; ?></small>
                            </span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $price_feature_count++; endwhile; wp_reset_postdata(); endif;
}
add_shortcode('price_table_4', 'pricing_table_4_shortcode');



// Add FAQ Shortcode
function faq_shortcode() {
    ?>
    <?php
    $terms = get_terms_by_post_type(array('faq_category'), array('faq'));
    $total_terms_count = count($terms);
    $term_count = 1;
    foreach ($terms as $term) {
        ?>
        <h3><?php echo $term->name; ?></h3>
        <div id="accordion<?php echo $term_count; ?>" class="panel-group">
            <?php
            // WP_Query arguments

            $args = array(
                'post_type' => 'faq',
                'post_status' => 'publish',
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'faq_category',
                        'field' => 'slug', 
                        'terms' => array($term->slug), 
                        'include_children' => true, 
                        'operator' => 'IN'
                    )
                )
            );

            $get_faq_query = new WP_Query($args);
            if ($get_faq_query->have_posts()) {
                $term_post_count = 1;
                while ($get_faq_query->have_posts()) {
                    $get_faq_query->the_post();

                    $faq_content = get_post_meta(get_the_id(), '_wt_faq_content', true);
                    ?>
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion<?php echo $term_count; ?>" href="#collapseOne<?php echo $term_count . $term_post_count; ?>" class="collapsed">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne<?php echo $term_count . $term_post_count; ?>" class="panel-collapse collapse">

                    <div class="panel-body">

                        <?php echo $faq_content; ?>
                    </div>
                </div>
            </div>

        <?php
            $term_post_count++;
            }
        } else {

            }
            wp_reset_postdata(); $term_count++;
            echo '</div>';
        }
        ?>

        <?php
    }

add_shortcode('faq', 'faq_shortcode');



    add_shortcode('more_info_2', 'more_information_style2');

    function more_information_style2() {

        // sidebars_widgets
        $widget_more_information = get_option('widget_cozy_widget_more_information');
        $total_count = count($widget_more_information);
        ?>
        <div class="col-md-6">
            <ul class="nav nav-justified nav-tabs">
                <?php
                $count_tab = 1;

                foreach ($widget_more_information as $data) {
                    if ($count_tab < $total_count) {
                        if ($count_tab == 1) {
                            $active = 'active';
                        } else {
                            $active = '';
                        }
                        echo '<li class="' . $active . '"><a href="#s2tab' . $count_tab . '" data-toggle="tab">' . $data['tabname'] . '</a></li>';
                        //   var_dump($data);
                        $count_tab++;
                    }
                }
                ?>     
            </ul>

            <div class="tab-content"> 

                <?php
                $count_tab1 = 1;
                foreach ($widget_more_information as $data) {
                    if ($count_tab1 == 1) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    if ($count_tab1 < $total_count) {
                        ?>
                        <div class="tab-pane <?php echo $active; ?>" id="s2tab<?php echo $count_tab1; ?>">
                            <h4><?php echo $data['title']; ?></h4>
                            <img src="<?php echo $data['img_url']; ?>" alt="" />
                            <?php echo $data['more_info_desc']; ?>    
                        </div>
                        <?php
                    }
                    $count_tab1++;
                }
                ?>
            </div>

        </div>

        <?php
    }

    add_shortcode('more_info_1', 'more_information_style1');

    function more_information_style1() {

        // sidebars_widgets
        $widget_more_information = get_option('widget_cozy_widget_more_information');
        $total_count = count($widget_more_information);
        ?>
        <div class="col-md-6">
            <ul class="nav nav-tabs tabs-left">
                <?php
                $count_tab = 1;

                foreach ($widget_more_information as $data) {
                    if ($count_tab == 1) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    if ($count_tab < $total_count) {
                        echo '<li class="' . $active . '"><a href="#s1tab' . $count_tab . '" data-toggle="tab">' . $data['tabname'] . '</a></li>';
                    }
                    $count_tab++;
                }
                ?>  

            </ul>

            <div class = "tab-content tabs-left">
                <?php
                $count_tab1 = 1;
                foreach ($widget_more_information as $data) {
                    if ($count_tab1 == 1) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    if ($count_tab1 < $total_count) {
                        ?>

                        <div class = "tab-pane <?php echo $active; ?>" id = "s1tab<?php echo $count_tab1; ?>">
                            <h4><?php echo $data['title']; ?></h4>
                            <img src="<?php echo $data['img_url']; ?>" alt="" />
                            <?php echo $data['more_info_desc']; ?>    
                        </div>
                        <?php
                    }
                    $count_tab1++;
                }
                ?>

            </div>
        </div>

        <?php
    }

add_shortcode('cozy_icon_pack', 'cozy_icon_pack_shortcode');

function cozy_icon_pack_shortcode() {
    ?>
    <!-- BEGIN REAL ESTATE CUSTOM ICON PACK -->
    
    <?php return'
    <ul class="icon-list">
        <li><i class="icon-house"></i></li>
        <li><i class="icon-house2"></i></li>
        <li><i class="icon-apartment"></i></li>
        <li><i class="icon-store"></i></li>
        <li><i class="icon-land"></i></li>
        <li><i class="icon-factory"></i></li>
        <li><i class="icon-bedrooms"></i></li>
        <li><i class="icon-bathrooms"></i></li>
        <li><i class="icon-garage"></i></li>
        <li><i class="icon-pool"></i></li>
        <li><i class="icon-garden"></i></li>
        <li><i class="icon-area"></i></li>
        <li><i class="icon-pets"></i></li>
        <li><i class="icon-no-pets"></i></li>
        <li><i class="icon-security"></i></li>
        <li><i class="icon-key"></i></li>
        <li><i class="icon-lock"></i></li>
        <li><i class="icon-sale-sign"></i></li>
        <li><i class="icon-rent-sign"></i></li>
        <li><i class="icon-sold-sign"></i></li>
        <li><i class="icon-rented-sign"></i></li>
        <li><i class="icon-find-property"></i></li>
        <li><i class="icon-find-agent"></i></li>
        <li><i class="icon-rooms"></i></li>
        <li><i class="icon-house-usd"></i></li>
        <li><i class="icon-house2-usd"></i></li>
        <li><i class="icon-apartment-usd"></i></li>
        <li><i class="icon-store-usd"></i></li>
        <li><i class="icon-land-usd"></i></li>
        <li><i class="icon-factory-usd"></i></li>
        <li><i class="icon-house-euro"></i></li>
        <li><i class="icon-house2-euro"></i></li>
        <li><i class="icon-apartment-euro"></i></li>
        <li><i class="icon-store-euro"></i></li>
        <li><i class="icon-land-euro"></i></li>
        <li><i class="icon-factory-euro"></i></li>
        <li><i class="icon-house-gbp"></i></li>
        <li><i class="icon-house2-gbp"></i></li>
        <li><i class="icon-apartment-gbp"></i></li>
        <li><i class="icon-store-gbp"></i></li>
        <li><i class="icon-land-gbp"></i></li>
        <li><i class="icon-factory-gbp"></i></li>
        <li><i class="icon-house-search"></i></li>
        <li><i class="icon-house2-search"></i></li>
        <li><i class="icon-apartment-search"></i></li>
        <li><i class="icon-store-search"></i></li>
        <li><i class="icon-land-search"></i></li>
        <li><i class="icon-factory-search"></i></li>
        <li><i class="icon-house-percent"></i></li>
        <li><i class="icon-house2-percent"></i></li>
        <li><i class="icon-apartment-percent"></i></li>
        <li><i class="icon-store-percent"></i></li>
        <li><i class="icon-land-percent"></i></li>
        <li><i class="icon-factory-percent"></i></li>
    </ul>' ?>
    <!-- END REAL ESTATE CUSTOM ICON PACK -->

    <?php
}


function get_terms_by_post_type($taxonomies, $post_types) {
    global $wpdb;
    $query = $wpdb->get_results("SELECT t.*, COUNT(*) AS count from $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id WHERE p.post_type IN('" . join("', '", $post_types) . "') AND tt.taxonomy IN('" . join("', '", $taxonomies) . "') GROUP BY t.term_id");
    return $query;
}