<?php global $wt_cozy; ?>
<div id="agents" class="col-sm-8">
    <h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50"><?php echo $wt_cozy['section_agents_title']?></h1>

    <ul class="agency-detail-agents clearfix">
    <?php
        $count =0;
        $limit = $wt_cozy['section_feature_number_grid'];
        $args = array(
            'post_type'         => 'agent',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $agent_query = new WP_Query( $args );?>
    <?php while($agent_query->have_posts()): $agent_query->the_post();

        $agent_address = get_post_meta( get_the_ID(), '_wt_agent_address', true );
        $agent_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_agent_description', true )));
        if ($count != 0 && $count%2 == 0) { echo '<li class="content-none"><span class="clearfix"></span></li>'; }
    ?>
        <li class="col-lg-6" data-animation-direction="from-left" data-animation-delay="250">
            <a href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('agent', array('class' => 'img-responsive'));
                }
                else {
                    echo '<img src="http://placehold.it/307x307" alt="placeholder" />';
                }
                ?></a>
            <div class="info">
                <?php the_title( sprintf( '<a href="%s"><h3>', esc_url( get_permalink() ) ), '</h3></a>' ); ?>
                <span class="location"><?php echo $agent_address; ?></span>
                    <?php
                        $description_limit = 100;
                        if(strlen($agent_description) <= $description_limit) {
                            echo $agent_description;
                        } else {
                            echo substr($agent_description, 0, $description_limit);
                        }
                    ?>
                    <div class="clearfix"></div>
                <a href="<?php the_permalink(); ?>"><?php _e( 'Learn More &raquo;', 'cozy' );?></a>
            </div>
        </li>
    <?php $count++; endwhile; ?>
    <?php wp_reset_postdata(); ?>
    </ul>

    <div class="col-lg-12 center">
        <a href="#" class="btn btn-default-color"><?php _e( 'See all Agents', 'cozy' );?></a>
    </div>
    <br>
</div>