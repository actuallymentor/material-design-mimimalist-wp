<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>


		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'postlist' ); ?>
		<?php endwhile; ?>
		<?php get_template_part( 'nav', 'below' ); ?>

	<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<header class="header">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'materialize' ); ?></h2>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Didn\'t find anything with that search. Try something else?.', 'materialize' ); ?></p>
				<?php get_search_form(); ?>

		</article>
	<?php endif; ?>
</section>

<?php get_footer(); ?>
