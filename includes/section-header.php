<?php global $wt_cozy; ?>
		<header id="header">
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="top-info">
								<li><?php echo $wt_cozy['section_contact_phone']?></li>
								<li>Email: <a href="mailto:<?php echo $wt_cozy['section_contact_email']?>"><?php echo $wt_cozy['section_contact_email']?></a></li>                              
							</ul>
							
							<ul id="top-buttons">
								<li><a href="<?php echo wp_login_url( get_permalink() ); ?>"><i class="fa fa-sign-in"></i> Login</a></li>
								<li><a href="<?php echo wp_registration_url(); ?>"><i class="fa fa-pencil-square-o"></i> Register</a></li>
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
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo"><img src="<?php echo $wt_cozy['cozy_logo']['url']?>" alt="Cozy Logo" /></a>
							
							<!-- BEGIN SEARCH -->
							<div id="sb-search" class="sb-search">
								<form method="get" action="<?php echo home_url('/'); ?>">
									<input class="sb-search-input" placeholder="Search..." type="text" value="" name="s" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<i class="fa fa-search sb-icon-search"></i>
								</form>
							</div>
							<!-- END SEARCH -->
							
							<!-- BEGIN MAIN MENU -->
 							<!--<nav class="navbar">
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
								
							</nav> -->
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
							        <?php
							            wp_nav_menu( array(
							                'menu'              => 'primary',
							                'theme_location'    => 'primary',
							                'depth'             => 2,
							                'container'         => 'nav',
							                'container_class'   => 'navbar',
							                'container_id'      => '',
							                'menu_class'        => 'nav navbar-nav',
							                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							                'walker'            => new wp_bootstrap_navwalker()
							                )
							            );
							        ?>
							<!-- END MAIN MENU -->
							
						</div>
					</div>
				</div>
			</div>
		</header>