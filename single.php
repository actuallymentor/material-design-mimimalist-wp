<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="col l12 m12 s12 featuredimage">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large', ['class' => 'z-depth-1'] ); } ?>
		</div>


		<div class="col l12 m12 s12 flow-text contents">
			<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
		</div>

		<div class="col l12 m12 s12 commentwrap">
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		</div>
	<?php endwhile; endif; ?>


<?php get_footer(); ?>