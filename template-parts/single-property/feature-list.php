<h1 class="section-title">Property Features</h1>
<ul class="property-features">
    <?php
        $entries = get_post_meta( get_the_ID(), '_wt_repeat_group', true );
        foreach ( (array) $entries as $key => $entry ) {
            echo "<li ><i class='".$entry['feature_icon']."'></i>".$entry['feature_text']."</li>";
        }
    ?>
</ul>