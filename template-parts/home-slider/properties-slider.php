<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_properties_display']) : ?>
<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_featured_properties_title']?></h1>

                <div id="featured-properties-slider" class="owl-carousel fullwidthsingle" data-animation-direction="from-bottom" data-animation-delay="250">
                    <?php
                    $delay = 250;
                    $display_posts = $wt_cozy['section_featured_properties_number'];
                    $property_args = array(
                        'post_type' => 'property',
                        'tax_query'	=> array(
                            array(
                                'taxonomy'	=> 'property-status',
                                'field'		=> 'slug',
                                'terms'		=> array( 'featured' ),
                                'operator'	=> 'NOT IN',
                            ),
                        ),
                        'showposts' => $display_posts
                    );
                    query_posts($property_args);
                    if (have_posts()) : while (have_posts()) : the_post();

                    $property_status = get_the_terms(get_the_ID(), 'property-status', true);
                    $property_price = get_post_meta( get_the_ID(), '_wt_property_price', true);
                    if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
                    $property_price_eng = number_format($property_price);
                    $property_price_symble = get_post_meta( get_the_ID(), '_wt_property_price_symble', true);
                    $property_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_property_description', true )));
                    ?>
                    <div class="item">
                        <div class="image">
                            <a href="<?php the_permalink(); ?>"></a>
                            <?php echo wt_cozy_thumbnail('760x670'); ?>
                        </div>
                        <div class="price">
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
                        </div>
                        <div class="info">
                            <?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                            <p>
                            <?php
                                $description_limit = 190;
                                if(strlen($property_description) <= $description_limit) {
                                    echo $property_description;
                                } else {
                                    echo substr($property_description, 0, $description_limit);
                                }
                            ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e( 'Read More', 'cozy' );?></a>
                        </div>
                    </div>

                    <?php $delay+=50; endwhile; endif; wp_reset_query(); ?>

                </div>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>