<!-- WordPress Header -->
<?php get_header(); ?>

<div class="row" id="homewrap">
	<div class="col nopad l12 m12 s12">
		<?php $article = 0; // Track post number ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if ( $article == 0 ) : ?> 
				
				<article <?php post_class('featured center col l12 m12 s12 first'); ?> id="post-<?php the_ID(); ?>">
					<header>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class' => 'circle z-depth-1',  ) ); } ?>
							<h2 href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></h2>
						</a>
						<i><?php get_template_part( 'entry', 'meta' ); ?></i>

					</header>
				</article>
				

				<!-- New design attempt -->
			<?php elseif ( $article < 7 ) : ?> 

				
				<article  <?php post_class('smalllist center col l4 m6 s12'); ?> id="post-<?php the_ID(); ?>">
					<header class="">
						<a class="col l12 m12 s12" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class' => 'circle z-depth-1' ) ); } ?>
							<h2 href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></h2>
						</a>
						<i class="col l12 m12 s12"><?php get_template_part( 'entry', 'meta' ); ?></i>

					</header>
					
				</article>
				


			<?php elseif ( $article == 7 ) : ?> 
				
				<article <?php post_class('featured center col l12 m12 s12'); ?> id="post-<?php the_ID(); ?>">
					<header>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class' => 'circle z-depth-1' ) ); } ?>
							<h2 href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></h2>
						</a>
						<i><?php get_template_part( 'entry', 'meta' ); ?></i>

					</header>
				</article>

			<?php elseif ( $article > 7 && $article < 20 ) : ?> 
				<div class="col l6 m12 s12 distance">
					<article <?php post_class('bottomlist center col l12 z-depth-1 m12 s12'); ?> id="post-<?php the_ID(); ?>">
						<header class="valign-wrapper">
							<div class="left">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'mini', array( 'class' => 'z-depth-1 circle' ) ); } ?>
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



			<?php endif; ?>
			<?php $article++ ; // Increment post number ?>
		<?php endwhile; endif; ?>


	</div>


</div>

<!-- Wordpress Footer -->
<?php get_footer(); ?>