<?php if ( is_page_template('page-map.php')) { ?>
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
 	elseif ( is_page_template('page-grid.php')) { ?>
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
	elseif ( is_page_template('page-search.php') || is_page_template('page-slider.php')) { ?>
	<script type="text/javascript">
		(function($){
			"use strict";
			
			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
<?php
    }
	elseif ( is_page_template('archive-agency.php')) { ?>
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