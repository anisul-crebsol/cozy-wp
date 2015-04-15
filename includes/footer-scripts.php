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
				Cozy.agencyMap(agencies, "map_agency", 1);
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