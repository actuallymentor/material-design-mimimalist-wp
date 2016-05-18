</section>

<div class="clear"></div>
</main>

<footer class="page-footer">
	<div class="container">
		<div class="row white-text">
			<div class="col l12 m12 s12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area 1") ) : ?><?php endif;?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area 2") ) : ?><?php endif;?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area 3") ) : ?><?php endif;?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area 4") ) : ?><?php endif;?>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'materialize' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>		</div>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
