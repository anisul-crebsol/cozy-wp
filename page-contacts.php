<?php
/**
 * Template Name: Contacts
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
        <div class="content contacts">
            <div id="contacts_map"></div>


            <div class="container">
                <div class="row">

                    <div id="contacts-overlay" class="col-sm-7">
                        <i id="contacts-overlay-close" class="fa fa-minus"></i>

                        <ul class="col-sm-6">
                            <li><i class="fa fa-map-marker"></i> <?php echo $wt_cozy['section_contact_address']?></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $wt_cozy['section_contact_email']?>"><?php echo $wt_cozy['section_contact_email']?></a></li>
                        </ul>

                        <ul class="col-sm-6">
                            <li><i class="fa fa-phone"></i> <?php echo $wt_cozy['section_contact_phone']?></li>
                            <li><i class="fa fa-print"></i> <?php echo $wt_cozy['section_contact_fax']?></li>
                        </ul>
                    </div>

                    <!-- BEGIN MAIN CONTENT -->
                    <div class="main col-sm-4 col-sm-offset-8">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile
                        ?>
                    </div>
                    <!-- END MAIN CONTENT -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>