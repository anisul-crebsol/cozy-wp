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
<?php get_template_part ('/includes/home-search/advanced-search'); ?>
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
<?php get_template_part ('/includes/home-search/main-content'); ?>
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