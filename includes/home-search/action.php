<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_action_display']) : ?>
	<div class="action-box">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center">
					<h2><?php echo $wt_cozy['section_action_description']?></h2>
					<div>
					<a href="<?php echo $wt_cozy['section_action_link']?>" target="_blank" class="btn btn-default btn-lg"><?php echo $wt_cozy['section_action_buy']?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>