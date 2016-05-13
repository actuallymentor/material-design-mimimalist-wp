<!-- Set article classes for front and single pages -->

<article class="col 
<?php if  ( is_front_page() || is_home() || is_archive() || is_search() ) { echo "l6 m6 s12"; }  else  { echo "l12 m12 s12"; } ?>
<?php post_class(); ?>" id="post-<?php the_ID(); ?>" 
>

<header>
	<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>

	<?php if (is_singular()): ?>
		<?php the_title(); ?>
	<?php elseif (!is_singular()): ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	<?php endif; ?>

	

	<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>


	<?php if ( ! ( is_front_page() || is_home() || is_archive() || is_search() )  ) get_template_part( 'entry', 'meta' ); ?>
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?> <!-- Get thumbnail -->
</header>
<!-- <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?> -->
<?php if ( !( is_front_page() || is_home() || is_archive() || is_search() ) ) get_template_part( 'entry-footer' ); ?>
</article>
