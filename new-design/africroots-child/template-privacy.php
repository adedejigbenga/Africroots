<?php
/**
 * Template Name: Privacy Policy (Redesign)
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
		<h1>Privacy Policy</h1>
	</div>
	<div class="ar-legal-wrap">
		<div class="ar-legal-updated">Last updated 5/02/2026</div>
		<p>We are committed to protecting your personal information. Questions can be directed to <a href="mailto:hello@africroots.com" style="color: var(--ar-gold);">hello@africroots.com</a>.</p>
		<h3>1. Information Collection</h3>
		<p>We collect personal information voluntarily provided during website registration and service use, including names, phone numbers, email addresses, passwords, mailing and billing addresses, and debit/credit card numbers.</p>
		<h3>2. Information Usage</h3>
		<p>We use collected data for account creation, testimonials, feedback requests, communications, account management, fraud prevention, order fulfilment, competitions, customer support, and marketing.</p>
		<h3>3. Information Sharing</h3>
		<p>Data is shared based on your consent, our legitimate business interests, contract performance, legal obligations, or vital interests &mdash; including in the event of a merger, sale, financing, or acquisition of all or part of our business.</p>
		<h3>4. Cookies &amp; Tracking</h3>
		<p>We use cookies and similar tracking technologies; see our Cookie Notice for details.</p>
		<h3>5. Data Retention</h3>
		<p>Personal information is retained only as long as necessary for its stated purpose or as legally required, then deleted or anonymised.</p>
		<h3>6. Security</h3>
		<p>We implement security measures, though no transmission over the internet can be guaranteed 100% secure.</p>
		<h3>7. Your Privacy Rights</h3>
		<p>You may review, change, or terminate your account at any time, manage cookies, or unsubscribe from marketing emails through your account settings.</p>
		<h3>8. Do-Not-Track</h3>
		<p>No uniform Do-Not-Track standard currently exists, so we do not respond to such browser signals.</p>
		<h3>9. Policy Updates</h3>
		<p>This notice may be updated periodically; changes are indicated by a revised date.</p>
		<h3>10. Contact &amp; Data Requests</h3>
		<p>Questions, or requests to review, update, or delete your personal information, can be sent to <a href="mailto:hello@africroots.com" style="color: var(--ar-gold);">hello@africroots.com</a> and will be addressed within 30 days.</p>
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
