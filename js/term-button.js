jQuery("#for-sale").click(function () {

    var BUT_VAL = jQuery(this).val();
    jQuery("#term_slug").val(BUT_VAL);
    //alert(jQuery("#term_slug").val());
    console.log( jQuery("#term_slug").val() );

});

jQuery("#for-rent").click(function () {

    var BUT_VAL = jQuery(this).val();
    jQuery("#term_slug").val(BUT_VAL);
    // alert(jQuery("#term_slug").val());
    console.log(jQuery("#term_slug").val());
});

jQuery('#agents_country').change(function () {
    var selectVal = jQuery('#agents_country :selected').val();
    //alert(selectVal);
    jQuery.ajax({
        data: {action: 'get_states', country: selectVal},
        type: 'post',
        dataType: 'json',
        url: ajax_object.ajaxurl,
        success: function (data) {

            var coo = data.length + 1;
            var value_dum = '';
            jQuery('#agents_state').html('');
            //  jQuery('#agents_state_chzn ul.chzn-results').html('');
            jQuery('#agents_state').append('<option value="' + value_dum + '"> </option>');

            for (var i = 0; i < data.length; i++) {
                //var dataValue = data;
                jQuery('#agents_state').append('<option value="' + data[i] + '">' + data[i] + '</option>');
                jQuery('#agents_state_chzn ul.chzn-results').append('<li id="agents_state_chzn_o_' + coo + '" class="active-result" style="">' + data[i] + '</li>');
                coo++;
            }

            jQuery('#agents_state_chzn a.chzn-single').append('<abbr class="search-choice-close">::before</abbr>');

            jQuery("#agents_state").trigger("liszt:updated");

            //console.log(data); //should print out the name since you sent it along

        }
    });
});

jQuery('#agents_state').change(function () {
    var selectVal = jQuery('#agents_state :selected').val();
    // alert(selectVal);
    jQuery.ajax({
        data: {action: 'get_cities', state: selectVal},
        type: 'post',
        dataType: 'json',
        url: ajax_object.ajaxurl,
        success: function (data) {
            var coo = data.length + 1;
            var value_dum = '';
            jQuery('#agents_city').html('');

            jQuery('#agents_city').append('<option value="' + value_dum + '"> </option>');

            for (var i = 0; i < data.length; i++) {
                jQuery('#agents_city').append('<option value="' + data[i] + '">' + data[i] + '</option>');
                jQuery('#agents_city_chzn ul.chzn-results').append('<li id="agents_city_chzn_o_' + coo + '" class="active-result" style="">' + data[i] + '</li>');
                coo++;
            }
            jQuery('#agents_city_chzn a.chzn-single').append('<abbr class="search-choice-close">::before</abbr>');
            jQuery("#agents_city").trigger("liszt:updated");
            console.log(data); //should print out the name since you sent it along
        }
    });
});