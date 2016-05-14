<?php get_header(); ?>
<section class="col l6 offset-l3" id="content" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="col l12 m12 s12 meta">
		<?php if ( ! ( is_front_page() || is_home() || is_archive() || is_search() )  ) get_template_part( 'entry', 'meta' ); ?>
		</div>

		<div class="col l12 m12 s12 contents">
		<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
		</div>

		<div class="col l12 m12 s12 comments">
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		</div>
	<?php endwhile; endif; ?>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
