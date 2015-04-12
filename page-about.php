<?php
/**
 * Template Name: About
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
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/includes/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN HIGHLIGHT -->
<?php get_template_part ('/includes/page-about/highlight'); ?>
		<!-- END HIGHLIGHT -->
		
		
		<!-- BEGIN SERVICES -->
<?php get_template_part ('/includes/page-about/services'); ?>
		<!-- END SERVICES -->
		
		
		<!-- BEGIN PROPERTY TYPE BUTTONS -->
<?php get_template_part ('/includes/page-about/property-type'); ?>
		<!-- END PROPERTY TYPE BUTTONS -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
					
						<!-- BEGIN AGENTS GRID -->
<?php get_template_part ('/includes/page-about/agents-grid'); ?>
						<!-- END AGENTS GRID -->
						
						<!-- BEGIN AGENCIES GRID -->
<?php get_template_part ('/includes/page-about/agencies-grid'); ?>
						<!-- END AGENCIES GRID -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
		<!-- BEGIN PARTNERS WRAPPER -->
<?php get_template_part ('/includes/page-about/partners'); ?>
		<!-- END PARTNERS WRAPPER -->
		
		
<?php get_footer(); ?>