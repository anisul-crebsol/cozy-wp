<?php
/**
 * Template Name: Blog Listing2
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

<body>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

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

<?php get_template_part ('/template-parts/blog-listing/listing-header'); ?>


                        <!-- BEGIN BLOG LISTING -->
<?php get_template_part ('/template-parts/blog-listing/blog-listing2'); ?>
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