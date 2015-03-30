<?php
/**
 * Template Name: Blog Listing2
 * @package cozy
 */
global $wt_cozy; ?>

<?php get_header(); ?>

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/includes/blog-listing/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">

<?php get_template_part ('/includes/blog-listing/listing-header'); ?>					

						
						<!-- BEGIN BLOG LISTING -->
<?php get_template_part ('/includes/blog-listing/blog-listing2'); ?>
						<!-- END BLOG LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
<?php get_template_part ('/includes/blog-listing/pagination'); ?>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
<?php get_template_part ('/includes/blog-listing/categories'); ?>
						
						<!-- BEGIN ARCHIVES ACCORDION -->

<?php get_template_part ('/includes/blog-listing/archives-accordion'); ?>

						<!-- END  ARCHIVES ACCORDION -->
						
						
						<!-- BEGIN TAGS -->
<?php get_template_part ('/includes/blog-listing/tags'); ?>
						<!-- BEGIN TAGS -->
						
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/blog-listing/latest-news'); ?>
						<!-- END LATEST NEWS -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->


<?php get_footer(); ?>