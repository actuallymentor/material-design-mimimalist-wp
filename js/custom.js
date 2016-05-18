$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	$ ( '.single img, .home article.bottomlist, .single .comment' )
		// Add popup effect on hoverable elements
		.mouseenter ( function (  ) {
			$ ( this ).addClass  ( 'z-depth-2' )
		} ) 
		.mouseleave ( function (  ) {
			$ ( this ).removeClass  ( 'z-depth-2' ) 
		} ) 
	// End of hoverable commands
	$ ( 'article.smalllist, article.featured' ) 
		// Do depth
		// Add popup effect on hoverable elements
		.mouseenter ( function (  ) {
			console.log ( 'Hover smallist' ) 
			$ ( 'img', this ).addClass  ( 'z-depth-2' )
			$ ( 'a h2, section', this ).addClass  ( 'text-depth-1' )
		} ) 
		.mouseleave ( function (  ) {
			$ ( 'img', this ).removeClass  ( 'z-depth-2' )
			$ ( 'a h2, section', this ).removeClass  ( 'text-depth-1' )
		} ) 
// End jQuery
} )  