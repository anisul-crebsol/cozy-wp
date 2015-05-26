<?php
/**
 * Template Name: Home Search
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

<!-- BEGIN HEADER -->
<?php get_template_part ('/template-parts/section-header'); ?>
<!-- END HEADER -->


<!-- BEGIN HOME SEARCH SECTION -->
<?php get_template_part ('/template-parts/home-search/home-search'); ?>
<!-- END HOME SEARCH SECTION -->

<!-- BEGIN ACTION BOX -->
<?php get_template_part ('/template-parts/home-search/action'); ?>
<!-- END ACTION BOX -->

<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/template-parts/home-search/properties-slider'); ?>
<!-- END PROPERTIES SLIDER WRAPPER -->

<!-- BEGIN CONTENT WRAPPER -->
<div class="content colored">
    <div class="container">
    <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-8">

            <!-- BEGIN FEATURES -->
            <?php get_template_part ('/template-parts/home-search/features'); ?>
            <!-- BEGIN FEATURES -->

            <!-- BEGIN PROPERTY GALLERY -->
            <?php get_template_part ('/template-parts/home-search/property-gallery'); ?>
            <!-- BEGIN PROPERTY GALLERY -->

            <!-- BEGIN LATEST NEWS -->
            <?php get_template_part ('/template-parts/home-search/latest-news'); ?>
            <!-- END LATEST NEWS -->

            </div>
            <!-- END MAIN CONTENT -->

            <!-- BEGIN SIDEBAR -->
            <?php get_sidebar(); ?>
            <!-- END SIDEBAR -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<!-- BEGIN PARTNERS WRAPPER -->
<?php get_template_part ('/template-parts/home-search/partners'); ?>
<!-- END PARTNERS WRAPPER -->

<?php get_footer(); ?>