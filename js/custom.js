$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	$ ( 'img' )
		// Add popup effect on images
		.mouseenter ( function (  ) {
			$ ( this ).addClass  ( 'z-depth-2' ) 
		} ) 
		.mouseleave ( function (  ) {
			$ ( this ).removeClass  ( 'z-depth-2' ) 
		} ) 
	$ ( 'article.bottomlist' )
		// Add popup effect on images
		.mouseenter ( function (  ) {
			$ ( this ).addClass  ( 'z-depth-2' ) 
		} ) 
		.mouseleave ( function (  ) {
			$ ( this ).removeClass  ( 'z-depth-2' ) 
		} ) 
	} )  