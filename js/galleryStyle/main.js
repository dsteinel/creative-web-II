(function() {
	[].slice.call( document.querySelectorAll( '.stack' ) ).forEach( function( el ) {
		
		var stackImage = el,
			togglefn = function() {
				if( classie.hasClass( el, 'active' ) ) {
					classie.removeClass( el, 'active' );
				}
				else {
					classie.addClass( el, 'active' );
				}
			};

		stackImage.addEventListener( 'mouseover', togglefn );
		stackImage.addEventListener( 'mouseout', togglefn );
		
	} );
})();