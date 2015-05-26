<?php
/**
 *
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

                <?php get_template_part ('/template-parts/archive-agency/listing-header'); ?>

                    <!-- BEGIN AGENCIES LISTING -->
                    <?php get_template_part ('/template-parts/archive-agency/agency-listing'); ?>
                    <!-- END AGENCIES LISTING -->

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