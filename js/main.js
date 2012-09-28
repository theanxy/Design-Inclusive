$(document).ready(function() { 
	// home page navigation
	$('.intro option:first-child').attr('selected','selected');
	$('.intro form').submit(function() {
		window.location = $(this).find('option[selected="selected"]').val();
		return false;
	});
	
	// navigation
	$('header[role="banner"] select option').add('.intro option').each(function() {
		if($(this).val() == window.location) {
			$(this).attr('selected','selected');
		};
	}).parents('select').change(function() {
		window.location = $(this).val();
	});
		
	// update rendered pattern when user edits the textareas
	$('#markup textarea').live('keyup', function(e) {
		$('#pattern-wrap').html($(this).val());
		$('iframe').contents().find('.wrap').html($(this).val());
	});
	$('#style textarea').live('keyup', function(e) {
		$('div.main style').html($(this).val());
		$('iframe').contents().find('#preview').html($(this).val());
	});
	
	// slider
	var docW = $(document).width();
	docW = parseInt(docW);
	$("#slider").slider({ min: 260, max: docW, value: docW });
	
	$("#slider").bind( "slide", function(event, ui) {
		// console.log(ui.value);
		$('#iframe').css('max-width', ui.value);
	});
	
});