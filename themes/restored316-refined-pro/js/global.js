(function( $ ){

	// Sticky Announcement Bar.
	var headerHeight       = $( '.site-header' ).innerHeight();
	var beforeheaderHeight = $( '.before-header' ).outerHeight();
	var abovenavHeight     = headerHeight + beforeheaderHeight - 1;

	$( window ).scroll( function() {

		if ( $( document ).scrollTop() > abovenavHeight ) {

			$( '.announcement-widget' ).addClass( 'fixed' );

		} else {

			$( '.announcement-widget' ).removeClass( 'fixed' );

		}

	});

// Vertical Align Shop Logos
	$('.shop-logo').css({
        'position' : 'absolute',
        'left' : '50%',
        'top' : '50%',
        'margin-left' : -$('.shop-logo').width()/2,
        'margin-top' : -$('.shop-logo').height()/2
    });

})( jQuery );


