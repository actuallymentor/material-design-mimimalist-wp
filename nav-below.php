<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="col row l10 offset-l1 primary m12 s12 navigation" role="navigation">
	<div class="nav-previous"><?php next_posts_link(sprintf( __( '%s older', 'materialize' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
	<div class="nav-next"><?php previous_posts_link(sprintf( __( 'newer %s', 'materialize' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
</nav>
<?php } ?>
