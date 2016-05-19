<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'postlist' ); ?>
<?php endwhile; ?>

<?php get_template_part( 'nav', 'below' ); ?>


<?php get_footer(); ?>
