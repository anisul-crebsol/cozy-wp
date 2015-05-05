<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php if ( is_single()) { ?>
				<h1 class="page-title"><?php _e( 'Details', 'cozy' );?></h1>
			<?php }
			 	else { ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
			<?php } ?>
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