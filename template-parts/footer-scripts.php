<?php if ( is_page_template('page-home-map.php')) { 
// Properties
require get_template_directory() . '/inc/properties.php';
    ?>
    <script type="text/javascript">
        (function($){
            "use strict";
            $(document).ready(function(){
            //Create porperties map
            Cozy.propertiesMap(properties, 'properties_map');
            });
        })(jQuery);
    </script>
<?php
    }
    elseif ( is_page_template('page-home-grid.php')) {
        require get_template_directory() . '/inc/agencies.php';
        ?>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create agency map centered on the marker of the agency with id=1.
                Cozy.agencyMap(agencies, "map_agency");
                });
            })(jQuery);
        </script>
<?php
    }
    elseif ( is_page_template('page-home-search.php') || is_page_template('page-home-slider.php')) {
    require get_template_directory() . '/inc/agencies.php';
        ?>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create agencies map with markers and populate dropdown agencies list.
                Cozy.agencyMap(agencies, "map_agency");
                });
            })(jQuery);
        </script>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create agencies maps
                    Cozy.agencyMap(agencies, 'agency_map1', 0);
                    Cozy.agencyMap(agencies, 'agency_map2', 1);
                    Cozy.agencyMap(agencies, 'agency_map3', 2);
                    Cozy.agencyMap(agencies, 'agency_map4', 3);
                    Cozy.agencyMap(agencies, 'agency_map5', 4);
                    Cozy.agencyMap(agencies, 'agency_map6', 5);
                });
            })(jQuery);
        </script>
<?php
    }
    elseif ( is_page_template('archive-agency.php') || is_archive('agency')) {
    require get_template_directory() . '/inc/agencies.php';
        ?>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create agencies maps
                    Cozy.agencyMap(agencies, 'agency_map1', 0);
                    Cozy.agencyMap(agencies, 'agency_map2', 1);
                    Cozy.agencyMap(agencies, 'agency_map3', 2);
                    Cozy.agencyMap(agencies, 'agency_map4', 3);
                    Cozy.agencyMap(agencies, 'agency_map5', 4);
                    Cozy.agencyMap(agencies, 'agency_map6', 5);
                });
            })(jQuery);
        </script>
<?php
    }
    elseif ( is_page_template('page-contacts.php')) { ?>
        <script type="text/javascript">
            var singleMarker = [
                {
                    "id": 0,
                    "title": "Cozy Real State",
                    "latitude": 40.727815,
                    "longitude": -73.993544,
                    "image": "http://placehold.it/700x603",
                    "description": "Lafayette St New York, NY <br> Phone: 00351 123 456 789",
                    "map_marker_icon": "images/markers/coral-marker-cozy.png"
                }
            ];

            (function ($) {
                "use strict";

                $(document).ready(function () {
                //Create contacts map. Usage: Cozy.contactsMap(marker_JSON_Object, map canvas, map zoom);

                    Cozy.contactsMap(singleMarker, 'contacts_map', 14);
                });
            })(jQuery);
	</script>
<?php
    }
    elseif (is_singular (array( 'property' ))) {
        require get_template_directory() . '/inc/property.php';
?>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create property map centered on the marker of the property with id=0.
                    Cozy.propertiesMap(property, 'property_location', 0);
                });
            })(jQuery);
        </script>
<?php
    }
    elseif (is_singular (array( 'agency' ))) {
        require get_template_directory() . '/inc/agency.php';
?>
        <script type="text/javascript">
            (function($){
                "use strict";

                $(document).ready(function(){
                //Create agency map centered on the marker of the agency with id=0.

                    Cozy.agencyMap(agency, 'agency_map', 0);
                });
            })(jQuery);
        </script>
<?php
    }
?>

<script type="text/javascript">
var templeteUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
var homeUrl = '<?php echo home_url(); ?>';
var adminUrl = '<?php echo admin_url(); ?>';
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){

    jQuery.ajaxSetup({cache:false});
    jQuery(".sort .sortBy").click(function(){
        var thisEl = jQuery(this);
        var sortById = thisEl.attr("data-sort");

        jQuery.ajax({
                type: "post",                
                url: ajax_object.ajaxurl,
                data: {
                    action: "sortByAscNDesc",
                    sortById: sortById                    
                },
                success: function (response) {
                    jQuery("#ajax-content").html("loading...");
                    jQuery("#ajax-content").html(response);

                    jQuery('.sortBy').removeClass("active");
                    thisEl.addClass('active');
                }
            })

        //jQuery("#ajax-content").html("loading...");
        //jQuery("#ajax-content").load("<?php '/ajaxpageloader' ?>/",{sortById:sortById});
        return false;
    });

        jQuery( "#sort_by" ).change(function() {
        var sortBy = jQuery(this).val();
            jQuery.ajax({
                type: "post",                
                url: ajax_object.ajaxurl,
                data: {
                    action: "sortByAscNDesc",
                    sortBy: sortBy                    
                },
                success: function (response) {
                    jQuery("#ajax-content").html("loading...");
                    jQuery("#ajax-content").html(response);
                }
            });        
        return false;
        });
});
</script>

<script type="text/javascript">
    var singleMarker = [
        {
            "id": 0,
            "title": "Cozy Real State",
            "latitude": 40.727815,
            "longitude": -73.993544,
            "image": "http://placehold.it/700x603",
            "description": "Lafayette St New York, NY <br> Phone: 00351 123 456 789",
            "map_marker_icon": "images/markers/coral-marker-cozy.png"
        }
    ];

    (function ($) {
        "use strict";

        $(document).ready(function () {
            //Create contacts map. Usage: Cozy.contactsMap(marker_JSON_Object, map canvas, map zoom);
            Cozy.contactsMap(singleMarker, 'contacts_map', 14);
        });
    })(jQuery);
</script>