<?php
/**
 * Template Name: Home Map
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


        <!-- BEGIN HOME MAP -->
<?php get_template_part ('/template-parts/home-map/map'); ?>
        <!-- END HOME MAP -->

        <!-- BEGIN ACTION BOX -->
<?php get_template_part ('/template-parts/home-map/action'); ?>
        <!-- END ACTION BOX -->

        <!-- BEGIN CONTENT 1 WRAPPER -->
        <div class="content gray">
            <div class="container">
                <div class="row">

                    <!-- BEGIN MAIN CONTENT 1 -->
                    <div class="main col-sm-8">

                        <!-- BEGIN LATEST PROPERTIES SLIDER -->
<?php get_template_part ('/template-parts/home-map/latest-properties'); ?>
                        <!-- END LATEST PROPERTIES SLIDER -->

<?php get_template_part ('/template-parts/home-map/looking-for'); ?>
                    </div>
                    <!-- END MAIN CONTENT 1-->

                    <!-- BEGIN SIDEBAR 1 -->
<?php get_sidebar(); ?>
                    <!-- END SIDEBAR 1 -->
                </div>
            </div>
        </div>
        <!-- BEGIN CONTENT 1 WRAPPER -->


        <!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/template-parts/home-map/why-choose'); ?>
        <!-- END PROPERTIES SLIDER WRAPPER -->


        <!-- BEGIN CONTENT 2 WRAPPER -->
        <div class="content gray">
            <div class="container">
                <div class="row">

                    <!-- BEGIN MAIN CONTENT 2 -->
                    <div class="main col-sm-8">


<?php get_template_part ('/template-parts/home-map/property-gallery'); ?>

<?php get_template_part ('/template-parts/home-map/latest-news'); ?>

                    </div>
                    <!-- END MAIN CONTENT -->

                    <!-- BEGIN SIDEBAR -->
<?php get_sidebar('bottom'); ?>
                    <!-- END SIDEBAR 2 -->

                </div>
            </div>
        </div>
        <!-- END CONTENT 2 WRAPPER -->


        <!-- BEGIN TWITTER WRAPPER WITH COLORED BACKGROUND-->
<?php get_template_part ('/template-parts/home-map/twitter'); ?>	
        <!-- END TWITTER WRAPPER WITH COLORED BACKGROUND-->

<?php get_footer(); ?>