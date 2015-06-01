<?php
/**
 * The template used for displaying page content in search.php
 *
 * @package Cozy
 */
?>

<?php 
$property_status = get_the_terms(get_the_ID(), 'property-status', true);
$property_description = get_post_meta( get_the_ID(), '_wt_property_description', true );
$property_price = get_post_meta( get_the_ID(), '_wt_property_price', true);
if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
$property_price_eng = number_format($property_price);
$property_price_symble = get_post_meta( get_the_ID(), '_wt_property_price_symble', true);
$property_address = get_post_meta( get_the_ID(), '_wt_property_address', true);
$property_area = get_post_meta( get_the_ID(), '_wt_property_area', true );
$property_area_measurement = get_post_meta( $post->ID, '_wt_property_area_measurement', true );
$property_bedrooms = get_post_meta( get_the_ID(), '_wt_property_bedrooms', true );
$property_bathrooms = get_post_meta( get_the_ID(), '_wt_property_bathrooms', true );
?>
<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
    <div class="image">
        <a href="<?php the_permalink(); ?>">
            <h3>
                <?php the_title(); ?>
            </h3>
            <?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
        </a>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('property-slider', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/270x238" alt="placeholder" />';
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
    <ul class="amenities">
        <?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
        <?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
        <?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
    </ul>
</div>