<?php global $wt_cozy; ?>
<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_looking_for_title']?></h1>
                <ul class="property-large-buttons2 clearfix">
                    <?php
                    $terms = get_terms( 'wt-property-types' );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                        $count = 0;
                        $limit = 3;
                        foreach ( $terms as $term ) {
                            if($count<$limit):
                                $icon = get_option("category_$term->term_id");
                                ?>
                                <li data-animation-direction="from-bottom" data-animation-delay="250">
                                    <i class="fa <?php echo $icon['img']; ?>"></i><br>
                                    <h4><?php echo $term->name; ?></h4>
                                    <a href="<?php echo esc_url( home_url( '/wt-property-types/'.$term->slug ) ); ?>" class="btn btn-default"><?php _e( 'View All', 'cozy' );?></a>
                                </li>

                                <?php
                                $count++;
                            endif;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
        </div>