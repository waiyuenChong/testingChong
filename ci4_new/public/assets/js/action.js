$(document).ready(function() {
	$('.lang_switcher').on('change', function() {
		var lang = $(this).val();
		window.location = ajaxBaseUrl + "/" + lang + router;
	});
});