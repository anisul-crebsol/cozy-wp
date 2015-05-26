<?php
/**
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

<!-- BEGIN HEADER -->
<?php get_template_part ('/template-parts/section-header'); ?>
<!-- END HEADER -->


<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/template-parts/breadcrumb'); ?>
<!-- END PAGE TITLE/BREADCRUMB -->


<!-- BEGIN CONTENT WRAPPER -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-8">
            <?php while ( have_posts() ) : the_post(); ?>


                <?php get_template_part ('/template-parts/single-property/topinfo'); ?>

                <!-- BEGIN PROPERTY DETAIL SLIDERS WRAPPER -->
                <div id="property-detail-wrapper" class="style1">

                <?php get_template_part ('/template-parts/single-property/price'); ?>

                    <!-- BEGIN PROPERTY DETAIL LARGE IMAGE SLIDER -->
                    <?php get_template_part ('/template-parts/single-property/slider'); ?>
                    <!-- END PROPERTY DETAIL LARGE IMAGE SLIDER -->

                    <!-- BEGIN PROPERTY DETAIL THUMBNAILS SLIDER -->
                    <?php get_template_part ('/template-parts/single-property/thumbnail'); ?>
                    <!-- END PROPERTY DETAIL THUMBNAILS SLIDER -->

                </div>
                <!-- END PROPERTY DETAIL SLIDERS WRAPPER -->

                <!-- BEGIN PROPERTY DESCRIPTION -->
                <?php
                $property_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_property_description', true ))); echo $property_description; ?>
                <!-- END PROPERTY DESCRIPTION -->

                <!-- BEGIN PROPERTY AMENITIES LIST -->
                <?php get_template_part ('/template-parts/single-property/amenities'); ?>
                <!-- END PROPERTY AMENITIES LIST -->


                <!-- BEGIN PROPERTY FEATURES LIST -->
                <?php get_template_part ('/template-parts/single-property/feature-list'); ?>
                <!-- END PROPERTY FEATURES LIST -->


                <h1 class="section-title"><?php _e( 'Property Location', 'cozy' );?></h1>
                <!-- PROPERTY MAP HOLDER -->
                <div id="property_location" class="map col-sm-12"></div>


                <?php get_template_part ('/template-parts/single-property/share'); ?>

                <!-- BEING AGENT INFORMATION -->
                <?php get_template_part ('/template-parts/single-property/agent-info'); ?>
                <!-- END AGENT INFORMATION -->


                <!-- BEGIN SIMILAR PROPERTIES -->
                <?php get_template_part ('/template-parts/single-property/similar'); ?>
                <!-- END PROPERTIES ASSIGNED -->


            <?php endwhile; ?>
            </div>

            <!-- END MAIN CONTENT -->


            <!-- BEGIN SIDEBAR -->
            <?php get_sidebar(); ?>
            <!-- END SIDEBAR -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>