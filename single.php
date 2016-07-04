<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>
		<div class="col l8 offset-l2 m12 s12 featuredimage">
			<?php if ( has_post_thumbnail() && ( is_singular( 'podcast' ) != 1 ) ) { the_post_thumbnail( 'large', ['class' => 'z-depth-1', 'width' => '853'] ); } ?>
		</div>

		<section id="article">
			<div class="col l8 offset-l2 m12 s12 flow-text contents">
				<?php get_template_part( 'entry', 'content' ); ?>
			</div>
		</section>

		<section>
			<div class="col l8 offset-l2 m12 s12 commentwrap">
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			</div>
		</section>

	</article>
<?php endwhile; endif; ?>


<?php get_footer(); ?>