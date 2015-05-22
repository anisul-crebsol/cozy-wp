<?php
/**
 * The template for displaying fullwidth pages.
 *
 * Template Name: Full Width
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
            <div class="container-fluid">
                <div class="row">

                    <!-- BEGIN MAIN CONTENT -->
                    <div class="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>


                </div>
                    <!-- END MAIN CONTENT -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>