<?php global $wt_cozy; ?>
<?php
    $agent_contact_form = do_shortcode(get_post_meta( get_the_ID(), '_wt_agent_contact_form', true ));
    if ($agent_contact_form) {
        echo "<h1 class='section-title' id='contact-agent'>";
        _e( 'Contact Agent', 'cozy' );
        echo "</h1>
        <div class='col-sm-12 form-style'>";
        echo $agent_contact_form .''. "</div>";
    }
?>