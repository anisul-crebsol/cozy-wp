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
								<li><a href="<?php echo esc_url( home_url( '/login/' ) ); ?>"><i class="fa fa-sign-in"></i> Login</a></li>
								<li><a href="<?php echo esc_url( home_url( '/register/' ) ); ?>"><i class="fa fa-pencil-square-o"></i> Register</a></li>
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
								<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input class="sb-search-input" placeholder="Search..." type="text" value="" name="s" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<i class="fa fa-search sb-icon-search"></i>
								</form>
							</div>
							<!-- END SEARCH -->
							
							<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
						        <?php
						            wp_nav_menu( array(
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'depth'             => 4,
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