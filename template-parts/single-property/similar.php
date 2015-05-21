<h1 class="section-title"><?php _e( 'Similar Properties', 'cozy' );?></h1>
<div id="similar-properties" class="grid-style1 clearfix">
    <div class="row">

        <?php
            $limit = 8;
            $count = 0;
            $args = array(
                'post_type'         => 'property',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
                'post__not_in' 		=> array($post->ID)
            );
            $property_query = new WP_Query( $args );
            ?>
        <?php while($property_query->have_posts()): $property_query->the_post();

            $property_address = get_post_meta( $post->ID, '_wt_property_address', true );
            $property_price = get_post_meta( $post->ID, '_wt_property_price', true);
            if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
            $property_price_eng = number_format($property_price);
            $property_price_symble = get_post_meta( $post->ID, '_wt_property_price_symble', true);
            $property_area = get_post_meta( $post->ID, '_wt_property_area', true );
            $property_area_measurement = get_post_meta( $post->ID, '_wt_property_area_measurement', true );
            $property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
            $property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
        ?>

        <div class="item col-md-4 <?php if ( $count > 5 ) { echo 'disabled'; } ?>">
            <div class="image">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title() ?></h3>
                    <?php if ($property_price !='') { ?><span class="location"><?php echo $property_address; ?></span><?php } ?>
                </a>
                <?php echo wt_cozy_thumbnail('760x670'); ?>
            </div>
            <div class="price">
                <i class="fa fa-home"></i>
                    <?php $terms = wp_get_post_terms($post->ID, 'property-status', array("fields" => "names"));
                        $i=0;
                        foreach($terms as $term):
                            if (count($terms) - $i < 2):
                                echo $term;
                            else :
                                echo $term.','.' ';
                            endif;
                            $i++;
                         endforeach;
                     ?>
                <?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
            </div>
            <ul class="amenities">
                <?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
                <?php if ($property_bedrooms !='') { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
                <?php if ($property_bathrooms !='') { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
            </ul>
        </div>

    <?php $count++; endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div>
</div>

<p class="center">
    <a href="#" class="btn btn-default-color" data-grid-id="similar-properties" data-load-amount="3"><?php _e( 'Load More Properties', 'cozy' );?></a>
</p>