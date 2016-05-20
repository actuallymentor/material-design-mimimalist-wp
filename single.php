<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="col l8 offset-l2 m12 s12 featuredimage">
		<span itemprop="image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large', ['class' => 'z-depth-1'] ); } ?></span>
	</div>

	<article itemprop="articleBody" id="article">
		<div class="col l8 offset-l2 m12 s12 flow-text contents">
			<?php get_template_part( 'entry', 'content' ); ?>
		</div>
	</article>

	<article>
		<div class="col l8 offset-l2 m12 s12 commentwrap">
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		</div>
	</article>
<?php endwhile; endif; ?>


<?php get_footer(); ?>