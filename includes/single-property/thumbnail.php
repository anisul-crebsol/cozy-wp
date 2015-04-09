<?php global $wt_cozy; ?>
<div id="property-detail-thumbs" class="owl-carousel">
		<?php if (wt_cozy_output_file_list( '_wt_property_slider' ) !='') {
		    echo wt_cozy_output_file_list( '_wt_property_slider');
		} else {
		    echo '<img src="http://placehold.it/148x131" />';
		}
		?>
</div>