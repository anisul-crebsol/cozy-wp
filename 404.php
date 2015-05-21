<?php
/**
 *
 * The template for displaying 404 pages (not found).
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
                    <div class="main col-sm-6">

                        <div class="e404 clearfix">
                            <div>
                                <strong><?php _e( '404', 'cozy' ); ?></strong>
                                <?php _e( 'Error', 'cozy' ); ?>
                            </div>
                            <i class="fa fa-file-text-o"></i>
                        </div>

                    </div>
                    <!-- END MAIN CONTENT -->

                    <!-- BEGIN SIDEBAR -->
                    <div class="sidebar col-sm-5 col-md-offset-1">

                        <div id="e404-side">
                            <h3><?php echo $wt_cozy['not_found_title']?></h3>

                            <?php echo $wt_cozy['not_found_description']?>

                            <p class="center"><br/><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-default-color"><?php _e( 'Go to Homepage', 'cozy' ); ?></a></p>
                        </div>
                    </div>
                    <!-- END SIDEBAR -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>