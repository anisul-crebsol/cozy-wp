<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_grid_display']) : ?>
<div id="home-grid">
    <div id="freewall" class="free-wall">

    <?php
        $limit = $wt_cozy['section_grid_number'];
        $args = array(
            'post_type'         => 'property',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $listing_query = new WP_Query( $args );?>
    <?php while($listing_query->have_posts()): $listing_query->the_post();

        $property_status = get_the_terms(get_the_ID(), 'property-status', true);
        $property_price = get_post_meta( get_the_ID(), '_wt_property_price', true);
        if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
        $property_price_eng = number_format($property_price);
        $property_price_symble = get_post_meta( get_the_ID(), '_wt_property_price_symble', true);
        $property_address = get_post_meta( get_the_ID(), '_wt_property_address', true);
    ?>
        <div class="item">
            <a class="info" href="<?php the_permalink(); ?>">
                <span class="price">
                    <i class="fa fa-home"></i>
                        <?php
                        if ( $property_status && ! is_wp_error( $property_status ) ) :
                        $draught_links = array();
                        foreach ( $property_status as $status ) {
                            $draught_links[] = $status->name;
                        }
                        echo $on_draught = join( ", ", $draught_links );
                        endif;
                        ?>
                    <?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
                </span>
                <h3><?php the_title() ?></h3>
                <span class="location"><?php echo $property_address; ?></span>
            </a>
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('properties-list', array('class' => 'img-responsive'));
            }
            else {
                echo '<img src="http://placehold.it/760x670" alt="placeholder" />';
            }
            ?>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div>
</div>
<?php endif; ?>