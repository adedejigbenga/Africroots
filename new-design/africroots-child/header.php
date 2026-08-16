<?php
/**
 * Header override — only takes effect on Shop/Product pages so the new nav
 * wraps the real WooCommerce loop/single-product markup. Every other page
 * (Cart, My Account, anything else) keeps the site's existing Cornerstone
 * header untouched.
 */

if ( is_shop() || is_product_category() || is_product_tag() || is_product() ) :
	?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'ar-home-body' ); ?>>
	<?php wp_body_open(); ?>

	<div class="ar-home-redesign">
		<div class="ar-page-header">
			<a class="ar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-africroots.png' ); ?>" alt="Africroots">
			</a>
			<nav class="ar-nav-links">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<div class="ar-nav-dropdown">
					<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="<?php echo is_shop() ? 'is-active' : ''; ?>">Shop</a>
					<div class="ar-nav-dropdown-menu">
						<a href="<?php echo esc_url( home_url( '/product-category/new-arrivals/' ) ); ?>">New Arrivals</a>
						<a href="<?php echo esc_url( home_url( '/product-category/best-sellers/' ) ); ?>">Best Sellers</a>
						<a href="<?php echo esc_url( home_url( '/product-category/mens/' ) ); ?>">Mens</a>
						<a href="<?php echo esc_url( home_url( '/product-category/womens/' ) ); ?>">Womens</a>
					</div>
				</div>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
				<a href="<?php echo esc_url( home_url( '/size-guide/' ) ); ?>">Size Guide</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
			</nav>
			<button type="button" class="ar-nav-toggle" aria-label="Menu" aria-expanded="false">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
			</button>
			<div class="ar-nav-icons">
				<a href="<?php echo esc_url( home_url( '/?s=' ) ); ?>" aria-label="Search"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.6"/><path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></a>
				<a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' ) ); ?>" aria-label="Account"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.6"/><path d="M4.5 20c1.5-4 5-5.5 7.5-5.5s6 1.5 7.5 5.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></a>
				<a href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' ) ); ?>" aria-label="Cart"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.4 12.4a2 2 0 0 0 2 1.6h7.6a2 2 0 0 0 2-1.6L21 8H6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="20.5" r="1.2" fill="currentColor"/><circle cx="17.5" cy="20.5" r="1.2" fill="currentColor"/></svg></a>
			</div>
		</div>

		<?php if ( ! is_product() ) : ?>
		<div class="ar-inner-hero">
			<div class="ar-eyebrow">Shop All</div>
			<h1>Wear Your Heritage</h1>
			<p>Every piece is a celebration of African culture, crafted with care for comfort and durability.</p>
		</div>
		<?php endif; ?>
	<?php
	return; // skip the normal Cornerstone header entirely for these pages
endif;

do_action( 'cs_header' );
