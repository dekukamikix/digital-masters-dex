jQuery(document).ready(function ($) {
	// body...
	$(".clickable-row").click(function () {
		// body...
		window.location = $(this).data("href");
	});
});