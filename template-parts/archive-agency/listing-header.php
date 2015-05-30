<?php
$sorted_by = '';
$sort_by_agency = '';
if(isset($_GET['sorted_by'])){ $sorted_by = esc_attr($_GET['sorted_by']); }
if(isset($_GET['sort_by_agency'])){ $sort_by_agency = esc_attr($_GET['sort_by_agency']); }
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
            <option value="<?php if (addURLParameter($url, 'sorted_by','city')) : echo addURLParameter($url, 'sorted_by','city'); else: echo addURLParameter($url, 'sorted_by','state'); endif;  ?>&amp;<?php echo addURLParameter($url, 'sorted_by', $sort_by_agency); echo $state_city; ?>"><?php echo $state_city; ?></option>
        <?php }  wp_reset_query(); ?>
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