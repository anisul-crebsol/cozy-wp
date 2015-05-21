<?php
/**
 * Template Name: Our Partners
 *
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

</head>
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
                    <div class="main col-sm-12">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

                    <?php endwhile; // end of the loop. ?>

                    </div>
                    <!-- END MAIN CONTENT -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>