<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_partners_display']) : ?>	
	<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_partners_title']?></h1>
					
					<div id="partners">						
						<?php 
							$page_id = ($wt_cozy['opt_select_partners']);
							$entries = get_post_meta( $page_id, '_wt_partners_repeat_group', true );
							
							foreach ( (array) $entries as $key => $entry ) {
								if (isset($entry['partner_image_hover']) ) {									
									$mouse_over_img = $entry['partner_image_hover'];
								} else {
									$mouse_over_img = 'http://placehold.it/194x45';
								}
								
								$partners_image = $entry['partner_image'];
								if($partners_image) : $partners_image = $partners_image; else : $partners_image = 'http://placehold.it/194x45'; endif;
							 ?>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
							<a href="<?php echo $entry['partner_link']; ?>"><img src="<?php echo $partners_image; ?>" alt='' <?php if($mouse_over_img): echo $mouse_over_img = "onmouseover=\"this.src='$mouse_over_img';\"  onmouseout=\"this.src='$partners_image';\""; endif; ?> ></img></a>
							</div>								
						<?php }	?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>