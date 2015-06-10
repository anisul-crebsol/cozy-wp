<?php
/**
 * Template Name: Properties Grid2
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


<!-- BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background) -->
<?php get_template_part ('/template-parts/advanced-search'); ?>
<!-- END HOME ADVANCED SEARCH -->


<!-- BEGIN CONTENT WRAPPER -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-12">


                <!-- BEGIN PROPERTY LISTING -->
                <?php get_template_part ('/template-parts/properties/property-listing-grid2'); ?>
                <!-- END PROPERTY LISTING -->


                <!-- BEGIN PAGINATION -->
                <?php get_template_part ('/template-parts/pagination'); ?>
                <!-- END PAGINATION -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>