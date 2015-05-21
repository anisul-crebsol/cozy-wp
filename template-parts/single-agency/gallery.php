<div id="property-gallery" class="owl-carousel property-gallery">
<?php
    if (wt_cozy_single_agency_slider( '_wt_agency_gallery' ) !='') {
    echo wt_cozy_single_agency_slider( '_wt_agency_gallery');
    } else {
        echo '<img src="http://placehold.it/246x212" />';
    }
?>
</div>