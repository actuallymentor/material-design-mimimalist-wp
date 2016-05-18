</section>

<div class="clear"></div>
</main>

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Footer Content</h5>
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
