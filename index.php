<!-- WordPress Header -->
<?php get_header(); ?>


<section class="col l8 offset-l2 m10 offset-m1 s12" id="content" role="main">
	<?php $article = 0; // Track post number ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php
		$postclasses = 'col ';
		if  ( $article == 0 ) {
			$postclasses .= 'l12 m12 s12';
		} elseif  ( $article < 5 ) {
			$postclasses .= 'l6 m6 s12';
		} elseif  ( $article < 9 ) {
			$postclasses .= 'l3 m6 s12';
		} else {
			$postclasses .= 'l12';
		}
		?>


		<!-- Article loop -->
		<article class="col <?php echo $postclasses; ?> <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
			<header class="card">

				<?php if ( $article < 9 ) : ?> 
					<div class="card-image black">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						</a>
						<a class="entry-title card-title white-text" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</div>
				<?php endif; ?>
				<div class="card-action">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"> 
					<?php if ( $article < 9 ) { echo 'Read this'; } else { the_title(); } ?>...
					</a>
				</div>
			</header>

			<!-- <?php get_template_part( 'entry', 'meta' ); ?> -->
		</article>
		<!-- END Article loop -->

		<?php $article++ ; // Increment post number ?>
	<?php endwhile; endif; ?>
</section>



<!-- Wordpress Footer -->
<?php get_footer(); ?>