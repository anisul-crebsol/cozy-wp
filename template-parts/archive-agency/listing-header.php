<?php 
$agency_sort_by = '';
if(isset($_GET['agency_sort_by'])){ $agency_sort_by = esc_attr($_GET['agency_sort_by']); }
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="listing-header" class="clearfix">
	<div class="form-control-small">
		<select id="agency_sort_by" name="agency_sort_by" data-placeholder="<?php _e('Sort', 'cozy'); ?>">
			<option value=""> </option>
			<option value="city"><?php _e('Sort by City', 'cozy'); ?></option>
			<option value="state"><?php _e('Sort by State', 'cozy'); ?></option>
		</select>
	</div>
	
	<div class="form-control-small">
		<select id="sort_by_agency" name="sort_by_agency" data-placeholder="<?php _e('Choose', 'cozy'); ?>">
			<option value=""></option>
			<?php foreach(get_agency_city_state() as $state_city){ ?>
			<option value="?sorted_by=<?php if(@$_GET['sorted_by']): echo @$_GET['sorted_by']; else: echo 'state'; endif;  ?>&sort_by_agency=<?php echo $state_city; ?>"><?php echo $state_city; ?></option>
		<?php }  ?>
		</select>
	</div>
	
	<div class="view-mode">
		<span><?php _e('View Mode', 'cozy'); ?>:</span>
		<ul>
			<li data-view="agencies-grid" data-target="agencies-results"><i class="fa fa-th"></i></li>
			<li data-view="agencies-list" data-target="agencies-results" class="active"><i class="fa fa-th-list"></i></li>
		</ul>
	</div>
</div>