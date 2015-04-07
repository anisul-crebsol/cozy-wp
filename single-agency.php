<?php
/**
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
<?php get_template_part ('/includes/single-agency/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
						
						<!-- BEGIN AGENCY DETAIL -->
<?php get_template_part ('/includes/single-agency/agency-detail'); ?>
						<!-- END AGENCY DETAIL -->
						
						
						<p class="center">Praesent id lectus commodo, porttitor nunc in, consequat lacus. Aliquam vel varius sapien. Vestibulum pulvinar elit ut nisl egestas aliquam. Nullam suscipit nunc vel magna mattis vestibulum. Proin sit amet nulla orci. Sed eleifend adipiscing sapien, eget luctus libero consequat ac. Morbi ac est ipsum.</p>
						
						<!-- BEGIN GALLERY -->
<?php get_template_part ('/includes/single-agency/gallery'); ?>
						<!-- END GALLERY -->
						
						
						<p class="center">
							Morbi eget dui leo. Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimentum mi, at fermentum tortor velit eu felis. Aliquam bibendum risus at lectus condimentum aliquam. Integer eros leo, consectetur non mauris at, aliquam consectetur nibh. Pellentesque vulputate gravida ante, vel pellentesque ante mollis ac. Donec at tristique nulla, vitae facilisis metus.
							<br/><br/>
							Sed nec rhoncus felis, vitae ultricies risus. Nam sit amet risus non dui ultrices tempus quis a est. Vivamus nec dictum est, at adipiscing purus.
							<br/><br/><br/>
							<a href="#" data-slide-to="contact-agency" class="btn btn-fullcolor">Contact Agency</a>
							<br/><br/>
						</p>
						
						
						<!-- BEGIN AGENTS LIST -->
<?php get_template_part ('/includes/single-agency/agents-list'); ?>
						<!-- END AGENTS LIST -->
						
						
						<!-- BEGIN PROPERTIES ASSIGNED -->
<?php get_template_part ('/includes/single-agency/properties-assigned'); ?>	
						<!-- END PROPERTIES ASSIGNED -->
						
						
						<!-- BEGIN CONTACT FORM -->
<?php get_template_part ('/includes/single-agency/contact-form'); ?>	
						<!-- END CONTACT FORM -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
<?php get_template_part ('/includes/single-agency/advanced-search'); ?>	
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/single-agency/latest-news'); ?>	
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
<?php get_template_part ('/includes/single-agency/newsletter'); ?>	
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>