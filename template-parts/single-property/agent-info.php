<?php global $wt_cozy; ?>
<?php
    $property_agent_id = get_post_meta( get_the_ID(), '_wt_property_author', true );
    $property_agent_address = get_post_meta( $property_agent_id, '_wt_agent_address', true );
    $property_agent_email = get_post_meta( $property_agent_id, '_wt_agent_email', true );
    $property_agent_thumb = get_the_post_thumbnail( $property_agent_id, array(250,250) );
    $property_agent_country = get_post_meta( $property_agent_id, '_wt_agent_country', true );
    $property_agent_telephone = get_post_meta( $property_agent_id, '_wt_agent_telephone', true );
    $property_agent_contact_form = do_shortcode(get_post_meta( $property_agent_id, '_wt_agent_contact_form', true ));
    $content_post = get_post($property_agent_id);
    $property_agent_title = $content_post->post_title;
?>
<h1 class="section-title"><?php _e( 'Agent Information', 'cozy' );?></h1>
<div class="property-agent-info">
    <div class="agent-detail col-md-4">
        <div class="image">
            <?php
            if ($property_agent_thumb) {
                echo $property_agent_thumb;
            }
            else {
                echo '<img src="http://placehold.it/307x307" alt="placeholder" />';
            }
            ?>
        </div>

        <div class="info">
            <header>
                <h2><?php echo $property_agent_title; ?> <small><?php echo $property_agent_address; ?></small></h2>
            </header>

            <ul class="contact-us">
                <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $property_agent_email; ?>"><?php echo $property_agent_email; ?></a></li>
                <li><i class="fa fa-map-marker"></i> <?php echo $property_agent_address .',' .' '. $property_agent_country ?></li>
                <li><i class="fa fa-phone"></i> <?php echo $property_agent_telephone; ?></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-8">
        <?php echo $property_agent_contact_form; ?>
    </div>
</div>