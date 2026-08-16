<?php
/**
 * Template Name: About (Redesign)
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
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="is-active">About</a>
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

	<div class="ar-about-page-hero">
		<div class="ar-eyebrow">Our Heritage</div>
		<h1>About Africroots&reg;</h1>
		<p>A proudly African casual wear brand inspired by the continent's vibrant spirit, diversity, and cultural richness &mdash; drawing on Africa's heritage of artistry, storytelling, and craftsmanship to create contemporary clothing that merges tradition with modern expression.</p>
		<div class="ar-about-tagline">&ldquo;Train The Brain To Maintain&rdquo;</div>
	</div>

	<div class="ar-about-split">
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/cat-women.jpg' ); ?>" alt="Africroots lifestyle">
		<div>
			<p>Beyond merchandise, Africroots&reg; is a movement that empowers individuals to embrace their roots and express their uniqueness with confidence &mdash; designed for active lifestyles, whether relaxing, creating, or socialising, while honouring shared African heritage.</p>
			<p>Every garment combines comfort with authentic African influences, featuring bold prints and timeless colour palettes, carrying cultural significance and celebrating African identity and pride through wearable art.</p>
		</div>
	</div>

	<div class="ar-values-row">
		<div class="ar-value-card">
			<div class="ar-icon-circle"><svg viewBox="0 0 24 24" fill="none"><path d="M12 2l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 15.9 6.8 18l1-5.8-4.3-4.1 5.9-.9L12 2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg></div>
			<h4>Authenticity</h4>
			<p>Designs honour African heritage through bold, thoughtful craftsmanship.</p>
		</div>
		<div class="ar-value-card">
			<div class="ar-icon-circle"><svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.5-9.3-9A5.4 5.4 0 0 1 12 5.5 5.4 5.4 0 0 1 21.3 12c-2.3 4.5-9.3 9-9.3 9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg></div>
			<h4>Fair Trade</h4>
			<p>Ethical partnerships with artisans, ensuring fair compensation and safe working conditions.</p>
		</div>
		<div class="ar-value-card">
			<div class="ar-icon-circle"><svg viewBox="0 0 24 24" fill="none"><path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
			<h4>Quality</h4>
			<p>Skilled craftsmanship, premium materials, and consistent standards in every piece.</p>
		</div>
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
