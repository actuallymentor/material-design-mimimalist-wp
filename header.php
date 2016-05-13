<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header" role="banner">

		<div class="navbar">
			<!-- Top bar -->
			<nav id="topbar" role='navigation'>
				<div class="nav-wrapper z-depth-1">
					<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
				</div>
				<!-- <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> -->
			</div>
		</nav>
	</div>


	<!-- Header block -->

	<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ): ?>
		<!--Header intro block code-->
		<div id="header-intro" class="">
			<div class="col l12 s12 valign-wrapper">
				<div class="container center">
					<h1 id="title" class="valign white-text center-align col l12 m12 s12"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
					<h5 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php bloginfo( 'description' ); ?></h5>
				</div>
			</div>
		</div>
	<?php endif; ?>

</header>
<main class="row" id="container">
