/* Copyright (C) Stephan W. 3d-hobby-art.de, http://www.gnu.org/licenses/gpl.html GNU/GPL */
jQuery(document).ready(function($) {
/***************************************************
	animate.css logic
***************************************************/ 
	$("[data-animation]").each(function() {
		var $this = $(this);
		$this.addClass("animation");
		if ($(window).width() > 767) {
			$this.appear(function() {
				var delay = ($this.attr("data-animation-delay") ? $this.attr("data-animation-delay") : 1);
				if (delay > 1) $this.css("animation-delay", delay + "ms");
				$this.addClass($this.attr("data-animation"));
				setTimeout(function() {
					$this.addClass("animation-visible");
				}, delay);
			});
		} else {
			$this.addClass("animation-visible");
		}
	});

});