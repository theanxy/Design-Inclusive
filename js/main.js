$(document).ready(function() { 
	// update rendered pattern when user edits the textareas
	$('#markup textarea').live('keyup', function(e) {
		$('#pattern-wrap').html($(this).val());
		$('iframe').contents().find('body').html($(this).val());
	});
	$('#style textarea').live('keyup', function(e) {
		$('div.main style').html($(this).val());
		$('iframe').contents().find('style').html($(this).val());
	});
	
	// auto-select code in textarea when clipboard icon is clicked
	$('#markup a.clip').click(function(){
		$('#markup textarea').select();
		return false;
	});
	$('#style a.clip').click(function(){
		$('#style textarea').select();
		return false;
	});
	
	// expand/collapse side nav
	$('#nav-toggle').click(function() {
		$('body').toggleClass('expanded');
		return false;
	});
	
	// slider
	var iframeWidth = $('iframe').css('width');
	iframeWidth = parseInt(iframeWidth);
	$("#slider").slider({ min: 0, max: iframeWidth, value: iframeWidth });
	
	$("#slider").bind( "slide", function(event, ui) {
		// console.log(ui.value);
		$('iframe').css('max-width', ui.value);
	});
	
	// calculating preview width
	$('#width').html('500px');
	$('iframe').resize(function() {
		$('#width').html($('iframe').css('width'));
	});
	
});