<div id="advanced-search" class="gray open">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="get" action="<?php echo home_url('/'); ?>">
                    <div class="form-group">
                        <div class="form-control-large">
                            <input type="text" class="form-control" name="s" placeholder="City, State, Country, etc...">
                        </div>

                        <div class="form-control-large">
                            <select id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
                                <option value="">Select one</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="land">Land</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_status" name="search_status" data-placeholder="Status">
                                <option value="">Select one</option>
                                <option value="sale">For Sale</option>
                                <option value="rent">For Rent</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
                                <option value="">Select one</option>
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
                                <option value="">Select one</option>
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
                                <option value="">Select one</option>
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
                                <option value="">Select one</option>
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

                        <button type="submit" class="btn btn-fullcolor"><?php _e( 'Search', 'cozy' );?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>