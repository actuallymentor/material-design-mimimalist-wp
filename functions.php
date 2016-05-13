<?php
add_action( 'after_setup_theme', 'materialize_setup' );
function materialize_setup ( ) {
	load_theme_textdomain( 'materialize', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'materialize' ) )
		);
}
add_action( 'comment_form_before', 'materialize_enqueue_comment_reply_script' );
function materialize_enqueue_comment_reply_script ( ) {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'materialize_title' );
function materialize_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'materialize_filter_wp_title' );
function materialize_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'materialize_widgets_init' );
function materialize_widgets_init ( ) {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'materialize' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
function materialize_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}
add_filter( 'get_comments_number', 'materialize_comments_number' );
function materialize_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

// Add thumbnail support
add_theme_support( 'post-thumbnails' );
add_image_size ( 'thumbnail','50', '50', true );
add_image_size ( 'small','250', '250', true );
add_image_size ( 'medium','550', '400', true );
add_image_size ( 'large','1100', '700', true );


// Scripts, handle, src, deps, ver, in_footer
add_action( 'wp_enqueue_scripts', 'materialize_load_scripts' );
function materialize_load_scripts ( ) {
	wp_enqueue_script ( 'jquery', 'https://code.jquery.com/jquery-2.2.3.min.js', [], '2.2.3', true );
	wp_enqueue_script( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', ['jquery'], '0.97.6', true );
	wp_enqueue_style ( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css', [], '0.97.6', 'all' );
	wp_enqueue_style( 'custom-styles', get_stylesheet_uri() );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', ['jquery'], '1.0.0', true );
}




