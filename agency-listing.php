<?php
/**
 * Template Name: Agency Listing
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
						<h1 class="page-title">Agency Listing</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#">Pages</a></li>
							<li><a href="agency-listing.html">Agency Listing</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
						
						<div id="listing-header" class="clearfix">
							<div class="form-control-small">
								<select id="sort_by" name="sort_by" data-placeholder="Sort">
									<option value=""> </option>
									<option value="city">Sort by City</option>
									<option value="state">Sort by State</option>
								</select>
							</div>
							
							<div class="form-control-small">
								<select id="sort_city" name="sort_city" data-placeholder="Choose City">
									<option value=""> </option>
									<option value="washington">Washington, D.C.</option>
									<option value="miami">Miami</option>
									<option value="newyork">New York</option>
									<option value="losangeles">Los Angeles</option>
								</select>
							</div>
							
							<div class="view-mode">
								<span>View Mode:</span>
								<ul>
									<li data-view="agencies-grid" data-target="agencies-results"><i class="fa fa-th"></i></li>
									<li data-view="agencies-list" data-target="agencies-results" class="active"><i class="fa fa-th-list"></i></li>
								</ul>
							</div>
						</div>
						
						<!-- BEGIN AGENCIES LISTING -->
						<ul id="agencies-results" class="agencies-list">
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map1" class="map"></div>
								<div class="info">
									<h2>Agency 1 <small>New York</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map2" class="map col-md-5"></div>
								<div class="info col-md-7">
									<h2>Agency 2 <small>California</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map3" class="map col-md-5"></div>
								<div class="info col-md-7">
									<h2>Agency 3 <small>New York</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map4" class="map col-md-5"></div>
								<div class="info col-md-7">
									<h2>Agency 4 <small>New York</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map5" class="map col-md-5"></div>
								<div class="info col-md-7">
									<h2>Agency 5 <small>Florida</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
							<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
								<div id="agency_map6" class="map col-md-5"></div>
								<div class="info col-md-7">
									<h2>Agency 6 <small>Florida</small></h2>
									
									<p>Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque.</p>
									
									<ul class="contact-us">
										<li><a href="mailto:agency.name@yourdomain.com"><i class="fa fa-envelope"></i> agency.name@yourdomain.com</a></li>
									</ul>
									
									<a href="agency-detail.html" class="btn btn-default-color">More Details</a>
								</div>
							</li>
						</ul>
						<!-- END AGENCIES LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
						<div class="pagination">
							<ul id="previous">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
							</ul>
							<ul>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
							</ul>
							<ul id="next">
								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
						<h2 class="section-title">Search Property</h2>
						<form>
							<div class="form-group">
								
								<div class="col-sm-12">
									<input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">
									
									<select class="col-sm-12" id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
										<option value=""> </option>
										<option value="residential">Residential</option>
										<option value="commercial">Commercial</option>
										<option value="land">Land</option>
									</select>
								
									<select id="search_status" name="search_status" data-placeholder="Status">
										<option value=""> </option>
										<option value="sale">For Sale</option>
										<option value="rent">For Rent</option>
									</select>
								</div>
								
								<div class="col-md-6">
									<select id="search_minarea" name="search_minarea" data-placeholder="Min. Area">
										<option value=""> </option>
										<option value="50">50m2</option>
										<option value="100">100m2</option>
										<option value="150">150m2</option>
										<option value="200">200m2</option>
										<option value="300">300m2</option>
										<option value="500">500m2</option>
										<option value="700">700m2</option>
										<option value="1000">1000m2</option>
									</select>
								</div>
								
								<div class="col-md-6">
									<select id="search_maxarea" name="search_maxarea" data-placeholder="Max. Area">
										<option value=""> </option>
										<option value="50">50m2</option>
										<option value="100">100m2</option>
										<option value="150">150m2</option>
										<option value="200">200m2</option>
										<option value="300">300m2</option>
										<option value="500">500m2</option>
										<option value="700">700m2</option>
										<option value="1000">1000m2</option>
									</select>
								</div>
								
								<div class="col-sm-12">
									<select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
										<option value=""> </option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5plus">5+</option>
									</select>
									
									<select id="search_bathrooms" name="search_bathrooms" data-placeholder="Bathrooms">
										<option value=""> </option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="4plus">4+</option>
									</select>
								</div>
									
								<div class="col-md-6">
									<select id="search_minprice" name="search_minprice" data-placeholder="Min. Price">
										<option value=""> </option>
										<option value="0">$0</option>
										<option value="25000">$25000</option>
										<option value="50000">$50000</option>
										<option value="75000">$75000</option>
										<option value="100000">$100000</option>
										<option value="150000">$150000</option>
										<option value="200000">$200000</option>
										<option value="300000">$300000</option>
										<option value="500000">$500000</option>
										<option value="750000">$750000</option>
										<option value="1000000">$1000000</option>
									</select>
								</div>
							
								<div class="col-md-6">
									<select id="search_maxprice" name="search_maxprice" data-placeholder="Max. Price">
										<option value=""> </option>
										<option value="25000">$25000</option>
										<option value="50000">$50000</option>
										<option value="75000">$75000</option>
										<option value="100000">$100000</option>
										<option value="150000">$150000</option>
										<option value="200000">$200000</option>
										<option value="300000">$300000</option>
										<option value="500000">$500000</option>
										<option value="750000">$750000</option>
										<option value="1000000">$1000000</option>
										<option value="1000000plus">>$1000000</option>
									</select>
								</div>
								
								<p>&nbsp;</p>
								<p class="center">
									<button type="submit" class="btn btn-default-color">Search</button>
								</p>
							</div>
						</form>
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
						<h2 class="section-title">Latest News</h2>
						<ul class="latest-news">
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 30, 2014</li>
								</ul>
									
								<h3><a href="blog-detail.html">How to get your dream property for the best price?</a></h3>
							</li>
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 24, 2014</li>
								</ul>
									
								<h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>
							</li>
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 05, 2014</li>
								</ul>
								
								<h3><a href="blog-detail.html">House, location or price: What's the most important factor?</a></h3>
							</li>
						</ul>
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
						<div id="newsletter" class="col-sm-12">
							<h2 class="section-title">Subscribe our weekly<br><span>Newsletter</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
							
							<div class="input-group">
								<input type="text" placeholder="Enter your E-mail" name="newsletter_email" id="newsletter_email" class="form-control" />
								<span class="input-group-btn">
									<button class="btn btn-default-color" type="button">Subscribe</button>
								</span>
							</div>
						</div>
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>