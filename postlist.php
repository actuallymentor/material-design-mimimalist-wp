<div class="col l6 m12 s12 distance">
	<article <?php post_class('bottomlist center col l12 z-depth-1 m12 s12'); ?> id="post-<?php the_ID(); ?>">
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
</div>