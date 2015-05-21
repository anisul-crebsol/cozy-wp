<?php
$sort_by = '';
$sort_order = '';
if(isset($_GET['sort_by'])){ $sort_by = esc_attr($_GET['sort_by']); }
if(isset($_GET['sort_order'])){ $sort_order = esc_attr($_GET['sort_order']); }
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="listing-header" class="clearfix">
    <div class="form-control-small">
        <select id="sort_by" onchange="this.form.submit()" name="sort_by" data-placeholder="<?php _e( 'Sort', 'cozy' ); ?>">
            <option value="<?php echo addURLParameter($url, 'sort_by',''); ?>"> </option>
            <option <?php if ($sort_by == 'date'){ echo $selected = 'selected'; } ?> value="<?php echo addURLParameter($url, 'sort_by','date'); ?>"><?php _e( 'Sort by Date', 'cozy' ); ?></option>
            <option <?php if ($sort_by == 'area'){ echo $selected = 'selected'; } ?> value="<?php echo addURLParameter($url, 'sort_by','area'); ?>"><?php _e( 'Sort by Area', 'cozy' ); ?></option>
        </select>
    </div>

    <div class="sort">
        <ul>
            <li class="<?php if ($sort_order == "desc" || $sort_order == ""){ echo $active_class = 'active'; } ?>"><a  href="<?php echo addURLParameter($url, 'sort_order','desc'); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php _e('Sort Descending', 'cozy'); ?>" class="fa fa-chevron-down"></i></a></li>

            <li class="<?php if ($sort_order == "asc"){ echo $active_class = 'active'; } ?>"><a href="<?php echo addURLParameter($url, 'sort_order','asc'); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php _e('Sort Ascending', 'cozy'); ?>" class="fa fa-chevron-up"></i></a></li>
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