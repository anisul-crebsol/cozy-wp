<?php
$sort_by = '';
$sort_order = '';
if(isset($_GET['sort_by'])){ $sort_by = esc_attr($_GET['sort_by']); }
if(isset($_GET['sort_order'])){ $sort_order = esc_attr($_GET['sort_order']); }
$count = 0;
$delay = 250;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$property_args = array(
    'post_type' => 'property',
    'paged' => $paged,
);

$property_args2 = array(
    'post_type' => 'property',
    'paged' => $paged,
    'meta_key' => '_wt_property_area',
    'order' => strtoupper($sort_order),
    'orderby' => 'meta_value_num'
);

$property_args3 = array(
    'post_type' => 'property',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => strtoupper($sort_order)
);
$property_args4 = array(
    'post_type' => 'property',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => strtoupper($sort_order)
);
$property_args5 = array(
    'post_type' => 'property',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC'
);
$property_args6 = array(
    'post_type' => 'property',
    'paged' => $paged,
    'orderby' => 'meta_value_num',
    'meta_key' => '_wt_property_area',
    'order' => 'DESC'
);

$order = $property_args;

if($sort_order == "asc") { $order = $property_args4; }
if($sort_order == "desc") { $order = $property_args4; }
if($sort_by == "date") { $order = $property_args5; }
if($sort_by == "area") { $order = $property_args6; }

if($sort_order == 'asc' && $sort_by == "area") { $order = $property_args2; }
if($sort_order == 'desc' && $sort_by == "area") { $order = $property_args2; }
if($sort_order == 'asc' && $sort_by == "date") { $order = $property_args3; }
if($sort_order == 'desc' && $sort_by == "date") { $order = $property_args3; }

query_posts($order);
if (have_posts()) : while (have_posts()) : the_post();

$count++;
$property_status = get_the_terms(get_the_ID(), 'property-status', true);
$property_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_property_description', true )));
$property_price = get_post_meta( get_the_ID(), '_wt_property_price', true);
if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
$property_price_eng = number_format($property_price);
$property_price_symble = get_post_meta( get_the_ID(), '_wt_property_price_symble', true);
$property_address = get_post_meta( get_the_ID(), '_wt_property_address', true);
$property_area = get_post_meta( get_the_ID(), '_wt_property_area', true );
$property_area_measurement = get_post_meta( get_the_ID(), '_wt_property_area_measurement', true );
$property_bedrooms = get_post_meta( get_the_ID(), '_wt_property_bedrooms', true );
$property_bathrooms = get_post_meta( get_the_ID(), '_wt_property_bathrooms', true );

if ( 1 == $count%3 ) {
        echo '<div class="clearfix"></div>';
    }
?>
<div class="item col-md-4"><!-- Set width to 4 columns for grid view mode only -->
    <div class="image">
        <a href="<?php the_permalink(); ?>">
            <span class="btn btn-default"><i class="fa fa-file-o"></i> <?php _e('Details', 'cozy'); ?></span>
        </a>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('properties-list', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/760x670" alt="placeholder" />';
        }
        ?>
    </div>
    <div class="price">
        <i class="fa fa-home"></i>
        <?php
        if ( $property_status && ! is_wp_error( $property_status ) ) :
        $draught_links = array();
        foreach ( $property_status as $status ) {
            $draught_links[] = $status->name;
        }
        echo $on_draught = join( ", ", $draught_links );
        endif;
        ?>
        <?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
    </div>
    <div class="info">
        <h3>
            <a href="<?php the_permalink(); ?>">
            <?php
                $property_title = get_the_title();
                $title_limit = 50;
                $dots = " ...";
                if(strlen($property_title) <= $title_limit) {
                    echo $property_title ;
                } else {
                    echo substr($property_title, 0, $title_limit) . $dots ;
                }
            ?>
            </a>
            <?php if($property_address) echo "<small>$property_address</small>"; ?>
        </h3>
        <p>
        <?php
            $description_limit = 190;
            if(strlen($property_description) <= $description_limit) {
                echo $property_description;
            } else {
                echo substr($property_description, 0, $description_limit);
            }
        ?>
        </p>
        <ul class="amenities">
            <?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
            <?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
            <?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
        </ul>
    </div>
</div>
<?php endwhile;
  if ( function_exists('wt_cozy_pagination') )
    wt_cozy_pagination();
?>
<?php wp_reset_query(); endif; ?>