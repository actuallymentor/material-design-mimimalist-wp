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

var lazyblock = function ( context )  {
	var imagelist = $ ( 'img', context)
	for  ( var i = 0; i < imagelist.length; i++ ) {
		$ ( imagelist[i] ).attr ( 'lazy', $ ( imagelist[i] ).attr ( 'src' )   )
		$ ( imagelist[i] ).attr ( 'lazyset', $ ( imagelist[i] ).attr ( 'srcset' )   )
		$ ( imagelist[i] ).attr ( 'src', '' ) 
		$ ( imagelist[i] ).attr ( 'srcset', '' ) 
	}	
}
var lazyload = function  (  )  {
	if  ( $ ( this ).attr ( 'lazy' ).length > 0   ) {
		console.log ( 'Lazyload triggered' ) 
		$ ( this ).attr ( 'src', $ ( this ).attr ( 'lazy' )   )
		$ ( this ).attr ( 'srcset', $ ( this ).attr ( 'lazyset' )   )
		$ ( this ).attr ( 'lazy', '' ) 
		$ ( this ).attr ( 'lazysrc', '' ) 
	}
}


// jQuery actions after DOM loading is complete
$ ( document ).on ( 'ready', function (  ) {
	console.log ( 'DOM ready' ) 

	// Lazyload implementation
		//Lazyblock
		lazyblock ( '#article' ) 
		//Lazyload
		$('img', '#article').scrollSpy (  )
		$('img', '#article').on ( 'scrollSpy:enter', lazyload ) 


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