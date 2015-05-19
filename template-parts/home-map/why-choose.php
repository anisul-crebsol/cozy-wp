<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_why_choose_display']) : ?>
<div id="countup" class="parallax dark-bg" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="section-title" data-animation-direction="from-top" data-animation-delay="50"><?php echo $wt_cozy['section_why_choose_title']?></h1>
				
				<div class="funfacts">
					<div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
						<span class="timer" data-to="<?php echo $wt_cozy['section_why_choose_number1']?>"></span>
						<?php echo $wt_cozy['section_why_choose_text1']?>
					</div>
					<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
						<span class="timer" data-to="<?php echo $wt_cozy['section_why_choose_number2']?>"></span>
						<?php echo $wt_cozy['section_why_choose_text2']?>
					</div>
					<div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
						<span class="timer" data-to="<?php echo $wt_cozy['section_why_choose_number3']?>"></span>
						<?php echo $wt_cozy['section_why_choose_text3']?>
					</div>
					<div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
						<span class="timer" data-to="<?php echo $wt_cozy['section_why_choose_number3']?>"></span>
						<?php echo $wt_cozy['section_why_choose_text4']?>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 center" data-animation-direction="from-top" data-animation-delay="1050">
				<a href="<?php echo esc_url( home_url( '/about/') ); ?>" class="btn btn-default"><?php _e('Learn More', 'cozy'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>