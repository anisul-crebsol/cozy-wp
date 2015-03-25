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
		<div id="home-map">
			<div id="properties_map"></div>
			
			<!-- BEGIN MAP PROPERTY FILTER -->
			<div id="map-property-filter">
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<i id="filter-close" class="fa fa-minus"></i>
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
			<!-- END MAP PROPERTY FILTER -->
		</div>
		<!-- END HOME MAP -->
		
		<!-- BEGIN ACTION BOX -->
		<div class="action-box">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Subscribe our <strong>Newsletter</strong></h3>
						<p>Lorem ipsum dolor sit amet, consectetur elit.</p>
					</div>
					<div class="col-md-4">
						<div id="newsletter" class="center">
							<div class="input-group">
								<input type="text" placeholder="Enter your E-mail" name="newsletter_email" id="newsletter_email" class="form-control" />
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">Subscribe</button>
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- BEGIN SOCIAL NETWORKS -->
						<ul class="social-networks">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
						<!-- END SOCIAL NETWORKS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END ACTION BOX -->
		
		<!-- BEGIN CONTENT 1 WRAPPER -->
		<div class="content gray">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT 1 -->
					<div class="main col-sm-8">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest Properties</h1>
						
						<!-- BEGIN LATEST PROPERTIES SLIDER -->
						<div id="latest-properties-slider" class="owl-carousel fullwidthsingle2" data-animation-direction="from-bottom" data-animation-delay="250">
							<div class="item">
								<div class="image">
									<a href="properties-detail.html">
										<img src="http://placehold.it/760x670" alt="" />
									</a>
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For Sale
									<span>$950,000</span>
								</div>
								<div class="info">
									<div class="item-title col-md-8">
										<h3><a href="properties-detail.html">Luxury Apartment with great views</a></h3>
										<span class="location">Upper East Side, New York</span>
									</div>
									<ul class="amenities col-md-4">
										<li><i class="icon-area"></i> 2150 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 4</li>
										<li><i class="icon-bathrooms"></i> 3</li>
									</ul>
									<div class="description">
										<p class="col-md-9">
											Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
										</p>
										<p class="col-md-3 right">
											<a href="properties-detail.html" class="btn btn-default-color">Read More</a>
										</p>
									</div>
								</div>
							</div>
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html">
										<img src="http://placehold.it/760x670" alt="" />
									</a>
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For Sale
									<span>$1,253,000</span>
								</div>
								<div class="info">
									<div class="item-title col-md-8">
										<h3><a href="properties-detail.html">Stunning Villa with 5 bedrooms</a></h3>
										<span class="location">Miami Beach, Florida</span>
									</div>
									<ul class="amenities col-md-4">
										<li><i class="icon-area"></i> 3470 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 5</li>
										<li><i class="icon-bathrooms"></i> 4</li>
									</ul>
									<div class="description">
										<p class="col-md-9">
											Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
										</p>
										<p class="col-md-3 right">
											<a href="properties-detail.html" class="btn btn-default-color">Read More</a>
										</p>
									</div>
								</div>
							</div>
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html">
										<img src="http://placehold.it/760x670" alt="" />
									</a>
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For Sale
									<span>$560,000</span>
								</div>
								<div class="info">
									<div class="item-title col-md-8">
										<h3><a href="properties-detail.html">Recent construction with 3 bedrooms</a></h3>
										<span class="location">Park Slope, New York</span>
									</div>
									<ul class="amenities col-md-4">
										<li><i class="icon-area"></i> 1800 Sq Ft</li>
										<li><i class="icon-bedrooms"></i> 3</li>
										<li><i class="icon-bathrooms"></i> 2</li>
									</ul>
									<div class="description">
										<p class="col-md-9">
											Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
										</p>
										<p class="col-md-3 right">
											<a href="properties-detail.html" class="btn btn-default-color">Read More</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- END LATEST PROPERTIES SLIDER -->
						
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">What are you looking for?</h1>
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="150">Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.</p>
						<ul class="property-large-buttons clearfix">
							<li id="residential" data-animation-direction="from-bottom" data-animation-delay="250">
								<i class="fa fa-home"></i><br>
								<h4>Residential</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
							<li id="commercial" data-animation-direction="from-bottom" data-animation-delay="450">
								<i class="fa fa-tags"></i><br>
								<h4>Commercial</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
							<li id="land" data-animation-direction="from-bottom" data-animation-delay="650">
								<i class="fa fa-leaf"></i><br>
								<h4>Land</h4>
								<a href="properties-grid.html" class="btn btn-default">View All</a>
							</li>
						</ul>
					</div>	
					<!-- END MAIN CONTENT 1-->
					
					<!-- BEGIN SIDEBAR 1 -->
					<div class="sidebar gray col-sm-4">
						
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Contact Us</h2>
						<ul class="contact-us" data-animation-direction="from-bottom" data-animation-delay="250">
							<li><i class="fa fa-map-marker"></i> 24th Street, New York, USA</li>
							<li><i class="fa fa-phone"></i> 00351 123 456 789</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:email@yourbusiness.com">email@yourbusiness.com</a></li>
						</ul>
						
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">More Features</h2>
						<!-- BEGIN ACCORDION -->
						<div id="accordion" class="panel-group" data-animation-direction="from-bottom" data-animation-delay="250">
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
											Unlimited Colors
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
											4 Different Homepages
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
											Working Contact Form
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										Ad squid 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Ad vegan excepteur butcher vice lomo.
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
											And so Much More...
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										Quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
									</div>
								</div>
							</div>
						</div>
						<!-- END ACCORDION -->
						
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">More Features</h2>
						<!-- BEGIN TABS -->
						<ul class="nav nav-tabs" data-animation-direction="from-bottom" data-animation-delay="250">
							<li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
							<li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
							<li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
							<li><a href="#tab4" data-toggle="tab">Tab 4</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<h4>Lorem ipsum dolor sit amet</h4>
								Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
							</div>
							<div class="tab-pane" id="tab2">
								<h4>Praesent pulvinar placerat</h4>
								Dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
							</div>
							<div class="tab-pane" id="tab3">
								<h4>libero a sapien adipiscing</h4>
								Praesent eu libero a sapien adipiscing interdum feugiat id lectus. Curabitur dignissim tortor ut scelerisque consectetur.
							</div>
							<div class="tab-pane" id="tab4">
								<h4>Interdum feugiat id lectus</h4>
								Scelerisque consectetur praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.
							</div>
						</div>
						<!-- END TABS -->
						
					</div>
					<!-- END SIDEBAR 1 -->
				</div>
			</div>
		</div>
		<!-- BEGIN CONTENT 1 WRAPPER -->
		
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
		<div id="countup" class="parallax dark-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-top" data-animation-delay="50">Why Choose Us?</h1>
						
						<div class="funfacts">
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
								<span class="timer" data-to="1281"></span>
								Properties<br/>Rented
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
								<span class="timer" data-to="426"></span>
								Residential<br/>Properties Sold
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
								<span class="timer" data-to="179"></span>
								Commercial<br/>Properties Sold
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
								<span class="timer" data-to="153"></span>
								Land<br/>Properties Sold
							</div>
						</div>
					</div>
					
					<div class="col-sm-12 center" data-animation-direction="from-top" data-animation-delay="1050">
						<a href="about.html" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
						
		<!-- BEGIN CONTENT 2 WRAPPER -->
		<div class="content gray">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT 2 -->	
					<div class="main col-sm-8">
					
						<div id="property-gallery2" class="property-gallery2">
							<div class="item">
								<h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50">Cozy Gallery</h1>
								<p class="section-text" data-animation-direction="from-left" data-animation-delay="250">Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
									<h3>Luxury Apartment with great views</h3>
									<span class="location">Upper East Side, New York</span>
								</a>
								<img src="http://placehold.it/246x236" alt="" />
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="550">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
									<h3>Stunning Villa with 5 bedrooms</h3>
									<span class="location">Miami Beach, Florida</span>
								</a>
								<img src="http://placehold.it/246x236" alt="" />
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
									<h3>Recent construction with 3 bedrooms</h3>
									<span class="location">Park Slope, New York</span>
								</a>
								<img src="http://placehold.it/246x236" alt="" />
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="750">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
									<h3>Modern construction with parking space</h3>
									<span class="location">Midtown, New York</span>
								</a>
								<img src="http://placehold.it/246x236" alt="" />
							</div>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
									<h3>Single Family Townhouse</h3>
									<span class="location">Cobble Hill, New York</span>
								</a>
								<img src="http://placehold.it/246x236" alt="" />
							</div>
						</div>
					
					
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>
						
						<div id="latest-news-slider" class="owl-carousel latest-news-slider" data-animation-direction="from-bottom" data-animation-delay="250">
							<div class="item">
								<div class="image">
									<a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								
								<div class="tag"><i class="fa fa-file-text"></i></div>
								
								<div class="info">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 30, 2014</li>
										<li><i class="fa fa-comments-o"></i> 2</li>
										<li><i class="fa fa-tags"></i> Properties, Prices, best deals</li>
									</ul>
										
									<h3><a href="blog-detail.html">How to get your dream property for the best price?</a></h3>
									<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et.</p>
								</div>
							</div>
							
							<div class="item">
								<div class="image">
									<a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								
								<div class="tag"><i class="fa fa-film"></i></div>
								
								<div class="info">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 24, 2014</li>
										<li><i class="fa fa-comments-o"></i> 4</li>
										<li><i class="fa fa-tags"></i> Tips, Mortgage</li>
									</ul>
										
									<h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>
									<p>Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
								</div>
							</div>
							
							<div class="item">
								<div class="image">
									<a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								
								<div class="tag"><i class="fa fa-file-text"></i></div>
								
								<div class="info">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 05, 2014/li>
										<li><i class="fa fa-comments-o"></i> 1</li>
										<li><i class="fa fa-tags"></i> Image, Text</li>
									</ul>
									
									<h3><a href="blog-detail.html">House, location or price: What's the most important factor?</a></h3>
									<p>Fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- END MAIN CONTENT -->
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
					
						<p class="text-highlight center" data-animation-direction="from-bottom" data-animation-delay="50"><strong>Cozy</strong> it's an Awesome Real Estate Template!<p>
						<p data-animation-direction="from-bottom" data-animation-delay="50">Cozy Template offers you a lot of useful features that will help customize your website according to your needs. Save time and money with this amazing template.</p>
						
						<!-- BEGIN FEATURES LIST -->
						<ul class="features-list">
							<li data-animation-direction="from-right" data-animation-delay="250"><i class="fa fa-check-square"></i> Responsive Design and Retina Ready</li>
							<li data-animation-direction="from-right" data-animation-delay="350"><i class="fa fa-check-square"></i> Flexible Grid built with Bootstrap</li>
							<li data-animation-direction="from-right" data-animation-delay="450"><i class="fa fa-check-square"></i> HTML5 and CSS3</li>
							<li data-animation-direction="from-right" data-animation-delay="550"><i class="fa fa-check-square"></i> Clean and well-commented Code</li>
							<li data-animation-direction="from-right" data-animation-delay="650"><i class="fa fa-check-square"></i> Crossbrowser Compatible</li>
							<li data-animation-direction="from-right" data-animation-delay="750"><i class="fa fa-check-square"></i> Parallax Image Effect</li>
							<li data-animation-direction="from-right" data-animation-delay="850"><i class="fa fa-check-square"></i> 4 completely different Homepages</li>
							<li data-animation-direction="from-right" data-animation-delay="950"><i class="fa fa-check-square"></i> Highly Customizable Tempalte</li>
						</ul>
						<!-- END FEATURES LIST -->
						
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="1050"><a href="http://themeforest.net/user/WiselyThemes" class="btn btn-default-color"><i class="fa fa-shopping-cart"></i>Buy Cozy Template Here!</a></p>
						
						
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Partners</h2>
						
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
					<!-- END SIDEBAR 2 -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT 2 WRAPPER -->
		
		
		<!-- BEGIN TWITTER WRAPPER WITH COLORED BACKGROUND-->
		<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					
					<div id="twitter-slider" class="owl-carousel twitter" data-animation-direction="from-bottom" data-animation-delay="50">
						<div class="item"></div><!-- This div (with class "item") will be automatically popuplated with a single tweet from your last tweets -->
						
						<div class="item"></div><!-- This div (with class "item") will be automatically popuplated with a single tweet from your last tweets -->
						
						<div class="item"></div><!-- This div (with class "item") will be automatically popuplated with a single tweet from your last tweets -->
					</div>
					
				</div>
			</div>
		</div>
		<!-- END TWITTER WRAPPER WITH COLORED BACKGROUND-->
		
		
<?php get_footer(); ?>