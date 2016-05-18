<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header" role="banner">
		<!-- Header block -->
		<div class="navbar">
			<nav id="main-nav">
				<div class="nav-wrapper">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</div>
			</nav>
		</div>

		<!--Header intro block code-->
		<div id="header-intro" class="z-depth-1">
			<div class="col l12 s12 valign-wrapper">
				<div class="container center">

					<!-- Home page -->
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ): ?>
						<a id="title" class="valign white-text center-align col l12 m12 s12" href="<?php echo get_option('siteurl') ?>">
							<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
						</a>
						<h2 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php bloginfo( 'description' ); ?></h2>

						<!-- Blog page stuff -->
					<?php elseif ( is_single (  )   ): ?>
						<a id="title" class="valign white-text center-align col l12 m12 s12" href="<?php echo get_option('siteurl') ?>">
							<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
						</a>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<h1 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php the_title(); ?></h1>
						</a>
						<div class="col l12 m12 s12 meta white-text center">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php if ( ! ( is_front_page() || is_home() || is_archive() || is_search() )  ) get_template_part( 'entry', 'meta' ); ?>
							<?php endwhile; endif; ?>
							
						</div>

						<!-- Archives page stuff -->
					<?php elseif ( is_archive (  )   ): ?>
						<a id="title" class="valign white-text center-align col l12 m12 s12" href="<?php echo get_option('siteurl') ?>">
							<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
						</a>
						<header>
						<a href="<?php get_permalink(); ?>" title="<?php the_archive_title(); ?>">
							<h1 id="subtitle" class="valign white-text center-align col l12 m12 s12"><?php the_archive_title( 'Posts with ' ); ?></h1>
						</a>
						</header>

							
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>




	</header>
	<main id="container">
		<section class="row container" id="content" role="main">