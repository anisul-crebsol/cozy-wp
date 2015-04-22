<?php
/**
 * @package Cozy
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
<?php //get_template_part ('/includes/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background) -->
<?php get_template_part ('/includes/properties/advanced-search-home'); ?>
		<!-- END HOME ADVANCED SEARCH -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">

							
						<!-- BEGIN PROPERTY LISTING -->
						<div id="property-listing" class="grid-style1 clearfix">
							<div class="row">

								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'content', 'search' ); ?>

								<?php endwhile; // end of the loop. ?>					
	
							</div>
						</div>
						<!-- END PROPERTY LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
<?php get_template_part ('/includes/pagination'); ?>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>