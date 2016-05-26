<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="header" role="banner">
		<!-- Header block -->
		<div class="navbar">
			<nav id="main-nav">
				<div class="nav-wrapper">
					<a href="<?php echo get_option('siteurl') ?>" class="brand-logo">SC</a>
					
					<!-- Wp Menu -->
					<div id="desktopmenu" class="center col l12 m12 s12">
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu',
							'container' => 'ul',
							'menu_class' => 'hide-on-med-and-down'
							) ); ?>
					</div>

					<!-- Wp Menu Mobile -->
					<a href="#" data-activates="mobile-nav" id="button-collapse" class="button-collapse left"><i class="material-icons">menu</i></a>
					<?php wp_nav_menu( array( 
						'theme_location' => 'main-menu',
						'container' => 'ul',
						'menu_class' => 'side-nav',
						'menu_id' => 'mobile-nav'
						) ); ?>



					<!-- Nav Widget -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Nav Widget") ) : ?><?php endif;?>
				</div>
			</nav>
		</div>



		<div id="header-intro" class="z-depth-1">
			<div class="col l12 s12 valign-wrapper">
				<div class="container center">

					<header class="white-text">
						<?php get_template_part( 'header', 'sitename' );
						( is_home ( ) ) ? get_template_part( 'header', 'description' ) : get_template_part( 'header', 'title' ) ;
						?>
					</header>

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Widget") ) : ?><?php endif;?>

			</div>
		</div>
	</div>




</div>
<main id="container">
	<section class="row container" id="content" role="main">