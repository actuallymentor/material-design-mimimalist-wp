<a itemprop="url" href="<?php echo get_permalink(); ?>" title="<?php
	(is_archive (  ) ) ? the_archive_title() : '';
	(is_single (  ) ) ? the_title_attribute() : '';
	(is_page (  ) ) ? the_title() : '';
	(is_404 (  ) ) ? '404 Error' : '';
	?>">
	<span itemprop="headline"><h1 itemprop="name" id="subtitle" class="flow-text valign white-text center-align col l12 m12 s12">
		<?php
		(is_archive (  ) ) ? the_archive_title( 'Posts with ' ) : '';
		(is_single (  ) ) ? the_title_attribute() : '';
		(is_page (  ) ) ? the_title() : '';
		(is_404 (  ) ) ? '404 Error' : '';
		?>
	</h1></span>
</a>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php (is_single (  ) ) ? get_template_part( 'entry', 'meta' ) : ''; ?>
<?php endwhile; endif;?>
</a>