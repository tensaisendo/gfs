/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */
( function( $ ) {
	var body    = $( 'body' ),
		_window = $( window ),
		nav, button, menu;

	nav = $( '#site-navigation' );
	button = nav.find( '.menu-toggle' );
	menu = nav.find( '.menu-menu-principal-container' );
	primaryMenu = $("div.menu-menu-principal-container");

	// Enable menu toggle for small screens.
	( function() {
		if ( ! nav || ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$(button).click(function(){
			if ($(primaryMenu).css('display') == 'none'){
				$(primaryMenu).css("display","inherit");
			}
		});
	} )();
} )( jQuery );
