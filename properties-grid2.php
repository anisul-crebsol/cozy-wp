<?php
/**
 * Template Name: Properties Grid2
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
						<h1 class="page-title">Property Grid Listing 2</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#">Properties</a></li>
							<li><a href="properties-grid2.html">Property Grid Listing 2</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background) -->
		<div id="advanced-search" class="gray open">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form>
							<div class="form-group">
								<div class="form-control-large">
									<input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">
								</div>
								
								<div class="form-control-large">
									<select id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
										<option value=""> </option>
										<option value="residential">Residential</option>
										<option value="commercial">Commercial</option>
										<option value="land">Land</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_status" name="search_status" data-placeholder="Status">
										<option value=""> </option>
										<option value="sale">For Sale</option>
										<option value="rent">For Rent</option>
									</select>
								</div>
								
								<div class="form-control-small">
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
								</div>
								
								<div class="form-control-small">
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
								
								<div class="form-control-small">
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
								
								<div class="form-control-small">
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
								
								<button type="submit" class="btn btn-fullcolor">Search</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- END HOME ADVANCED SEARCH -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
							
						<select class="chosen-select" tabindex="-1" multiple="" data-placeholder="Searched Parameters">
							<option value=""> </option>
							<option selected value="New York">New York</option>
							<option selected value="Residential">Residential</option>
							<option selected value="Sale">Sale</option>
							<option selected value="3 bedrooms">3 bedrooms</option>
							<option selected value="2 bathrooms">2 bathrooms</option>
							<option selected value="Min. 70.000$">Min. 70.000$</option>
							<option selected value="Min. 120.000$">Min. 120.000$</option>
						</select>			
							
						<!-- BEGIN PROPERTY LISTING -->
						<div id="property-listing" class="grid-style1 clearfix">
							<div class="row">
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Luxury Apartment with great views</h3>
											<span class="location">Upper East Side, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$950,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 2150 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 4</li>
										<li><i class="icon-bathrooms"></i> 3</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Stunning Villa with 5 bedrooms</h3>
											<span class="location">Miami Beach, Florida</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$1,253,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 3470 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 5</li>
										<li><i class="icon-bathrooms"></i> 4</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Recent construction with 3 bedrooms</h3>
											<span class="location">Park Slope, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$560,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 1800 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 3</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
							</div>
							
							<div class="row">
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Modern construction with parking space</h3>
											<span class="location">Midtown, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Rent
										<span>$850</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 1300 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 1</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Single Family Townhouse</h3>
											<span class="location">Cobble Hill, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$846,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 1580 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 2</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>3 bedroom villa with garage for rent</h3>
											<span class="location">Bal Harbour, Florida</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Rent
										<span>$1,500</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 2000 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 3</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
							</div>
							
							<div class="row">
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Recent construction with 3 bedrooms.</h3>
											<span class="location">Manhattan, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$120,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 3250 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 3</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Luxury Condo with 2 bedroms</h3>
											<span class="location">Brooklyn Heights, New York</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$2,120,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 3120 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 4</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
								
								<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
									<div class="image">
										<a href="properties-detail.html">
											<h3>Edition Residences on Collins Avenue</h3>
											<span class="location">Miami Beach, Florida</span>
										</a>
										<img src="http://placehold.it/760x670" alt="" />
									</div>
									<div class="price">
										<i class="fa fa-home"></i>For Sale
										<span>$975,000</span>
									</div>
									<ul class="amenities">
										<li><i class="icon-area"></i> 1200 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 1</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- END PROPERTY LISTING -->
						
						
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

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>