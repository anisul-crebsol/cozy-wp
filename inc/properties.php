<?php
$properties_args = array(
    'post_type' => 'property',
    'posts_per_page' => 20,
);
?>
<script type="text/javascript">
    var properties = [
    <?php
        query_posts($properties_args);
        $count = 0;
        if (have_posts()) : while (have_posts()) : the_post();
        $property_latitude = get_post_meta( $post->ID, '_wt_property_map_latitude', true );
        $property_longitude = get_post_meta( $post->ID, '_wt_property_map_longitude', true );
        $property_street = get_post_meta( $post->ID, '_wt_property_street', true );
        $property_city = get_post_meta( $post->ID, '_wt_property_city', true );
        $property_state = get_post_meta( $post->ID, '_wt_property_state', true );
        $property_country = get_post_meta( $post->ID, '_wt_property_country', true );
        $property_email = get_post_meta( $post->ID, '_wt_property_email', true );
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
        $property_map_maker_icon = get_post_meta( $post->ID, '_wt_property_map_maker_icon', true );
        $description_property = $property_street.$property_city.$property_state.$property_country.$property_email;
    ?>
        {
            "id": <?php echo $count; ?>,
            "title": "<?php echo get_the_title($post->ID); ?>",
            "latitude":"<?php echo $property_latitude; ?>",
            "longitude":"<?php echo $property_longitude; ?>",
            "image":"<?php
                    if ( has_post_thumbnail() ) {
                        echo $src[0];
                    }
                    else {
                        echo 'http://placehold.it/270x238';
                    }
             ?>",
            "description":"<?php echo $description_property; ?>",
            "link":"<?php the_permalink(); ?>",
            "map_marker_icon":"<?php echo $property_map_maker_icon; ?>"
        },
    <?php $count++; endwhile; endif;  ?>
    ];
</script>