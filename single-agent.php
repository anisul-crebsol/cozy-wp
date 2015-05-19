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
						
						<!-- BEGIN AGENT DETAIL -->
<?php get_template_part ('/template-parts/single-agent/agent-detail'); ?>
						<!-- END AGENT DETAIL -->
						
						
<?php get_template_part ('/template-parts/single-agent/content'); ?>
						
						
						<!-- BEGIN PROPERTIES ASSIGNED -->
<?php get_template_part ('/template-parts/single-agent/assigned-properties'); ?>
						<!-- END PROPERTIES ASSIGNED -->
						
						
						<!-- BEGIN CONTACT FORM -->
<?php get_template_part ('/template-parts/single-agent/contact-form'); ?>
						<!-- END CONTACT FORM -->
						
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