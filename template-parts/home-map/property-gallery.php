<?php global $wt_cozy; ?>
<div id="property-gallery2" class="property-gallery2">
    <div class="item">
        <h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50"><?php echo $wt_cozy['section_gallery_title']?></h1>
        <p class="section-text" data-animation-direction="from-left" data-animation-delay="250"><?php echo $wt_cozy['cozy_gallery_description']?></p>
    </div>
    <?php
    $display_posts = 5;
    $listing_args = array(
        'post_type' => 'property',
        'showposts' => $display_posts
    );
    query_posts($listing_args);
    if (have_posts()) : while (have_posts()) : the_post();

    $property_address = get_post_meta( get_the_ID(), '_wt_property_address', true);
    ?>
    <div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
        <a href="<?php if(has_post_thumbnail()) { $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_large' ); echo $url = $thumb['0']; } else {echo 'http://placehold.it/760x670';} ?>" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
            <h3><?php the_title() ?></h3>
            <?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
        </a>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('property-gallery', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/246x217" alt="placeholder" />';
        }
        ?>
    </div>
    <?php endwhile; endif; wp_reset_query(); ?>
</div>