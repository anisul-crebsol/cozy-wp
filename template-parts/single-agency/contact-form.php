<?php global $wt_cozy; ?>
<?php
    $agency_contact_form = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_agency_contact_form', true )));
    if ($agency_contact_form) {
        echo "<h1 class='section-title' id='contact-agent'>";
        _e( 'Contact Agency', 'cozy' );
        echo "</h1>
        <div class='col-sm-12 form-style'>";
        echo $agency_contact_form .''. "</div>";
    }
?>