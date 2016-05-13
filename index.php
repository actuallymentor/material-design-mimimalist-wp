<!-- WordPress Header -->
<?php get_header(); ?>


<section class="col l8 offset-l2 m10 offset-m1 s12" id="content" role="main">
	<?php $article = 0; // Track post number ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php
		$postclasses = 'col ';
		if  ( $article == 0 ) {
			$postclasses .= '';
		} elseif  ( $article < 5 ) {
			$postclasses .= '';
		} elseif  ( $article < 9 ) {
			$postclasses .= '';
		} else {
			$postclasses .= 'l12';
		}
		?>

		<!-- Filter style based on post number -->
		<!-- First article -->
		<?php if ( $article == 0 ) : ?> 
			<article class="featured col l12 m12 s12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
				<header class="card">
					<div class="card-image black">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
						</a>
						<span class="entry-title card-title white-text" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></span>
					</div>
				</header>
			</article>


		<?php elseif ( $article < 5 ) : ?> 
			<article class="medium col l6 m6 s12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
				<header class="card">

					<div class="card-image black">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>
						</a>
						<a class="truncate entry-title card-title white-text" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</div>
				</header>
			</article>


		<?php elseif ( $article < 9 ) : ?> 
			<article class="small col l3 m6 s12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
				<header class="card">
					<div class="card-image black">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'small' ); } ?>
						</a>
						<a class="truncate entry-title card-title white-text" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</div>
				</header>
			</article>

		<?php else : ?> 
			<?php if  ( $article == 9 ): ?> 
				<div class="col l12 m12 s12 card collection">
				<? endif; ?>
				<a class="collection-item" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"> 
					Read: <?php the_title();  ?>
				</a>
			<?php endif ; ?>

			<?php $article++ ; // Increment post number ?>
		<?php endwhile; endif; ?>
	</div>

</section>



<!-- Wordpress Footer -->
<?php get_footer(); ?>