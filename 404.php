<?php get_header(); ?>

	<article id="post-0" class="post not-found">
		<header class="header">
			<h1 class="entry-title"><?php _e( 'Not Found', 'materialize' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'materialize' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</article>


<?php get_footer(); ?>
