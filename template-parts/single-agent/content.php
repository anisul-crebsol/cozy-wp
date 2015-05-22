<?php global $wt_cozy; ?>
<?php
    $agent_address = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_agent_description', true )));
    echo $agent_address
?>
<p class="center">
    <a href="#" data-slide-to="contact-agent" class="btn btn-fullcolor"><?php _e( 'Contact Agent', 'cozy' ); ?></a>
    <br/><br/>
</p>