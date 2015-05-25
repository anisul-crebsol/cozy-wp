<?php
global $wt_cozy;
require get_template_directory() . '/inc/variables.php';
require get_template_directory() . '/inc/agencies.php';
require get_template_directory() . '/inc/agency.php';
require get_template_directory() . '/inc/property.php';
require get_template_directory() . '/inc/properties.php';
?>
<script type="text/javascript">
var templeteUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
var homeUrl = '<?php echo home_url(); ?>';
var adminUrl = '<?php echo admin_url(); ?>';
</script>


<script type="text/javascript">
    var singleMarker = [
        {
            "id": 0,
            "title": "Cozy Real State",
            "latitude": <?php global $wt_cozy; echo $wt_cozy['contact_map_lat']?>,
            "longitude": <?php global $wt_cozy; echo $wt_cozy['contact_map_long']?>,
            "image": "http://placehold.it/700x603",
            "description": "<?php global $wt_cozy; echo $wt_cozy['section_contact_address']?> <br> <?php global $wt_cozy; echo $wt_cozy['section_contact_phone']?>",
            "map_marker_icon": templeteUrl+"images/markers/coral-marker-cozy.png"
        }
    ];
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
    (function($){
        "use strict";

        $(document).ready(function(){

            //Create agencies map with markers and populate dropdown agencies list.
            if (document.getElementById("agency_map1")) {
                Cozy.agencyMap(agencies, 'agency_map1', 0);
                Cozy.agencyMap(agencies, 'agency_map2', 1);
                Cozy.agencyMap(agencies, 'agency_map3', 2);
                Cozy.agencyMap(agencies, 'agency_map4', 3);
                Cozy.agencyMap(agencies, 'agency_map5', 4);
                Cozy.agencyMap(agencies, 'agency_map6', 5);
            }
            if (document.getElementById("properties_map")) {
                Cozy.propertiesMap(properties, 'properties_map');
            }
            if (document.getElementById("map_agency")) {
                Cozy.agencyMap(agency, "map_agency");
            }
            if (document.getElementById("agency_map")) {
                Cozy.agencyMap(agency, 'agency_map', 0);
            }
            if (document.getElementById("property_location")) {
                Cozy.propertiesMap(property, 'property_location', 0);
            }
            if (document.getElementById("contacts_map")) {
                Cozy.contactsMap(singleMarker, 'contacts_map', 14);
            }
        });

    })(jQuery);
</script>