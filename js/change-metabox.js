/************** META.JS ****************/

//Show and Hide meta box by Post Format
jQuery(document).ready(function($) {

	function show_boxes(){
		
		if ( $('select#page_template :selected').val() == 'page-grid.php' ) {
			$('#_wt_extra_information').show();
		}
		else {
			$('#_wt_extra_information').hide();
		}
		if ( $('select#page_template :selected').val() == 'page-slider.php' ) {
			$('#_twftn_metabox_templateB').show();
		}
		else {
			$('#_twftn_metabox_templateB').hide();
		}

	};

	//CALL SHOW_BOXES
	show_boxes();

	//CALL SHOW_BOXES AGAIN ON INPUT CLICK
	$('input').click(function(){
		show_boxes();
	});

	$('select#page_template').change(function(){
		show_boxes();
	});
	
});