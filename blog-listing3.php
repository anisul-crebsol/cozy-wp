<?php
/**
 * Template Name: Blog Listing3
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


                    <!-- BEGIN BLOG LISTING -->
                    <?php get_template_part ('/template-parts/blog-listing/blog-listing3'); ?>
                    <!-- END BLOG LISTING -->


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