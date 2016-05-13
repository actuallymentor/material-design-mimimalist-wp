<!-- WordPress Header -->
<?php get_header(); ?>


<section class="col l8 offset-l2 m10 offset-m1 s12" id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- Article loop -->
		<article class="col l6 m6 s12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
			<header class="card">
				<div class="card-image black">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					</a>
					<a class="entry-title card-title white-text" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</div>
				<div class="card-action">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">Read this...</a>
				</div>
			</header>

			<!-- <?php get_template_part( 'entry', 'meta' ); ?> -->
		</article>
		<!-- END Article loop -->

	<?php endwhile; endif; ?>
</section>



<!-- Wordpress Footer -->
<?php get_footer(); ?>