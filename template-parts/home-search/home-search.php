<?php global $wt_cozy; ?>
<section id="home-search-section" style="background-image:url(<?php echo $wt_cozy['section_search_bg']['url']?>);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" data-animation-direction="from-top" data-animation-delay="50">

                <h2 class="slider-title"><?php echo $wt_cozy['section_search_heading']?></h2>
                <div class="slider-subtitle"><?php echo $wt_cozy['section_search_heading2']?></div>
            </div>

            <form role="search" method="get" class="search-form" id="search-form-home" action="<?php echo home_url( '/' ); ?>">
                <div id="home-search-buttons" class="col-sm-6 col-sm-offset-3" data-animation-direction="from-bottom" data-animation-delay="250" >
                    <input type="button" class="btn btn-default active" id="for-sale" name="for-sale" value="<?php _e( 'for sale', 'cozy' );?>" />
                    <input type="button" class="btn btn-default" id="for-rent" name="for-rent" value="<?php _e( 'for rent', 'cozy' );?>" />

                    <div class="input-group">
                        <input type="hidden" value="" id="s" name="s">
                        <input type="search" class="form-control" placeholder="<?php _e( 'City, State, Country, etc...', 'cozy' );?>" value="" id="property_search" name="location" title="Search for:" />
                        <input type="hidden" name="post_type" id="post_type" value="property" />
                        <input type="hidden" name="term_slug" id="term_slug" value="for-sale" />
                        <span class="input-group-btn">
                            <input type="hidden" name="submit_property" value="Search">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i><?php _e( 'Search', 'cozy' );?></button>
                        </span>
                    </div>

                    <a href="<?php echo home_url( '/?s=&amp;post_type=property' ); ?>" class="advanced-search"><?php _e( 'Advanced Search', 'cozy' );?></a>
                </div>
            </form>
        </div>
    </div>
</section>