<?php
/**
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
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
<?php get_template_part( 'content', 'single' ); ?>
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
<?php get_template_part ('/includes/single/categories'); ?>
						
						<!-- BEGIN ARCHIVES ACCORDION -->
<?php get_template_part ('/includes/single/archives'); ?>
						<!-- END  ARCHIVES ACCORDION -->
						
						
						<!-- BEGIN TAGS -->
<?php get_template_part ('/includes/single/tags'); ?>
						<!-- BEGIN TAGS -->
						
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/single/latest-news'); ?>
						<!-- END LATEST NEWS -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>