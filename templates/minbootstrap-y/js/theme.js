/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */
jQuery(function($) {

    var config = $('html').data('config') || {};

    // Social buttons
    $('article[data-permalink]').socialButtons(config);

});


/* Copyright (C) Stephan W. 3d-hobby-art.de, http://www.gnu.org/licenses/gpl.html GNU/GPL */
jQuery(document).ready(function($) {

/***************************************************
	TopLink
***************************************************/
	$("#top-link").hide();
	
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 600) {
				$('#top-link').fadeIn();
			} else {
				$('#top-link').fadeOut();
			}
		});

		$('#top-link').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});