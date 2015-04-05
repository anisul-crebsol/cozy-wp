<div id="property-detail-large" class="owl-carousel">


	<?php
	function wt_cozy_output_file_list( $file_list_meta_key) {

	    // Get the list of files
	    $files = get_post_meta( get_the_ID(), $file_list_meta_key, true );

	    // Loop through them and output an image
	    foreach ( (array) $files as $attachment_id => $attachment_url ) {        
	        $attachmentImage = wp_get_attachment_url( $attachment_id, $img_size );
	        if($attachmentImage) :							        
	        $attach .= '<div class="item"><img src="'.$attachmentImage.'" class="img-responsive" alt=""></div>';							        
	        endif;
	    }
	    return $attach;
	}

	if (wt_cozy_output_file_list( '_wt_property_slider' ) !='') {
	    echo wt_cozy_output_file_list( '_wt_property_slider');
	} else {
	    echo '<img src="http://placehold.it/764x423" />';
	}
	?>

	<?php 
	?>

</div>