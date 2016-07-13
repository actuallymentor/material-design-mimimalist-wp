<?php
error_reporting(0);
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
		'name' => __( 'Footer Widget Area 1', 'footer-widget-1' ),
		'id' => 'footer-widget-area-1',
		'before_widget' => '<div class="footwidget col l3 m6 s12">',
		'after_widget' => "</div>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		) );
	register_sidebar( array (
		'name' => __( 'Footer Widget Area 2', 'footer-widget-2' ),
		'id' => 'footer-widget-area-2',
		'before_widget' => '<div class="footwidget col l3 m6 s12">',
		'after_widget' => "</div>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		) );
	register_sidebar( array (
		'name' => __( 'Footer Widget Area 3', 'footer-widget-3' ),
		'id' => 'footer-widget-area-3',
		'before_widget' => '<div class="footwidget col l3 m6 s12">',
		'after_widget' => "</div>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		) );
	register_sidebar( array (
		'name' => __( 'Footer Widget Area 4', 'footer-widget-4' ),
		'id' => 'footer-widget-area-4',
		'before_widget' => '<div class="footwidget col l3 m6 s12">',
		'after_widget' => "</div>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		) );
	register_sidebar( array (
		'name' => __( 'Header Widget', 'header-widget' ),
		'id' => 'header-widget',
		'before_widget' => '<div class="headwidget col l12 m12 s12">',
		'after_widget' => "</div>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		) );
	register_sidebar( array (
		'name' => __( 'Nav Widget', 'nav-widget' ),
		'id' => 'nav-widget',
		'before_widget' => '<div class="navwidget hide-on-med-and-down right">',
		'after_widget' => "</div>",
		'before_title' => '',
		'after_title' => '',
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
add_image_size ( 'mini','100', '100', true );
add_image_size ( 'thumbnail','150', '150', true );
add_image_size ( 'small','250', '250', true );
add_image_size ( 'medium','550', '400', true );
add_image_size ( 'large','900', '600', true );
add_image_size ( 'schema','696', '696', true );


// Scripts, handle, src, deps, ver, in_footer
if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'materialize_load_scripts' );
}
function materialize_load_scripts ( ) {
	if ( ! is_admin() ) {
	wp_deregister_script( 'jquery' ); // Unload default wp jquery

	// Dependencies
	wp_enqueue_script ( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js' , [], '2.2.4', true );
	wp_enqueue_style ( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], '0.97.6', 'all' );

	// Materialize
	wp_enqueue_style ( 'materialize', get_template_directory_uri() . '/materialize/css/materialize.min.css', [], '0.97.6', 'all' );

	// Custom css and js
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/style.css', [], '3.6', 'all' );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', ['jquery'], '1.0.0', true );
}
}

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Box shortcode

function boxify ( $atts, $content = null ) {

	extract(shortcode_atts(array(
		'type' => 1,
		), $atts));

	$classes = 'box card ';
	$classes .=  $atts['type'] ;

	$return_string = '<div class="' . $classes . '">' . $content .'</div>';

	return $return_string;
}

function register_shortcodes(){
	add_shortcode('box', 'boxify');
}

add_action( 'init', 'register_shortcodes');

// Schema support
include ( get_template_directory() . '/functions/schema.php' );

// jQuery fallback

add_action('wp_footer', 'jqfallback');

function jqfallback (  ) {
	?>

	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 
			if  ( $ == undefined ) {
				var js = document.createElement("script")
				js.type = "text/javascript"
				js.src = "<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.3.min.js"
				document.body.appendChild(js)
			}
		})
	</script>

	<?php
}

// Add analytics tags
add_action( 'wp_footer', 'analytics_tags');
function analytics_tags() { ?>
	<!-- Google Analytics -->
	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 

			console.log ( 'Pixels triggered' );

		// GA Tracking code
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-11561065-10', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');

		// FB traxking pixel
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
				n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
				t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','//connect.facebook.net/en_US/fbevents.js');

				fbq('init', '500924636726230');
				fbq('track', 'PageView');
			})
	</script>
	<noscript>
		<img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=500924636726230&ev=PageView&noscript=1"
		/>
	</noscript>
	<?php
}

// Sensei stuff
global $woothemes_sensei;
remove_action( 'sensei_before_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper' ), 10 );
remove_action( 'sensei_after_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper_end' ), 10 );

add_action('sensei_before_main_content', 'my_theme_wrapper_start', 10);
add_action('sensei_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="pagewrap" class="sensei col l8 offset-l2 m12 s12">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
add_action( 'after_setup_theme', 'declare_sensei_support' );
function declare_sensei_support() {
    add_theme_support( 'sensei' );
}