<ul class="property-features">
	<li><i class="icon-garage"></i> Garage for 2 cars</li>
	<li><i class="icon-pool"></i> Outdoor Pool</li>
	<li><i class="icon-garden"></i> 850 Sq Ft Garden</li>
	<li><i class="icon-security"></i> Security System Installed</li>

	<li><i class="icon-sale-sign"></i> This property is for sale</li>
	<li><i class="icon-house-usd"></i> Flexible Payments</li>
	<li><i class="icon-rooms"></i> 3 Bedrooms and 2 Bathrooms</li>
	<li><i class="icon-pets"></i> Pets Allowed</li>

	<?php 
		$entries = get_post_meta( get_the_ID(), '_wt_repeat_group', true );

		foreach ( (array) $entries as $key => $entry ) {

			echo "<li ><i class='".$entry['feature_icon']."'></i>".$entry['feature_text']."</li>";	
		}
	?>	
</ul>