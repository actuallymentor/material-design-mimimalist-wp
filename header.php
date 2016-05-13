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
		<!-- Header block -->


		<!--Header intro block code-->
		<div id="header-intro" class="">
			<div class="col l12 s12 valign-wrapper">
				<div class="container center">
					<h1 id="title" class="valign white-text center-align col l12 m12 s12"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>

					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ): ?>
						<h2 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php bloginfo( 'description' ); ?></h2>

					<?php elseif ( is_single (  )  ): ?>
						<h2 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php the_title(); ?></h2>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<div class="navbar">
			<nav id="main-nav">
				<div class="nav-wrapper">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</div>
			</nav>
		</div>



	</header>
	<main class="row" id="container">
