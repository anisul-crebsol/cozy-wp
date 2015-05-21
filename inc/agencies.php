<?php
$agencies_args = array(
    'post_type' 	=> 'agency',
);
?>
<script type="text/javascript">
    var agencies = [
    <?php
        $count = 0;
        query_posts($agencies_args);
        if (have_posts()) : while (have_posts()) : the_post();
        $agency_latitude = get_post_meta( $post->ID, '_wt_agency_map_latitude', true );
        $agency_longitude = get_post_meta( $post->ID, '_wt_agency_map_longitude', true );
        $agency_street = get_post_meta( $post->ID, '_wt_agency_street', true );
        $agency_city = get_post_meta( $post->ID, '_wt_agency_city', true );
        $agency_state = get_post_meta( $post->ID, '_wt_agency_state', true );
        $agency_country = get_post_meta( $post->ID, '_wt_agency_country', true );
        $agency_email = get_post_meta( $post->ID, '_wt_agency_email', true );
        if($agency_street): $agency_street = $agency_street.', '; else : $agency_street = ''; endif;
        if($agency_city): $agency_city = $agency_city.', '; else : $agency_city = ''; endif;
        if($agency_state): $agency_state = $agency_state.', '; else : $agency_state = ''; endif;
        if($agency_country): $agency_country = $agency_country.', '; else : $agency_country = ''; endif;
        $description_agency = $agency_street.$agency_city.$agency_state.$agency_country.$agency_email;
        $agency_map_maker_icon = get_post_meta( $post->ID, '_wt_agency_map_maker_icon', true );
    ?>
        {
            "id": <?php echo $count; ?>,
            "title": "<?php echo get_the_title($post->ID); ?>",
            "latitude":"<?php echo $agency_latitude; ?>",
            "longitude":"<?php echo $agency_longitude; ?>",
            "image":"<?php
                    if ( has_post_thumbnail() ) {
                        echo $src[0];
                    }
                    else {
                        echo 'http://placehold.it/700x603';
                    }
             ?>",
            "description":"<?php echo $description_agency; ?>",
            "link":"<?php the_permalink(); ?>",
            "map_marker_icon":"<?php echo $agency_map_maker_icon; ?>"
        },
    <?php $count++; endwhile; endif;  ?>
    ];
</script>