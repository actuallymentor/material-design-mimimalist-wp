var $ = jQuery
$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	$ ( 'header.card' )
	.mouseenter ( function (  ) {
		$ ( this ).addClass  ( 'z-depth-2' ) 
	} ) 
	.mouseleave ( function (  ) {
		$ ( this ).removeClass  ( 'z-depth-2' ) 
	} ) 
} )  