<?php
/**
 * Template Name: Home Map
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
		
		
		<!-- BEGIN HOME MAP -->
<?php get_template_part ('/includes/home-map/map'); ?>
		<!-- END HOME MAP -->
		
		<!-- BEGIN ACTION BOX -->
<?php get_template_part ('/includes/home-map/action'); ?>
		<!-- END ACTION BOX -->
		
		<!-- BEGIN CONTENT 1 WRAPPER -->
		<div class="content gray">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT 1 -->
					<div class="main col-sm-8">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest Properties</h1>
						
						<!-- BEGIN LATEST PROPERTIES SLIDER -->
<?php get_template_part ('/includes/home-map/latest-properties'); ?>
						<!-- END LATEST PROPERTIES SLIDER -->
						
<?php get_template_part ('/includes/home-map/looking-for'); ?>
					</div>	
					<!-- END MAIN CONTENT 1-->
					
					<!-- BEGIN SIDEBAR 1 -->
					<div class="sidebar gray col-sm-4">

<?php get_template_part ('/includes/home-map/contact-us'); ?>	

						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">More Features</h2>
						<!-- BEGIN ACCORDION -->
<?php get_template_part ('/includes/home-map/accordion'); ?>
						<!-- END ACCORDION -->
						
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">More Features</h2>
						<!-- BEGIN TABS -->
<?php get_template_part ('/includes/home-map/tabs'); ?>
						<!-- END TABS -->
						
					</div>
					<!-- END SIDEBAR 1 -->
				</div>
			</div>
		</div>
		<!-- BEGIN CONTENT 1 WRAPPER -->
		
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/includes/home-map/properties-slider'); ?>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
						
		<!-- BEGIN CONTENT 2 WRAPPER -->
		<div class="content gray">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT 2 -->	
					<div class="main col-sm-8">
					

<?php get_template_part ('/includes/home-map/property-gallery'); ?>					
					
<?php get_template_part ('/includes/home-map/latest-news'); ?>		
					</div>
					<!-- END MAIN CONTENT -->
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
					
						<p class="text-highlight center" data-animation-direction="from-bottom" data-animation-delay="50"><strong>Cozy</strong> it's an Awesome Real Estate Template!<p>
						<p data-animation-direction="from-bottom" data-animation-delay="50">Cozy Template offers you a lot of useful features that will help customize your website according to your needs. Save time and money with this amazing template.</p>
						
						<!-- BEGIN FEATURES LIST -->
<?php get_template_part ('/includes/home-map/feature-list'); ?>	
						<!-- END FEATURES LIST -->
						
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="1050"><a href="http://themeforest.net/user/WiselyThemes" class="btn btn-default-color"><i class="fa fa-shopping-cart"></i>Buy Cozy Template Here!</a></p>
						
						
<?php get_template_part ('/includes/home-map/our-partners'); ?>	
						
					</div>
					<!-- END SIDEBAR 2 -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT 2 WRAPPER -->
		
		
		<!-- BEGIN TWITTER WRAPPER WITH COLORED BACKGROUND-->
<?php get_template_part ('/includes/home-map/twitter'); ?>	
		<!-- END TWITTER WRAPPER WITH COLORED BACKGROUND-->
		
		
<?php get_footer(); ?>