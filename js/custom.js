$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	$(".button-collapse").sideNav()
	// Initialize mobile nav

	$ ( '#desktopmenu .menu-item-has-children' ).hover (
		function (  ) {
			console.log ( 'Hovered child containing menu' ) 
			$ ( '.sub-menu li', this ).fadeIn ( 100, function (  ) {
				$ ( this ).addClass ( 'z-depth-1' )  
			}  )  
		},
		function (  ) {
			$ ( '.sub-menu li', this ).removeClass ( 'z-depth-1' )  
			$ ( '.sub-menu li', this ).fadeOut ( 200 ) 
		}
	)
	$ ( '#desktopmenu .menu-item-has-children .sub-menu li' ).hover (
		function (  ) {
				$ ( this ).addClass ( 'z-depth-2' )  
		},
		function (  ) {
			$ ( this ).removeClass ( 'z-depth-2' )  
		}
	)
	// End of menu hovering  
// End jQuery
} )  