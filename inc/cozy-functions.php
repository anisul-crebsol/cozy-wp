<?php 
function wt_cozy_thumbnail($placeholderImge = '') {
    $width_height = explode('x',$placeholderImge);
    $uploads_dir = wp_upload_dir();
    $upload_url = $uploads_dir['baseurl']."/";
    $upload_dir = $uploads_dir['basedir']."/";
    $thumb_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID(), array('class' => 'img-responsive') ) );            
    $check_image_dir = str_replace($upload_url, $upload_dir, $thumb_url);
    $attachment_id = get_post_thumbnail_id( get_the_ID() );
    $alt_text = trim(strip_tags( get_post_meta($attachment_id, '_wp_attachment_image_alt', true) ));
    if ( has_post_thumbnail() ) {
        if(@file_exists($check_image_dir)){                
         //the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
            $output = '<img src="'.$thumb_url.'" alt="'.$alt_text.'"/>';
        } else {
            $output = '<img src="http://placehold.it/'.$placeholderImge.'" alt="placeholder"/>';
        }
    }
    else {
        $output = '<img src="http://placehold.it/'.$placeholderImge.'"  alt="placeholder"/>';
    }
    return $output;
}

function wt_cozy_single_property_slider( $file_list_meta_key) {

    // Get the list of files
    $attach = '';
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, true );

    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        if (!isset($img_size)) {
                $img_size = '';
             }
        if (!isset($attach)) {
            $attach = '';
        }
        $attachment_image = wp_get_attachment_url( $attachment_id, $img_size );
        if($attachment_image) :                                 
        $attach .= '<div class="item"><img src="'.$attachment_image.'" class="img-responsive" alt=""></div>';                                   
        endif;
    }
    return $attach;
}

function wt_cozy_single_agency_slider( $file_list_meta_key) {

    $attach = '';
    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, true );

    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        if (!isset($img_size)) {
                $img_size = '';
             }
        if (!isset($attach)) {
            $attach = '';
        }
        $attachmentImage = wp_get_attachment_url( $attachment_id, $img_size );
        if($attachmentImage) :                                  
        $attach .= '<div class="item"><a href="'.$attachmentImage.'" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a><img src="'.$attachmentImage.'" alt=""></div>';                                   
        endif;
    }
    return $attach;
}