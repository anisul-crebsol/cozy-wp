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
					<div class="main col-sm-8">

<?php get_template_part ('/includes/blog-listing/listing-header'); ?>					

						
						<!-- BEGIN BLOG LISTING -->
<?php get_template_part ('/includes/blog-listing/blog-listing'); ?>
						<!-- END BLOG LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
<?php get_template_part ('/includes/blog-listing/pagination'); ?>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
<?php get_template_part ('/includes/sidebar/categories'); ?>
						
						<!-- BEGIN ARCHIVES ACCORDION -->

<?php get_template_part ('/includes/sidebar/archives-accordion'); ?>

						<!-- END  ARCHIVES ACCORDION -->
						
						
						<!-- BEGIN TAGS -->
<?php get_template_part ('/includes/sidebar/tags'); ?>
						<!-- BEGIN TAGS -->
						
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/sidebar/latest-news'); ?>
						<!-- END LATEST NEWS -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->


<?php get_footer(); ?>