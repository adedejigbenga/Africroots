<?php

/**
 * Cache-busting version for a file in this theme, based on its actual
 * modification time on disk. Using a static '1.0.0' string here meant the
 * enqueued URL never changed between edits, so browsers that had already
 * cached the CSS/JS kept serving the old copy forever — this fixes that.
 */
function africroots_child_asset_version( $relative_path ) {
	$file = get_stylesheet_directory() . $relative_path;
	return file_exists( $file ) ? filemtime( $file ) : '1.0.0';
}

function africroots_child_enqueue_assets() {
	wp_enqueue_style(
		'africroots-parent-style',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'africroots-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'africroots-parent-style' ),
		africroots_child_asset_version( '/style.css' )
	);

	$africroots_redesign_templates = array(
		'template-home-redesign.php',
		'template-about.php',
		'template-sizeguide.php',
		'template-contact.php',
		'template-terms.php',
		'template-returns.php',
		'template-privacy.php',
	);

	$is_woo_redesign_page = function_exists( 'is_shop' ) && ( is_shop() || is_product_category() || is_product_tag() || is_product() );

	if ( is_page_template( $africroots_redesign_templates ) || $is_woo_redesign_page ) {
		wp_enqueue_style(
			'africroots-home-fonts',
			'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Jost:wght@400;500;600&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'africroots-home-redesign',
			get_stylesheet_directory_uri() . '/css/home-redesign.css',
			array( 'africroots-child-style' ),
			africroots_child_asset_version( '/css/home-redesign.css' )
		);
	}

	if ( $is_woo_redesign_page ) {
		wp_enqueue_style(
			'africroots-woocommerce-redesign',
			get_stylesheet_directory_uri() . '/css/woocommerce-redesign.css',
			array( 'africroots-home-redesign' ),
			africroots_child_asset_version( '/css/woocommerce-redesign.css' )
		);
	}

	if ( is_page_template( $africroots_redesign_templates ) || $is_woo_redesign_page ) {
		wp_enqueue_script(
			'africroots-nav-toggle',
			get_stylesheet_directory_uri() . '/js/nav-toggle.js',
			array(),
			africroots_child_asset_version( '/js/nav-toggle.js' ),
			true
		);

		wp_enqueue_script(
			'africroots-reveal',
			get_stylesheet_directory_uri() . '/js/reveal.js',
			array(),
			africroots_child_asset_version( '/js/reveal.js' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'africroots_child_enqueue_assets' );

/**
 * Hide "on sale" status everywhere (shop grid, single product, badges).
 * WooCommerce's internal "_price" meta already equals the sale price for
 * any product currently on sale, so forcing is_on_sale() to false makes
 * WooCommerce display just that price as a plain, single amount — no
 * badge, no crossed-out price. No product data is changed by this; it's
 * purely how WooCommerce presents products, and it's fully reversible by
 * removing this filter.
 */
add_filter( 'woocommerce_product_is_on_sale', '__return_false' );

/**
 * The Shop/category/tag archives already show our own custom hero heading
 * (.ar-inner-hero, e.g. "Wear Your Heritage"). WooCommerce's default
 * archive title ("The Shop") was rendering right underneath it — a
 * duplicate heading plus its own vertical spacing. This hides just that
 * default title on our redesigned archive pages.
 */
add_filter( 'woocommerce_show_page_title', function ( $show ) {
	if ( function_exists( 'is_shop' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
		return false;
	}
	return $show;
} );

/**
 * Baseline SEO tags (meta description, Open Graph/Twitter cards, and
 * Organization/WebSite schema). The site had none of these at all before —
 * no dedicated SEO plugin is fully configured yet, so this fills the gap
 * directly. If Rank Math's setup wizard is completed later, ask to have
 * this block removed first to avoid duplicate meta/schema output.
 */
function africroots_child_seo_description() {
	if ( function_exists( 'is_product' ) && is_product() ) {
		global $post;
		$excerpt = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_strip_all_tags( $post->post_content );
		$excerpt = trim( wp_strip_all_tags( $excerpt ) );
		return $excerpt ? wp_trim_words( $excerpt, 30 ) : 'Shop ' . get_the_title() . ' from Africroots — heritage-inspired activewear, crafted for comfort and durability.';
	}
	if ( function_exists( 'is_shop' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
		return 'Shop Africroots — heritage-inspired activewear and apparel for men and women. New arrivals added regularly, with free shipping on orders above $150.';
	}
	if ( is_front_page() ) {
		return 'Africroots — African-heritage activewear, rooted in heritage and worn with pride. Every piece celebrates African culture, crafted for comfort and durability. Shop men\'s, women\'s, new arrivals, and best sellers.';
	}
	if ( is_singular( 'page' ) ) {
		global $post;
		if ( has_excerpt( $post ) ) {
			return trim( wp_strip_all_tags( get_the_excerpt( $post ) ) );
		}
	}
	return 'Africroots — African-heritage activewear and apparel. Rooted in heritage, worn with pride.';
}

function africroots_child_seo_image() {
	if ( function_exists( 'is_product' ) && is_product() ) {
		$image_id = get_post_thumbnail_id( get_the_ID() );
		if ( $image_id ) {
			$src = wp_get_attachment_image_src( $image_id, 'large' );
			if ( $src ) {
				return $src[0];
			}
		}
	}
	return 'https://www.africroots.com/wp-content/uploads/2026/02/cropped-Africroots-Icon-1-1-270x270.jpg';
}

function africroots_child_seo_tags() {
	if ( is_admin() ) {
		return;
	}
	$description = africroots_child_seo_description();
	$image       = africroots_child_seo_image();
	$title       = wp_get_document_title();
	$url         = home_url( add_query_arg( array(), $GLOBALS['wp']->request ?? '' ) );
	if ( function_exists( 'is_product' ) && is_product() ) {
		$type = 'product';
	} else {
		$type = 'website';
	}
	?>
	<meta name="description" content="<?php echo esc_attr( $description ); ?>">
	<meta property="og:site_name" content="Africroots">
	<meta property="og:type" content="<?php echo esc_attr( $type ); ?>">
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ?? '/' ) ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
	<?php
	if ( is_front_page() ) {
		?>
		<script type="application/ld+json">
		<?php
		echo wp_json_encode(
			array(
				'@context' => 'https://schema.org',
				'@graph'   => array(
					array(
						'@type' => 'Organization',
						'@id'   => home_url( '/#organization' ),
						'name'  => 'Africroots',
						'url'   => home_url( '/' ),
						'logo'  => 'https://www.africroots.com/wp-content/uploads/2026/02/cropped-Africroots-Icon-1-1-270x270.jpg',
					),
					array(
						'@type'           => 'WebSite',
						'@id'             => home_url( '/#website' ),
						'name'            => 'Africroots',
						'url'             => home_url( '/' ),
						'publisher'       => array( '@id' => home_url( '/#organization' ) ),
						'potentialAction' => array(
							'@type'       => 'SearchAction',
							'target'      => home_url( '/?s={search_term_string}' ),
							'query-input' => 'required name=search_term_string',
						),
					),
				),
			)
		);
		?>
		</script>
		<?php
	}
}
add_action( 'wp_head', 'africroots_child_seo_tags', 1 );

