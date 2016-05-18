<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section id="comments">
	<?php 
	if ( have_comments() ) : 
		global $comments_by_type;
	$comments_by_type = &separate_comments( $comments );
	if ( ! empty( $comments_by_type['comment'] ) ) : 
		?>
	<section id="comments-list" class="comments">
		<h3 class="comments-title"><?php comments_number(); ?></h3>
		<?php if ( get_comment_pages_count() > 1 ) : ?>
			<nav id="comments-nav-above" class="comments-navigation" role="navigation">
				<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
			</nav>
		<?php endif; ?>
		<ul id="listed-comments">
			<?php 
			$args = array(
				'walker'            => null,
				'max_depth'         => '',
				'style'             => 'ul class="card',
				'end-callback'      => null,
				'type'              => 'comment',
				'reply_text'        => 'Reply',
				'page'              => '',
				'avatar_size'       => 32,
				'reverse_top_level' => null,
				'reverse_children'  => '',
				'format'            => 'html5',
				'echo'              => true
				);
			wp_list_comments( $args );
			?>
		</ul>
		<?php if ( get_comment_pages_count() > 1 ) : ?>
			<nav id="comments-nav-below" class="comments-navigation" role="navigation">
				<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
			</nav>
		<?php endif; ?>
	</section>
	<?php 
	endif; 
	if ( ! empty( $comments_by_type['pings'] ) ) : 
		$ping_count = count( $comments_by_type['pings'] ); 
	?>
	<section id="trackbacks-list" class="comments">
		<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'materialize' ) : __( 'Trackback', 'materialize' ) ); ?></h3>
		<ul>
			<?php wp_list_comments( 'type=pings&callback=materialize_custom_pings' ); ?>
		</ul>
	</section>
	<?php 
	endif; 
	endif;
	if ( comments_open() ) comment_form();
	?>
</section>