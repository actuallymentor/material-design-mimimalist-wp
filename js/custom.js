$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	$(".button-collapse").sideNav()
	// Initialize mobile nav

	$ ( '#desktopmenu .menu-item-has-children' ).hover (
		function (  ) {
			console.log ( 'Hovered child containing menu' ) 
			$ ( '.sub-menu li', this ).fadeIn ( 200, function (  ) {
				$ ( this ).addClass ( 'z-depth-1' )  
			}  )  
		},
		function (  ) {
			$ ( '.sub-menu li', this ).addClass ( 'z-depth-1' )  
			$ ( '.sub-menu li', this ).fadeOut ( 200 ) 
		}
	)
	// End of menu hovering  
// End jQuery
} )  