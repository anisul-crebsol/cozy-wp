<div id="property-listing" class="grid-style1 clearfix">
    <div class="row">
<?php
$delay = 250;
$display_posts = 6;
$count = 0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$property_args = array(
    'post_type' => 'property',
    'paged' => $paged,
    'tax_query'	=> array(
        array(
            'taxonomy'	=> 'property-status',
            'field'		=> 'slug',
            'terms'		=> array( 'featured' ),
            'operator'	=> 'NOT IN',
        ),
    ),
    'showposts' => $display_posts
);
query_posts($property_args);
if (have_posts()) : while (have_posts()) : the_post();

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

if ( 0 == $count%3 ) { echo '<div class="clearfix"></div>'; }

?>

<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
    <div class="image">
        <a href="<?php the_permalink(); ?>">
            <h3>
            <?php the_title(); ?>
            </h3>
            <?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
        </a>
        <?php echo wt_cozy_thumbnail('760x670'); ?>
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
    <ul class="amenities">
        <?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
        <?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
        <?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
    </ul>
</div>
<?php $count++; endwhile; endif; ?>
    </div>
</div>

