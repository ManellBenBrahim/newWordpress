/* global wp, jQuery */
/**
 * File filterizer.js.
 *
 * Theme filterizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme filterizer preview reload changes asynchronously.
 */

( function( $ ) {
    $(".myselect").select2();

	// Site title and description.
	/*wp.filterize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.filterize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.filterize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );

    */
}( jQuery ) );
