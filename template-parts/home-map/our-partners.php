<?php global $wt_cozy; ?>
<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_partners_title']?></h2>

<div id="partners">
    <?php
        $page_id = ($wt_cozy['opt_select_partners']);
        $entries = get_post_meta( $page_id, '_wt_partners_repeat_group', true );

        foreach ( (array) $entries as $key => $entry ) {
            $mouseOverImg = $entry['partner_image_hover'];
            $partners_image = $entry['partner_image'];
            if($partners_image) : $partners_image = $partners_image; else : $partners_image = 'http://placehold.it/194x45'; endif;
         ?>
        <div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
        <a href="<?php echo $entry['partner_link']; ?>"><img src="<?php echo $partners_image; ?>" alt='' <?php if($mouseOverImg): echo $mouseOverImage = "onmouseover=\"this.src='$mouseOverImg';\"  onmouseout=\"this.src='$partners_image';\""; endif; ?> ></img></a>
        </div>
    <?php }	?>
</div>