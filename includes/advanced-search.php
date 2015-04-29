<div id="advanced-search" class="gray open">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="form-group">
                        <div class="form-control-large">
                            <input type="hidden" value="" id="s" name="s">  
                            <input type="text" class="form-control" value="<?php echo $_GET['location']; ?>" name="location" placeholder="City, State, Country, etc...">
                        </div>
                        <?php
                        $property_type_term = get_terms_by_post_type(array('wt-property-types'), array('property'));
                        ?>
                        <div class="form-control-large">
                            <select id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
                                <option value=""> </option>
                                <?php
                                foreach ($property_type_term as $data) {
                                    ?>
                                    <option value="<?php echo $data->slug; ?>"><?php echo $data->name; ?></option>
                                <?php }
                                ?>

                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_status" name="search_status" data-placeholder="Status">
                                <option value=""> </option>
                                <option value="for-sale"><?php _e( 'For Sale', 'cozy' );?>a</option>
                                <option value="for-rent"><?php _e( 'For Rent', 'cozy' );?></option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
                                <option value=""> </option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="5plus">5+</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_bathrooms" name="search_bathrooms" data-placeholder="Bathrooms">
                                <option value=""> </option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4plus">4+</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_minprice" name="search_minprice" data-placeholder="Min. Price">
                                <option value=""> </option>
                                <option value="0">$0</option>
                                <option value="25000">$25000</option>
                                <option value="50000">$50000</option>
                                <option value="75000">$75000</option>
                                <option value="100000">$100000</option>
                                <option value="150000">$150000</option>
                                <option value="200000">$200000</option>
                                <option value="300000">$300000</option>
                                <option value="500000">$500000</option>
                                <option value="750000">$750000</option>
                                <option value="1000000">$1000000</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_maxprice" name="search_maxprice" data-placeholder="Max. Price">
                                <option value=""> </option>
                                <option value="25000">$25000</option>
                                <option value="50000">$50000</option>
                                <option value="75000">$75000</option>
                                <option value="100000">$100000</option>
                                <option value="150000">$150000</option>
                                <option value="200000">$200000</option>
                                <option value="300000">$300000</option>
                                <option value="500000">$500000</option>
                                <option value="750000">$750000</option>
                                <option value="1000000">$1000000</option>
                                <option value="1000000plus">>$1000000</option>
                            </select>
                        </div>
                        <input type="hidden" value="advancedSearch" id="advancedSearch" name="advancedSearch">  

                        <button type="submit" class="btn btn-fullcolor"><?php _e( 'Search', 'cozy' );?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>