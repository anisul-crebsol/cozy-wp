<?php global $wt_cozy; ?>
<h1 class="section-title"><?php echo $wt_cozy['section_agents_title']?></h1>
<ul class="agency-detail-agents clearfix">
    <?php
        $count = 0;
        $limit = $wt_cozy['section_agents_number'];
        $args = array(
            'post_type'         => 'agent',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $agent_query = new WP_Query( $args );

    ?>
    <?php
        if (have_posts()) : while($agent_query->have_posts()): $agent_query->the_post();

        $agent_image = get_post_meta( get_the_ID(), '_wt_agent_img', true );
        $agent_address = get_post_meta( get_the_ID(), '_wt_agent_address', true );
        $agent_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_agent_description', true )));

        if ( 0 == $count%2 ) { echo '<div class="clearfix"></div>'; }
    ?>
    <li class="col-lg-6">
        <a href="<?php the_permalink(); ?>">
        <img src="<?php echo $agent_image; ?>" alt=""></a>
        <div class="info">
            <?php the_title( sprintf( '<a href="%s"><h3>', esc_url( get_permalink() ) ), '</h3></a>' ); ?>
            <span class="location"><?php echo $agent_address; ?></span>
            <?php
                $description_limit = 120;
                if(strlen($agent_description) <= $description_limit) {
                    echo $agent_description;
                } else {
                    echo substr($agent_description, 0, $description_limit);
                }
            ?>
            <div class="clearfix"></div>
            <a href="<?php the_permalink(); ?>"><?php _e('Learn More &raquo;', 'cozy'); ?></a>
        </div>
    </li>
    <?php $count++; endwhile; endif;?>
    <?php wp_reset_postdata(); ?>
</ul>