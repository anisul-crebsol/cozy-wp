<?php
/**
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
					<div class="main col-sm-8">
						
<?php get_template_part ('/template-parts/archive-agent/listing-header'); ?>
						
						<!-- BEGIN AGENTS LISTING -->
<?php get_template_part ('/template-parts/archive-agent/agents-listing'); ?>
						<!-- END AGENTS LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
<?php get_template_part ('/template-parts/pagination'); ?>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
<?php get_sidebar(); ?>		
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>