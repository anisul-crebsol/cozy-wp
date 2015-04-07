<?php
/**
 * Template Name: About
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
		<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">About Us</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#">Pages</a></li>
							<li><a href="about.html">About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN HIGHLIGHT -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="main col-sm-6">
						<div class="center">
							<h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">Cozy it's a clean and modern Real Estate Template!</h2>
							<p class="darker-text" data-animation-direction="from-left" data-animation-delay="250">Very professional and highly customizable html5 template with lots of custom pages and useful features.</p>
							<p data-animation-direction="from-left" data-animation-delay="650">Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo, id pharetra mi tortor at tellus. Etiam ornare, enim at tincidunt congue, nibh dui suscipit augue, pellentesque hendrerit ligula lorem vehicula sapien. Nunc aliquet pulvinar porta. Sed et ligula at lacus posuere convallis ornare, enim at tincidunt congue, nibh dui suscipit augue.</p>
							<br/>
							<a href="#" class="btn btn-default-color" data-animation-direction="from-left" data-animation-delay="850">Buy Cozy Template!</a>
						</div>
					</div>
					
					<div class="col-sm-6">
						<img id="about-img" src="http://placehold.it/670x592" alt="" data-animation-direction="from-right" data-animation-delay="200" />
					</div>
				</div>
			</div>
		</div>
		<!-- END HIGHLIGHT -->
		
		
		<!-- BEGIN SERVICES -->
		<div class="gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Work With Cozy Real-Estate</h1>
					
						<ul class="services">
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="250">
								<h3><i class="fa fa-tags"></i> Sell or rent a property</h3>
								<p>Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo id pharetra. <a href="#">Learn more</a></p>
							</li>
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="450">
								<h3><i class="fa fa-search"></i> Find a property</h3>
								<p>Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo id pharetra. <a href="#">Learn more</a></p>
							</li>
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="650">
								<h3><i class="fa fa-building"></i> Work with our team</h3>
								<p>Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo id pharetra. <a href="#">Learn more</a></p>
							</li>
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="850">
								<h3><i class="fa fa-group"></i> Become a partner</h3>
								<p>Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo id pharetra. <a href="#">Learn more</a></p>
							</li>
						</ul>
					
						<div class="center">
							<a href="register.html" class="btn btn-default-color" data-animation-direction="from-bottom" data-animation-delay="1050">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END SERVICES -->
		
		
		<!-- BEGIN PROPERTY TYPE BUTTONS -->
		<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">What are you looking for?</h1>
						
						<ul class="property-large-buttons2 clearfix">
							<li data-animation-direction="from-bottom" data-animation-delay="250">
								<i class="fa fa-home"></i><br>
								<h4>Residential</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
							<li data-animation-direction="from-bottom" data-animation-delay="450">
								<i class="fa fa-tags"></i><br>
								<h4>Commercial</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
							<li data-animation-direction="from-bottom" data-animation-delay="650">
								<i class="fa fa-leaf"></i><br>
								<h4>Land</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PROPERTY TYPE BUTTONS -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
					
						<!-- BEGIN AGENTS GRID -->
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agents</h1>
						<ul class="agents-grid">
							<li class="col-sm-3" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
									<a href="agent-detail.html"><span class="btn btn-default"><i class="fa fa-comment-o"></i> Contact</span></a>
									<img src="http://placehold.it/307x307" alt="" />
								</div>
								<div class="info">
									<h2>John Doe <small>Manhattan, New York</small></h2>
									
									<p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem.</p>
									
									<ul class="social-networks">
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</li>
							<li class="col-sm-3" data-animation-direction="from-bottom" data-animation-delay="450">
								<div class="image">
									<a href="agent-detail.html"><span class="btn btn-default"><i class="fa fa-comment-o"></i> Contact</span></a>
									<img src="http://placehold.it/307x307" alt="" />
								</div>
								<div class="info">
									<h2>Mary Ipsum Dolor <small>Miami, Florida</small></h2>
									<p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem.</p>
									
									<ul class="social-networks">
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</li>
							<li class="col-sm-3" data-animation-direction="from-bottom" data-animation-delay="650">
								<div class="image">
									<a href="agent-detail.html"><span class="btn btn-default"><i class="fa fa-comment-o"></i> Contact</span></a>
									<img src="http://placehold.it/307x307" alt="" />
								</div>
								<div class="info">
									<h2>Sarah Donec <small>Beverly Hills, California</small></h2>
									<p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem.</p>
									
									<ul class="social-networks">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</li>
							<li class="col-sm-3" data-animation-direction="from-bottom" data-animation-delay="850">
								<div class="image">
									<a href="agent-detail.html"><span class="btn btn-default"><i class="fa fa-comment-o"></i> Contact</span></a>
									<img src="http://placehold.it/307x307" alt="" />
								</div>
								<div class="info">
									<h2>George Lorem <small>Long Island, New York</small></h2>
									<p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem.</p>
									
									<ul class="social-networks">
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</li>
						</ul>
						<!-- END AGENTS GRID -->
						
						<!-- BEGIN AGENCIES GRID -->
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agencies</h1>
						<ul class="agencies-grid">
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="250">
								<div id="agency_map1" class="map"></div>
								<div class="info">
									<h2>Agency 1 <small>New York</small></h2>
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="450">
								<div id="agency_map2" class="map"></div>
								<div class="info">
									<h2>Agency 2 <small>California</small></h2>
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="650">
								<div id="agency_map3" class="map"></div>
								<div class="info">
									<h2>Agency 3 <small>New York</small></h2>
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							
							<li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="850">
								<div id="agency_map4" class="map"></div>
								<div class="info">
									<h2>Agency 4 <small>New York</small></h2>
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
						</ul>
						<!-- END AGENCIES GRID -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
		<!-- BEGIN PARTNERS WRAPPER -->
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Partners</h1>
						
						<div id="partners">
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
								<a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
								<a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
								<a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
								<a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PARTNERS WRAPPER -->
		
		
<?php get_footer(); ?>