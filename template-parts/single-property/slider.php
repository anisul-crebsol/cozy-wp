<?php global $wt_cozy; ?>
<div id="property-detail-large" class="owl-carousel">
<?php
    if (wt_cozy_single_property_slider( '_wt_property_slider' ) !='') {
        echo wt_cozy_single_property_slider( '_wt_property_slider');
    } else {
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('property-details', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/764x423" alt="placeholder" />';
        }
    }
?>
</div>