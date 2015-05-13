// Sort By
jQuery(function () {
    jQuery("#sort_by").change(function () {
        location.href = jQuery(this).val();
    })
});
// Sort By Agency
jQuery(function () {
jQuery("#agency_sort_by").change(function () {
    //location.href = jQuery(this).val();
})
});
// Sorting
jQuery(document).ready(function(){

jQuery('#sort_by_agency').change(function () {
    var selectCityOrstate = jQuery(this).val();
    location.href = jQuery(this).val();
});

jQuery('#agency_sort_by').change(function () {
var selectedVal = jQuery(this).val();
    
jQuery.ajax({
    data: {action: 'get_agency_states', selectVal: selectedVal},
    type: 'post',
    dataType: 'json',
    url: ajax_object.ajaxurl,
    success: function (data) {        
    	//alert(data);        	
    	jQuery("#sort_by_agency").attr("data-placeholder", 'Choose '+selectedVal);
        jQuery('#sort_by_agency a.chzn-single span').html('Choose '+selectedVal);

    	var coo = data.length + 1;
        var value_dum = '';
        jQuery('#sort_by_agency').html('');

        jQuery('#sort_by_agency').append('<option value="' + value_dum + '"> </option>');

    	for (var i = 0; i < data.length; i++) {                
            jQuery('#sort_by_agency').append('<option value="?sorted_by='+selectedVal+'&sort_by_agency=' + data[i] + '">' + data[i] + '</option>');
            jQuery('#sort_by_agency ul.chzn-results').append('<li id="sort_by_agency_chzn_o_'+coo+'" class="active-result" style="">' + data[i] + '</li>');
            coo++;
        }
        jQuery('#sort_by_agency a.chzn-single').append('<abbr class="search-choice-close">::before</abbr>');

        jQuery("#sort_by_agency").trigger("liszt:updated");
    }

	});
});
});