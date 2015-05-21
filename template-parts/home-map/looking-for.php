<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_looking_for_title']?></h1>
<p class="center" data-animation-direction="from-bottom" data-animation-delay="150"><?php echo $wt_cozy['section_looking_for_description']?></p>
<ul class="property-large-buttons clearfix">
<?php
$terms = get_terms( 'wt-property-types' );
 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     $count = 0;
     $limit = 3;
     foreach ( $terms as $term ) {
        if($count<$limit):
$icon = get_option("category_$term->term_id");
        ?>
    <li id="residential" data-animation-direction="from-bottom" data-animation-delay="250">
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