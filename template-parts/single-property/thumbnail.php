<?php global $wt_cozy; ?>
<div id="property-detail-thumbs" class="owl-carousel">
    <?php
    if (wt_cozy_single_property_slider( '_wt_property_slider' ) !='') {
        echo wt_cozy_single_property_slider( '_wt_property_slider');
    } else {
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('blog-detail', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/148x131" />';
        }
    }
    ?>
</div>