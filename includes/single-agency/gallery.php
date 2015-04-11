<?php global $wt_cozy; ?>
<div id="property-gallery" class="owl-carousel property-gallery">
<?php
	function wt_cozy_gallery_file_list( $file_list_meta_key) {

	    // Get the list of files
	    $files = get_post_meta( get_the_ID(), $file_list_meta_key, true );

	    // Loop through them and output an image
	    foreach ( (array) $files as $attachment_id => $attachment_url ) {        
	        $attachmentImage = wp_get_attachment_url( $attachment_id, $img_size );
	        if($attachmentImage) :							        
	        $attach .= '<div class="item"><a href="http://placehold.it/700x603" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a><img src="'.$attachmentImage.'" alt=""></div>';							        
	        endif;
	    }
	    return $attach;
	}

	if (wt_cozy_gallery_file_list( '_wt_agency_gallery' ) !='') { 
?>
	<?php echo wt_cozy_gallery_file_list( '_wt_agency_gallery'); ?>
<?php
	} else {
	    echo '<img src="http://placehold.it/246x212" />';
	}
?>
</div>