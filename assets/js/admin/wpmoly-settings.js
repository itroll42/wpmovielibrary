
wpmoly = wpmoly || {};

wpmoly.settings = wpmoly_settings = {}

	wpmoly.settings.init = function() {

		$( '#wpmoly-sort-meta_used h3, #wpmoly-sort-details_used h3' ).text( wpmoly_ajax.lang.used );
		$( '#wpmoly-sort-meta_available h3, #wpmoly-sort-details_available h3' ).text( wpmoly_ajax.lang.available );

	};

	wpmoly.settings.init();