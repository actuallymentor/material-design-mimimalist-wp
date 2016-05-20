<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="entry-meta">
		<span class="author vcard">By <?php the_author_posts_link(); ?></span>
		<span class="meta-sep"> | </span>
		<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
	</section>

<?php endwhile; endif; ?>
