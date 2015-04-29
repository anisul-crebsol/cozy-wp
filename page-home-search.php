<?php
/**
 * Template Name: Home Search
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN HOME SEARCH SECTION -->
<?php get_template_part ('/includes/home-search/home-search'); ?>
		<!-- END HOME SEARCH SECTION -->
		
		<!-- BEGIN ACTION BOX -->
<?php get_template_part ('/includes/home-search/action'); ?>
		<!-- END ACTION BOX -->
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/includes/home-search/properties-slider'); ?>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content colored">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">

		<!-- BEGIN FEATURES -->
<?php get_template_part ('/includes/home-search/features'); ?>
		<!-- BEGIN FEATURES -->

		<!-- BEGIN PROPERTY GALLERY -->
<?php get_template_part ('/includes/home-search/property-gallery'); ?>
		<!-- BEGIN PROPERTY GALLERY -->

		<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/home-search/latest-news'); ?>
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
<?php get_template_part ('/includes/home-search/partners'); ?>
		<!-- END PARTNERS WRAPPER -->
<?php get_footer(); ?>