<?php global $wt_cozy; ?>
<?php
    $property_types = wp_get_post_terms($post->ID, 'wt-property-types', array("fields" => "names"));
    $property_id = get_post_meta( $post->ID, '_wt_property_id', true);
    $property_price = get_post_meta( $post->ID, '_wt_property_price', true);
    if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
    $property_price_eng = number_format($property_price);
    $property_price_symble = get_post_meta( $post->ID, '_wt_property_price_symble', true);
    $property_address = get_post_meta( $post->ID, '_wt_property_address', true);
?>
<div class="price">
    <i class="fa fa-home"></i>
    <?php $terms = wp_get_post_terms($post->ID, 'property-status', array("fields" => "names"));
        $i=0;
        foreach($terms as $term):
            if (count($terms) - $i < 2):
                echo $term;
            else :
                echo $term.','.' ';
            endif;
            $i++;
         endforeach;
     ?>
    <?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
</div>