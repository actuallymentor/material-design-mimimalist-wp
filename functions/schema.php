<?php

function schemadata() {

	function articleschema (  ) {
		?>
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "Article",
				"mainEntityOfPage": {
					"@type": "WebPage",
					"@id": "<?php the_permalink (  );  ?>"
				},
				"headline": "<?php esc_html ( the_title_attribute (  ) ) ;  ?>",
				"image": {
					"@type": "ImageObject",
					"url": "<?php the_post_thumbnail_url ( 'schema' )  ?>",
					"height": 696,
					"width": 696
				},
				"datePublished": "<?php the_time( get_option( 'date_format' ) ); ?>",
				"dateModified": "<?php echo get_the_modified_date(get_option( 'date_format' )) ?>",
				"author": {
					"@type": "Person",
					"name": "<?php the_author(); ?>",
					"url": "https://www.linkedin.com/in/mentorpalokaj"
				},
				"publisher": {
					"@type": "Organization",
					"name": "<?php echo esc_html( get_bloginfo( 'name' ) ); ?>",
					"url": "<?php echo get_option('siteurl') ?>",
					"logo": {
						"@type": "ImageObject",
						"url": "",
						"width": "",
						"height": "" // 60 pref
					}
				},
				"description": "A most wonderful article"
			}
		</script>
		<?php
	}

	if  ( is_single (  )  ) {
		articleschema (  );
	}
	
}
add_action('wp_footer', 'schemadata');

function opengraph (  ) {
	function articlegraph (  ) {
		?>
		<meta property="og:title" content="<?php (is_archive (  ) ) ? the_archive_title() : '';
		(is_single (  ) ) ? the_title_attribute() : '';
		(is_page (  ) ) ? the_title() : '';
		(is_404 (  ) ) ? '404 Error' : '';
		(is_home (  ) ) ? print ( esc_html ( get_bloginfo('name') )  )  : '' ;  ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php ( is_home ( ) ) ?  print( get_option('siteurl') )  : the_permalink (  ) ; ?>" />
		<?php if  ( is_single (  )  ) {
			?> <meta property="og:image" content="<?php the_post_thumbnail_url ( 'large' )  ?>" /> <?php
		}
	}


	articlegraph (  ); 

}

add_action('wp_head', 'opengraph');

?>