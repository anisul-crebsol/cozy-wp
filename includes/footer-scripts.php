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
?>