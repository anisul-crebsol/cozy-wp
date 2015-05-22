<?php
$sort_order = '';
if(isset($_GET['sort_order'])){ $sort_order = esc_attr($_GET['sort_order']); }
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="listing-header" class="clearfix">
    <div class="view-mode">
        <span><?php _e('View Mode',''); ?>:</span>
        <ul>
            <li data-view="grid-style1" data-target="blog-listing" class="active"><i class="fa fa-th"></i></li>
            <li data-view="list-style" data-target="blog-listing"><i class="fa fa-th-list"></i></li>
        </ul>
    </div>
</div>