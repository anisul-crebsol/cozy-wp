<?php
$sorted_by = '';
$sort_by_agent = '';
if(isset($_GET['sorted_by'])){ $sorted_by = esc_attr($_GET['sorted_by']); }
if(isset($_GET['sort_by_agent'])){ $sort_by_agent = esc_attr($_GET['sort_by_agent']); }
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="listing-header" class="clearfix">
    <div class="form-control-small">
        <select id="agent_sort_by" name="agent_sort_by" data-placeholder="<?php _e('Sort', 'cozy'); ?>">
            <option value="">Select one</option>
            <option value="city"><?php _e('Sort by City', 'cozy'); ?></option>
            <option value="state"><?php _e('Sort by State', 'cozy'); ?></option>
        </select>
    </div>

    <div class="form-control-small">
        <select id="sort_by_agent" name="sort_by_agent" data-placeholder="<?php _e('Choose', 'cozy'); ?>">
            <option value="">Select one</option>
            <?php foreach(get_agent_city_state() as $state_city){ ?>
            <option value="<?php if (addURLParameter($url, 'sorted_by','city')) : echo addURLParameter($url, 'sorted_by','city'); else: echo addURLParameter($url, 'sorted_by','state'); endif;  ?>&amp;<?php echo addURLParameter($url, 'sorted_by', $sort_by_agent); echo $state_city; ?>">Select one</option>
        <?php }  wp_reset_query(); ?>
        </select>
    </div>

    <div class="view-mode">
        <span><?php _e('View Mode', 'cozy'); ?>:</span>
        <ul>
            <li data-view="agents-grid" data-target="agents-results" class="active"><i class="fa fa-th"></i></li>
            <li data-view="agents-list" data-target="agents-results"><i class="fa fa-th-list"></i></li>
        </ul>
    </div>
</div>