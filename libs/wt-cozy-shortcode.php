<?php

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
                        'field' => 'slug', //(string) - Select taxonomy term by ('id' or 'slug')
                        'terms' => array($term->slug), //(int/string/array) - Taxonomy term(s).
                        'include_children' => true, //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
                        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
            );

// The Query
            $get_faq_query = new WP_Query($args);

// The Loop
            if ($get_faq_query->have_posts()) {
                $term_post_count = 1;
                while ($get_faq_query->have_posts()) {
                    $get_faq_query->the_post();
                    // do something
// the_title();
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
                                <?php
                                echo get_post_meta(get_the_id(), '_wt_faq_content', true);
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $term_post_count++;
                }
            } else {

                // no posts found
            }

// Restore original Post Data
            wp_reset_postdata();
            $term_count++;
            echo '</div>';
        }
        ?>

        <?php
    }
    add_shortcode('faq', 'faq_shortcode');

// price table shortcode style 1
    function price_table_1_shortcode() {
        // The Query
        ?>
        <!-- BEGIN MAIN CONTENT -->
        <div class="main col-sm-12">
            <!-- BEGIN PRICING TABLES -->
            <div class="pricing">
                <?php
                $price_table_args = array(
                    'post_type' => 'price-table',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );
                $price_table_data = new WP_Query($price_table_args);

                if ($price_table_data->have_posts()) {

                    while ($price_table_data->have_posts()) {

                        $price_table_data->the_post();
                        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
                        ?>
                        <div class="item col-sm-4 <?php
                        if ($price_table_featured == 'on') {
                            echo 'featured';
                        }
                        ?>" data-animation-direction="from-left" data-animation-delay="350">
                            <header>
                                <h2><?php
                                    the_title();
                                    if ($price_table_featured == 'on') {
                                        ?>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta(get_the_id(), '_wt_tooltrip_description', true); ?>"></i>
                                        <?php
                                    }
                                    ?></h2>

                                <div class="price">
                                    <?php echo get_post_meta(get_the_id(), '_wt_package_price', true); ?>
                                    <small> <?php echo get_post_meta(get_the_id(), '_wt_package_time', true); ?></small>
                                </div>
                            </header>
                            <ul>
                                <?php
                                $price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);

                                foreach ($price_table_group as $key => $value) {
                                    if ($value['price_feature_disable'] == 'on') {
                                        echo '<li class="disabled">' . $value['price_feature_text'] . '</li>';
                                    } else {
                                        echo '<li>' . $value['price_feature_text'] . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo get_home_url(); ?>/register" class="btn btn-default-color">Sign Up</a>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>                 
            </div>
        </div>
        <!-- END PRICING TABLES -->
        <?php
    }

    add_shortcode('price_table_1', 'price_table_1_shortcode');

// price table shortcode style 2
    function price_table_2_shortcode() {
        // The Query
        ?>
        <!-- BEGIN MAIN CONTENT -->
        <div class="main col-sm-12">
            <!-- BEGIN PRICING TABLES STYLE 2 -->
            <div class="pricing style2">
                <?php
                $price_table_args = array(
                    'post_type' => 'price-table',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );
                $price_table_data2 = new WP_Query($price_table_args);

                if ($price_table_data2->have_posts()) {

                    while ($price_table_data2->have_posts()) {
                        $price_table_data2->the_post();
                        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
                        ?>
                        <div class="item col-md-3 <?php
                        if ($price_table_featured == 'on') {
                            echo 'featured';
                        }
                        ?>" data-animation-direction="from-left" data-animation-delay="250">
                            <header>
                                <h2><?php
                                    the_title();
                                    if ($price_table_featured == 'on') {
                                        ?>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="<?php echo get_post_meta(get_the_id(), '_wt_tooltrip_description', true); ?>"></i>                                          
                                        <?php
                                    }
                                    ?></h2>
                                <div class="price">
                                    <?php echo get_post_meta(get_the_id(), '_wt_package_price', true); ?>
                                    <small> <?php echo get_post_meta(get_the_id(), '_wt_package_time', true); ?></small>
                                </div>
                            </header>
                            <ul>
                                <?php
                                $price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);

                                foreach ($price_table_group as $key => $value) {
                                    if ($value['price_feature_disable'] == 'on') {
                                        echo '<li class="disabled">' . $value['price_feature_text'] . '</li>';
                                    } else {
                                        echo '<li>' . $value['price_feature_text'] . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo get_home_url(); ?>/register" class="btn btn-default-color">Sign Up</a>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- END PRICING TABLES -->
        <?php
    }

    add_shortcode('price_table_2', 'price_table_2_shortcode');

// price table shortcode style 3
    function price_table_3_shortcode() {
        // The Query
        ?>
        <!-- BEGIN MAIN CONTENT -->
        <div class="main col-sm-12">
            <!-- BEGIN PRICING TABLES STYLE 2 -->
            <div class="pricing style3">
                <?php
                $price_table_args = array(
                    'post_type' => 'price-table',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );
                $price_table_data2 = new WP_Query($price_table_args);

                if ($price_table_data2->have_posts()) {

                    while ($price_table_data2->have_posts()) {
                        $price_table_data2->the_post();
                        $price_table_featured = get_post_meta(get_the_id(), '_wt_featured_checkbox', true);
                        ?>
                        <div class="item col-sm-12 <?php
                        if ($price_table_featured == 'on') {
                            echo 'featured';
                        }
                        ?>" data-animation-direction="from-top" data-animation-delay="250">
                            <header>
                                <h2><?php
                                    the_title();
                                    if ($price_table_featured == 'on') {
                                        ?>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta(get_the_id(), '_wt_tooltrip_description', true); ?>"></i>                                          
                                        <?php
                                    }
                                    ?></h2>
                                <div class="price">
            <?php echo get_post_meta(get_the_id(), '_wt_package_price', true); ?>
                                    <small> <?php echo get_post_meta(get_the_id(), '_wt_package_time', true); ?></small>
                                </div>
                            </header>
                            <ul>
                                <?php
                                $price_table_group = get_post_meta(get_the_id(), '_wt_repeat_group', true);

                                foreach ($price_table_group as $key => $value) {
                                    if ($value['price_feature_disable'] == 'on') {
                                        echo '<li class="disabled">' . $value['price_feature_text'] . '</li>';
                                    } else {
                                        echo '<li>' . $value['price_feature_text'] . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo get_home_url(); ?>/register" class="btn btn-default-color">Sign Up</a>
                        </div>

                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- END PRICING TABLES -->
        <?php
    }

    add_shortcode('price_table_3', 'price_table_3_shortcode');

// price table shortcode style 4
    function price_table_4_shortcode() {
        // The Query
        ?>
        <div class="main col-sm-12">
            <?php
            $price_table_args = array(
                'post_type' => 'price-table',
                'post_status' => 'publish',
                'order' => 'ASC',
            );
            $price_table_data2 = new WP_Query($price_table_args);

            if ($price_table_data2->have_posts()) {
                $price_feature_count = 1;
                while ($price_table_data2->have_posts()) {
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
                                    <a href="<?php echo get_home_url(); ?>/register">
                                        <h2> <?php
                                            the_title();
                                            if ($price_table_featured == 'on') {
                                                ?>
                                                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta(get_the_id(), '_wt_tooltrip_description', true); ?>"></i>
                                            <?php } ?></h2>
                                        <span class="price">
            <?php echo get_post_meta(get_the_id(), '_wt_package_price', true); ?>
                                            <small> <?php echo get_post_meta(get_the_id(), '_wt_package_time', true); ?></small>
                                        </span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $price_feature_count++;
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
    }

    add_shortcode('price_table_4', 'price_table_4_shortcode');