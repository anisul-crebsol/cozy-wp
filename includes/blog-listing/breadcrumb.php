<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-title"><?php the_title(); ?></h1>
				
				<ul class="breadcrumb">
					<?php if (function_exists('wt_cozy_breadcrumb')){
					 wt_cozy_breadcrumb();
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>