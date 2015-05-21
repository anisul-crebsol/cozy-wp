<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_partners_title']?></h1>
<ul class="agencies-grid">
    <?php
        $count = 1;
        $display_posts = $wt_cozy['section_grid_number'];
        $args = array(
            'post_type' => 'agency',
            'posts_per_page' => 4,
            'paged' => $paged
        );
    $agency_query = new WP_Query( $args );
    while($agency_query->have_posts()): $agency_query->the_post();

    $agency_city = get_post_meta( $post->ID, '_wt_agency_city', true );
    ?>
    <li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="250">
        <div id="agency_map<?php echo $count; ?>" class="map"></div>
        <div class="info">
            <h2><?php echo get_the_title(); ?><small><?php echo $agency_city; ?></small></h2>
            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-default-color"><?php _e ('More Details', 'cozy') ?></a>
        </div>
    </li>
    <?php $count++; endwhile; ?>
</ul>