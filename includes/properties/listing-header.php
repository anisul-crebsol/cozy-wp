<?php $sort= esc_attr($_GET['sort']); ?>
<script>
jQuery(function () {
    // remove the below comment in case you need chnage on document ready
    // location.href=jQuery("#selectbox").val(); 
    jQuery("#sort_by").change(function () {
        location.href = jQuery(this).val();
    })
})
</script>
<?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (preg_match('/\?/', $url)) {
		$url = $url.'&';
	} else {
		$url = $url.'?';
	}
	if (preg_match('/\?/', $url)) {
		
	}
 ?>
<div id="listing-header" class="clearfix">
	<div class="form-control-small">
		<select id="sort_by" onchange="this.form.submit()" name="sort_by" data-placeholder="Sort">
			<option value=""> </option>
			<option value="<?php echo $url; ?>sort_date=asc"><?php _e( 'Sort by Date', 'cozy' ); ?></option>
			<option value="<?php echo $url; ?>sort_area=area"><?php _e( 'Sort by Area', 'cozy' ); ?></option>
		</select>
	</div>
	
	<div class="sort">
		<ul>
			<li class="<?php if ($sort == "desc" || $sort == ""){ echo $active_class = 'active'; } ?>"><a  href="<?php echo $url; ?>sort_order=desc"><i data-toggle="tooltip" data-placement="top" title="Sort Descending" class="fa fa-chevron-down"></i></a></li>

			<li class="<?php if ($sort == "asc"){ echo $active_class = 'active'; } ?>"><a href="<?php echo $url; ?>sort_order=asc"><i data-toggle="tooltip" data-placement="top" title="Sort Ascending" class="fa fa-chevron-up"></i></a></li>
		</ul>
	</div>
	
	<div class="view-mode">
		<span><?php _e('View Mode:', 'cozy'); ?></span>
		<ul>
			<li data-view="grid-style1" data-target="property-listing"><i class="fa fa-th"></i></li>
			<li data-view="list-style" data-target="property-listing" class="active"><i class="fa fa-th-list"></i></li>
		</ul>
	</div>
</div>