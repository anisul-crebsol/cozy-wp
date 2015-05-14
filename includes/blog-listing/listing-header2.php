<?php
$sort_order = esc_attr($_GET['sort_order']); 
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="listing-header" class="clearfix">
	<div class="form-control-small sort">
		<ul>
			<li class="<?php if ($sort_order == "desc" || $sort_order == ""){ echo $active_class = 'active'; } ?>"><a  href="<?php echo addURLParameter($url, 'sort_order','desc'); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php _e('Sort Descending', 'cozy'); ?>" class="fa fa-chevron-down"></i></a></li>

			<li class="<?php if ($sort_order == "asc"){ echo $active_class = 'active'; } ?>"><a href="<?php echo addURLParameter($url, 'sort_order','asc'); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php _e('Sort Ascending', 'cozy'); ?>" class="fa fa-chevron-up"></i></a></li>
		</ul>
	</div>
</div>