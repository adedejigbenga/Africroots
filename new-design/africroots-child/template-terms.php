<?php
/**
 * Template Name: Terms and Conditions (Redesign)
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'ar-home-body' ); ?>>
<?php wp_body_open(); ?>

<main class="ar-home-redesign">
	<div class="ar-page-header">
		<a class="ar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-africroots.png' ); ?>" alt="Africroots">
		</a>
		<nav class="ar-nav-links">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<div class="ar-nav-dropdown">
				<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop</a>
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

	<div class="ar-inner-hero">
		<div class="ar-eyebrow">Legal</div>
		<h1>Terms and Conditions</h1>
	</div>
	<div class="ar-legal-wrap">
		<div class="ar-legal-updated">Last updated May 2, 2026</div>
		<p>Access to this site requires users to be 18 years or older, or to access it under parental supervision. The site is intended for personal, non-commercial use only.</p>
		<h3>Product Details</h3>
		<p>We attempt to ensure accuracy in descriptions and pricing but reserve the right to refuse orders or limit quantities. Errors may occur and customers will be notified of any discrepancies.</p>
		<h3>Orders &amp; Payment</h3>
		<p>Orders require full payment before dispatch via credit card, debit card, or PayPal. We reserve discretion to refuse any order.</p>
		<h3>Delivery</h3>
		<p>Delivery is limited to Australian addresses. Delivery times are estimates only and are not guaranteed, with no liability for delays beyond our control.</p>
		<h3>Returns Policy</h3>
		<p>Seven-day return window for unused items in original condition, with full refunds or exchanges available.</p>
		<h3>Legal Framework</h3>
		<p>These terms are governed by and construed in accordance with Australian Consumer Law. Liability is capped at the purchase price.</p>
		<h3>Contact</h3>
		<p>Support is available at <a href="mailto:support@africroots.com" style="color: var(--ar-gold);">support@africroots.com</a> for inquiries about these terms.</p>
	</div>

	<footer class="ar-footer">
		<div class="ar-footer-inner">
			<div class="ar-footer-brand">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-africroots.png' ); ?>" alt="Africroots">
				<p>Africroots Pty Ltd &mdash; every garment is a celebration of African culture, crafted with care for comfort, durability, and pride.</p>
			</div>
			<div>
				<h4>Navigation</h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/product-category/mens/' ) ); ?>">Men's Collection</a></li>
					<li><a href="<?php echo esc_url( home_url( '/product-category/womens/' ) ); ?>">Women's Collection</a></li>
					<li><a href="<?php echo esc_url( home_url( '/product-category/new-arrivals/' ) ); ?>">New Arrivals</a></li>
					<li><a href="<?php echo esc_url( home_url( '/product-category/best-sellers/' ) ); ?>">Best Sellers</a></li>
				</ul>
			</div>
			<div>
				<h4>Information</h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">Terms and Conditions</a></li>
					<li><a href="<?php echo esc_url( home_url( '/returns-policy/' ) ); ?>">Returns Policy</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy-2/' ) ); ?>">Privacy Policy</a></li>
				</ul>
			</div>
			<div>
				<h4>Customer Service</h4>
				<ul>
					<li><a href="mailto:support@africroots.com">support@africroots.com</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">www.africroots.com</a></li>
					<li>Sydney | Lagos | Abuja</li>
				</ul>
			</div>
		</div>
		<div class="ar-footer-bottom">&copy; <?php echo esc_html( date( 'Y' ) ); ?> Africroots Pty Ltd. All rights reserved.</div>
	</footer>
</main>

<?php wp_footer(); ?>
</body>
</html>
