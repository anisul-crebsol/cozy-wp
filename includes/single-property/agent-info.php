<?php global $wt_cozy; ?>
<?php 
	$property_agent_id = get_post_meta( $post->ID, '_wt_property_author', true );
	$property_agent_address = get_post_meta( $property_agent_id, '_wt_agent_address', true );
	$property_agent_email = get_post_meta( $property_agent_id, '_wt_agent_email', true );
	$property_agent_image = get_post_meta( $property_agent_id, '_wt_agent_img', true );
	$property_agent_country = get_post_meta( $property_agent_id, '_wt_agent_country', true );
	$property_agent_telephone = get_post_meta( $property_agent_id, '_wt_agent_telephone', true );
	$content_post = get_post($property_agent_id);
	$property_agent_title = $content_post->post_title;
?>
<h1 class="section-title">Agent Information</h1>
<div class="property-agent-info">
	<div class="agent-detail col-md-4">
		<div class="image">
			<?php
			if ($property_agent_image) {
				echo '<img alt="" src="'. $property_agent_image .' " />';
			}
			else {
				echo '<img alt="" src="http://placehold.it/307x307" />';
			}
			?>
		</div>
		
		<div class="info">
			<header>
				<h2><?php echo $property_agent_title; ?> <small><?php echo $property_agent_address; ?></small></h2>
			</header>
			
			<ul class="contact-us">
				<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $property_agent_email; ?>"><?php echo $property_agent_email; ?></a></li>
				<li><i class="fa fa-map-marker"></i> <?php echo $property_agent_address .',' .' '. $property_agent_country ?></li>
				<li><i class="fa fa-phone"></i> <?php echo $property_agent_telephone; ?></li>
			</ul>
		</div>
	</div>
	<form class="form-style col-md-8">
		<div class="col-sm-12">
			<input type="text" name="Name" placeholder="Name" class="form-control required fromName" />
		</div>
		
		<div class="col-sm-12">
			<input type="email" name="Email" placeholder="Email" class="form-control required fromEmail"  />
		</div>
		
		<div class="col-sm-12">
			<input type="text" name="Subject" placeholder="Subject" class="form-control required subject"  />
			<textarea name="Message" placeholder="Message" class="form-control required"></textarea> 
		</div>
		
		<div class="center">
			<button type="submit" class="btn btn-default-color submit_form"><i class="fa fa-envelope"></i> Send Message</button>
		</div>
	</form>
</div>