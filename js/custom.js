// Function declarations

// Fading in the dropdown menu
var menufadein = function (  ) {
	console.log ( 'Hovered child containing menu' ) 
	$ ( '.sub-menu li', this ).fadeIn ( 100, function (  ) {
		$ ( this ).addClass ( 'z-depth-1' )  
	}  )  
}

// Fading out the dropdown menu
var menufadeout = function (  ) {
	$ ( '.sub-menu li', this ).removeClass ( 'z-depth-1' )  
	$ ( '.sub-menu li', this ).fadeOut ( 200 ) 
}

// Depth controllers

var depthadd = function ( ) {
		$ ( this ).addClass ( 'z-depth-2' )
}
var depthrem = function (  ) {
	$ ( this ).removeClass ( 'z-depth-2' )
}

// jQuery actions after DOM loading is complete
$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	// Initialize mobile nav
	$("#button-collapse").sideNav()
	
	// Trigger fading on submenu items
	$ ( '.menu-item-has-children', '#desktopmenu' ).hover ( menufadein, menufadeout)
	$ ( '.menu-item-has-children .sub-menu li', '#desktopmenu' ).hover ( depthadd, depthrem  )

	// Theme box hovering
	$ ( '.box', '#content' ).hover ( depthadd, depthrem  )

	// Make buttons pretty
	$ ( 'input[type=submit]', '#content' ).addClass ( 'btn' )  

	// End of menu hovering  
} )  