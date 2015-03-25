<?php global $wt_cozy; ?>
		<section id="home-search-section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" data-animation-direction="from-top" data-animation-delay="50">
						
						<h2 class="slider-title"><?php echo $wt_cozy['section_search_heading']?></h2>
						<div class="slider-subtitle"><?php echo $wt_cozy['section_search_heading2']?></div>
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