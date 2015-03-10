<?php get_header(); ?>
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="top-info">
								<li>Phone: 800-123-4567</li>
								<li>Email: <a href="mailto:hello@yourcompany.com">hello@yourcompany.com</a></li>
							</ul>
							
							<ul id="top-buttons">
								<li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-pencil-square-o"></i> Register</a></li>
								<li class="divider"></li>
								<li>
									<div class="language-switcher">
										<span><i class="fa fa-globe"></i> English</span>
										<ul>
											<li><a href="#">Deutsch</a></li>
											<li><a href="#">Espa&ntilde;ol</a></li>
											<li><a href="#">Fran&ccedil;ais</a></li>
											<li><a href="#">Portugu&ecirc;s</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="index.html" class="nav-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Cozy Logo" /></a>
							
							<!-- BEGIN SEARCH -->
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Search..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<i class="fa fa-search sb-icon-search"></i>
								</form>
							</div>
							<!-- END SEARCH -->
							
							<!-- BEGIN MAIN MENU -->
							<nav class="navbar">
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
								
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a class="active" href="#" data-toggle="dropdown" data-hover="dropdown">Home<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a class="active" href="index.html">Home Search</a></li>
											<li><a href="index-slider.html">Home Slider</a></li>
											<li><a href="index-grid.html">Home Grid</a></li>
											<li><a href="index-map.html">Home Map</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Properties<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="properties-detail.html">Properties Detail</a></li>
											<li><a href="properties-list.html">Properties List</a></li>
											<li><a href="properties-grid.html">Properties Grid</a></li>
											<li><a href="properties-grid2.html">Properties Grid 2</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Pages<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="about.html">About Us</a></li>
											<li class="dropdown-submenu">
												<a href="#">Agency</a>
												<ul class="dropdown-menu">
													<li><a href="agency-detail.html">Agency Detail</a></li>
													<li><a href="agency-listing.html">Agency Listing</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Agent</a>
												<ul class="dropdown-menu">
													<li><a href="agent-detail.html">Agent Detail</a></li>
													<li><a href="agent-listing.html">Agent Listing</a></li>
												</ul>
											</li>
											<li><a href="pricing-tables.html">Pricing Tables</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="404.html">404</a></li>
											
											<li class="divider"></li>
											<li><a tabindex="-1" href="#"> Separated link </a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Blog<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="blog-detail.html">Blog Detail</a></li>
											<li><a href="blog-listing1.html">Blog Listing 1</a></li>
											<li><a href="blog-listing2.html">Blog Listing 2</a></li>
											<li><a href="blog-listing3.html">Blog Listing 3</a></li>
											<li><a href="blog-listing4.html">Blog Listing 4</a></li>
										</ul>
									</li>
									
									<li><a href="contacts.html">Contacts</a></li>
								</ul>
								
							</nav>
							<!-- END MAIN MENU -->
							
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->
		
		
		<!-- BEGIN HOME SEARCH SECTION -->
		<section id="home-search-section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" data-animation-direction="from-top" data-animation-delay="50">
						
						<h2 class="slider-title">Find the perfect home</h2>
						<div class="slider-subtitle">With Cozy Real Estate HTML Template</div>
					</div>
					
					<div id="home-search-buttons" class="col-sm-6 col-sm-offset-3" data-animation-direction="from-bottom" data-animation-delay="250">
						<button class="btn btn-default active">For Sale</button>
						<button class="btn btn-default">For Rent</button>
						
						<div class="input-group">
							<input type="text" placeholder="City, State, Country, etc..." name="home_search" id="home_search" class="form-control" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i>Search</button>
							</span>
						</div>
						
						<a href="#" class="advanced-search">Advanced Search</a>
					</div>
				</div>
			</div>
		</section>
		<!-- END HOME SEARCH SECTION -->
		
		<!-- BEGIN ACTION BOX -->
		<div class="action-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 center">
						<h2>Cozy - Real Estate Template it's Awesome!<br/>It offers you a lot of great features.</h2>
						<div><a href="http://themeforest.net/user/WiselyThemes" target="_blank" class="btn btn-default btn-lg">Buy Now!</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ACTION BOX -->
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">New Properties Available</h1>
						
						<div id="new-properties-slider" class="owl-carousel carousel-style1">
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html" class="info">
										<h3>3 bedroom villa with garage for rent</h3>
										<span class="location">Bal Harbour, Florida</span>
									</a>
									<img src="http://placehold.it/760x670" alt="" />
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For Rent
									<span>$1500</span>
								</div>
								<ul class="amenities">
									<li><i class="icon-area"></i> 2000 Sq Ft</li>
									<li><i class="icon-bedrooms"></i> 3</li>
									<li><i class="icon-bathrooms"></i> 2</li>
								</ul>
							</div>
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html" class="info">
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
							
							<div class="item">
								<div class="image">
									<a href="properties-detail.html" class="info">
										<h3>Gorgeous Apartment in New York</h3>
										<span class="location">Soho - Nolita, New York</span>
									</a>
									<img src="http://placehold.it/760x670" alt="" />
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For Sale
									<span>$650,000</span>
								</div>
								<ul class="amenities">
									<li><i class="icon-area"></i> 1000 Sq Ft</li>
									<li><i class="icon-bedrooms"></i> 1</li>
									<li><i class="icon-bathrooms"></i> 1</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content colored">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Template Features</h1>

						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
							<i class="fa fa-pencil"></i>
							<h3>Simple, Clean & Modern Design</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="450">
							<i class="fa fa-tablet"></i>
							<h3>Fully Responsive & Retina Ready</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="650">
							<i class="fa fa-copy"></i>
							<h3>+20 different Pages highly Customizable</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						
						
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Property Gallery</h1>
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="150">Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et.</p>
					
						<div id="property-gallery" class="owl-carousel property-gallery">
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
			
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
						</div>
						
						
						<!-- BEGIN LATEST NEWS -->
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>
						<div class="latest-news list-style clearfix">
							<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
									<a href="blog-detail.html">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								<div class="tag"><i class="fa fa-file-text"></i></div>
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 30, 2014</li>
										<li><i class="fa fa-comments-o"></i> 2</li>
										<li><i class="fa fa-tags"></i> Properties, Prices, best deals</li>
									</ul>
									<h3>
										<a href="blog-detail.html">How to get your dream property for the best price?</a>
									</h3>
									<p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
								</div>
							</div>
							<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="450">
								<div class="image">
									<a href="blog-detail.html">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								<div class="tag"><i class="fa fa-film"></i></div>
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 24, 2014</li>
										<li><i class="fa fa-comments-o"></i> 4</li>
										<li><i class="fa fa-tags"></i> Tips, Mortgage</li>
									</ul>
									<h3>
										<a href="blog-detail.html">7 tips to get the best mortgage.</a>
									</h3>
									<p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
								</div>
							</div>
							<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="650">
								<div class="image">
									<a href="blog-detail.html">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									<img src="http://placehold.it/766x515" alt="" />
								</div>
								<div class="tag"><i class="fa fa-file-text"></i></div>
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> July 05, 2014</li>
										<li><i class="fa fa-comments-o"></i> 1</li>
										<li><i class="fa fa-tags"></i> Location, Price, House</li>
									</ul>
									<h3>
										<a href="blog-detail.html">House, location or price: What's the most important factor?</a>
									</h3>
									<p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
								</div>
							</div>
						</div>
						<!-- END LATEST NEWS -->
						
					</div>
					<!-- END MAIN CONTENT -->

					<!-- BEGIN SIDEBAR -->					
<?php get_sidebar(); ?>
					<!-- END SIDEBAR -->
					
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