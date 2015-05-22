<?php
/**
 * Template Name: Home Grid
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

        <!-- BEGIN HOME GRID -->
<?php get_template_part ('/template-parts/home-grid/grid'); ?>
        <!-- END HOME GRID -->

        <!-- BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background) -->
<?php get_template_part ('/template-parts/advanced-search'); ?>
        <!-- END HOME ADVANCED SEARCH -->

        <!-- BEGIN HOME HERO UNIT -->
<?php get_template_part ('/template-parts/home-grid/hero'); ?>
        <!-- END HOME HERO UNIT  -->

        <!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/template-parts/home-grid/properties-slider'); ?>
        <!-- END PROPERTIES SLIDER WRAPPER -->

        <!-- BEGIN CONTENT WRAPPER -->
        <div class="content">
            <div class="container">
                <div class="row">

                <div class="main">

        <!-- BEGIN FEATURES SECTION -->
<?php get_template_part ('/template-parts/home-grid/features'); ?>
        <!-- END FEATURES SECTION -->

                <div class="content-divider col-sm-12"></div>

        <!-- BEGIN FEATURES SECTION -->
<?php get_template_part ('/template-parts/home-grid/agents'); ?>
        <!-- END FEATURES SECTION -->

                        <!-- BEGIN TESTIMONIALS -->
<?php get_template_part ('/template-parts/home-grid/testimonials'); ?>
                        <!-- END TESTIMONIALS -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->

        <!-- BEGIN LATEST NEWS WRAPPER WITH GRAY BACKGROUND-->
<?php get_template_part ('/template-parts/home-grid/latest-news'); ?>
        <!-- END LATEST NEWS WRAPPER WITH GRAY BACKGROUND-->

        <!-- BEGIN NEWSLETTER SECTION-->
<?php get_template_part ('/template-parts/section-newsletter'); ?>
        <!-- END NEWSLETTER SECTION-->

<?php get_footer(); ?>