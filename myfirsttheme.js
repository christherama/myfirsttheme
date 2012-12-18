// Execute jQuery functions only *after* jQuery JS has loaded
$(function(){
	// Auto-hide alert messages after 3s
	$('.alert').delay(3000).fadeOut(3000);
	
	// Capture click event of main div
//	$('#main .row .span9').click(function(){
//		$(this).addClass('highlight');
//	});
	
	// Capture hover over sidebar
//	$('#main .row .span4').hover(
//		function(){
//			$(this).addClass('highlight');
//		},
//		function(){
//			$(this).removeClass('highlight');
//		}
//	);
	
	// Capture double-click of post paragraphs
//	$('.post p').dblclick(function(){
//		$(this).addClass('deleting');
//		$(this).slideUp(1000);
//	});
	
	// Listen for keyup events
	$(document).keyup(function(e){
		switch(e.which) {
		case 39: // right arrow
			window.location = 'http://www.google.com';
			break;
		case 20: // caps lock
			$('input[name=s]').val('');
			break;
		case 27: // escape key
			$('#main').slideUp();
			break;
		case 76: // L key
			// Get the URL for wp-admin
			var url = $('footer a.login').attr('href');
			window.location = url;
			break;
		}
	});
	
	// Listen for keydown events
	$(document).keydown(function(e){
		switch(e.which) {
		case 20:
			$('input[name=s]').val('CAPS LOCK');
			break;
		}
	});
});