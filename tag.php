<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('bottomlist center col l5 offset-l1 z-depth-1 m12 s12'); ?> id="post-<?php the_ID(); ?>">
		<header class="valign-wrapper">
			<div class="left">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class' => 'z-depth-1 circle' ) ); } ?>
			</div>
			<div class="left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<h2 class="left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title( ); ?>
					</h2>
				</a>
				<br>
				<span class="left">
					<?php get_template_part( 'entry', 'meta' ); ?>
				</span>
			</div>

		</header>
	</article>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
