<?php
/**
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

<!-- BEGIN HEADER -->
<?php get_template_part ('/template-parts/section-header'); ?>
<!-- END HEADER -->

<?php
if(isset($_GET['property_type']) || isset($_GET['location']) || isset($_GET['advancedSearch']) == 'advancedSearch' || isset($_GET['post_type']) == 'property') {
    // BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background)
    get_template_part ('/template-parts/advanced-search');
    // END HOME ADVANCED SEARCH
}?>

<!-- BEGIN CONTENT WRAPPER -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-12">


                <!-- BEGIN PROPERTY LISTING -->
                <div id="property-listing" class="grid-style1 clearfix">
                    <div class="row">

                        <?php get_template_part( 'template-parts/content', 'search' ); ?>

                    </div>
                </div>
                <!-- END PROPERTY LISTING -->


            </div>
            <!-- END MAIN CONTENT -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>