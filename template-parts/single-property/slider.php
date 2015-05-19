<?php global $wt_cozy; ?>
<div id="property-detail-large" class="owl-carousel">
<?php
	if (wt_cozy_single_property_slider( '_wt_property_slider' ) !='') {
	    echo wt_cozy_single_property_slider( '_wt_property_slider');
	} else {
	    echo '<img src="http://placehold.it/764x423" />';
	}
?>
</div>