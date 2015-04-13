<?php
/**
 * Template Name: 404
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
					<div class="main col-sm-6">
						
						<div class="e404 clearfix">
							<div>
								<strong>404</strong>
								ERROR 
							</div>
							<i class="fa fa-file-text-o"></i>
						</div>
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar col-sm-5 col-md-offset-1">
						
						<div id="e404-side">
							<h3>Hey! Page not found.</h3>
							
							<p><br/><br/>Sorry, but the page you requested could not be found. This page may have been moved, deleted or maybe you have mistyped the URL.</p>
							
							<p>Please, try again and make sure you have typed the URL correctly.</p>
							
							<p class="center"><br/><a href="index.html" class="btn btn-default-color">Go to Homepage</a></p>
						</div>
					</div>
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		

<?php get_footer(); ?>