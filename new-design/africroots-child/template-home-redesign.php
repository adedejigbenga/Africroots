<?php
/**
 * Template Name: Home Redesign
 *
 * Full custom document — intentionally does not call get_header()/get_footer(),
 * so the parent Pro theme's header/footer markup (and Cornerstone's the_content
 * rendering) never run on this page. wp_head()/wp_footer() are still called
 * directly so plugin hooks (analytics, SEO, WooCommerce scripts) keep working.
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

	<section class="ar-hero">
		<div class="ar-hero-nav">
			<a class="ar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-africroots.png' ); ?>" alt="Africroots">
			</a>
			<nav class="ar-nav-links">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="is-active">Home</a>
				<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop</a>
				<a href="<?php echo esc_url( home_url( '/product-category/new-arrivals/' ) ); ?>">New Arrivals</a>
				<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Collections</a>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
			</nav>
			<div class="ar-nav-icons">
				<a href="<?php echo esc_url( home_url( '/?s=' ) ); ?>" aria-label="Search">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.6"/><path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
				</a>
				<a href="<?php echo esc_url( function_exists( 'wc_get_account_endpoint_url' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' ) ); ?>" aria-label="Account">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.6"/><path d="M4.5 20c1.5-4 5-5.5 7.5-5.5s6 1.5 7.5 5.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
				</a>
				<a href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' ) ); ?>" aria-label="Cart">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.4 12.4a2 2 0 0 0 2 1.6h7.6a2 2 0 0 0 2-1.6L21 8H6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="20.5" r="1.2" fill="currentColor"/><circle cx="17.5" cy="20.5" r="1.2" fill="currentColor"/></svg>
				</a>
			</div>
		</div>
	</section>

	<div class="ar-feature-strip">
		<div class="ar-feature-item">
			<svg viewBox="0 0 24 24" fill="none"><path d="M3 7h11v9H3V7zm11 3h4l3 3v3h-7v-6z" stroke="currentColor" stroke-width="1.5"/><circle cx="7" cy="18" r="1.6" stroke="currentColor" stroke-width="1.5"/><circle cx="17" cy="18" r="1.6" stroke="currentColor" stroke-width="1.5"/></svg>
			<span><b>Free Shipping</b>On orders above $150</span>
		</div>
		<div class="ar-feature-item">
			<svg viewBox="0 0 24 24" fill="none"><path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z" stroke="currentColor" stroke-width="1.5"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			<span><b>Secure Payment</b>100% safe checkout</span>
		</div>
		<div class="ar-feature-item">
			<svg viewBox="0 0 24 24" fill="none"><path d="M12 2l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 15.9 6.8 18l1-5.8-4.3-4.1 5.9-.9L12 2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
			<span><b>Trendy Collections</b>Rooted in culture</span>
		</div>
		<div class="ar-feature-item">
			<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			<span><b>24/7 Support</b>We're here to help</span>
		</div>
	</div>

	<section class="ar-categories">
		<div class="ar-eyebrow">Shop by Category</div>
		<h2>Find Your Perfect Fit</h2>
		<p>Curated collections celebrating African culture, for every mood, moment and occasion.</p>

		<div class="ar-cat-grid">
			<a class="ar-cat-card" href="<?php echo esc_url( home_url( '/product-category/womens/' ) ); ?>">
				<div class="ar-cat-img">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/cat-women.jpg' ); ?>" alt="Women's collection" loading="lazy">
				</div>
				<div class="ar-cat-label">Women
					<svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
			</a>
			<a class="ar-cat-card" href="<?php echo esc_url( home_url( '/product-category/mens/' ) ); ?>">
				<div class="ar-cat-img">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/cat-men.png' ); ?>" alt="Men's collection" loading="lazy">
				</div>
				<div class="ar-cat-label">Men
					<svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
			</a>
			<a class="ar-cat-card" href="<?php echo esc_url( home_url( '/product-category/new-arrivals/' ) ); ?>">
				<div class="ar-cat-img">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/cat-new-arrivals.jpg' ); ?>" alt="New Arrivals" loading="lazy">
				</div>
				<div class="ar-cat-label">New Arrivals
					<svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
			</a>
			<a class="ar-cat-card" href="<?php echo esc_url( home_url( '/product-category/best-sellers/' ) ); ?>">
				<div class="ar-cat-img">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/cat-best-sellers.png' ); ?>" alt="Best Sellers" loading="lazy">
				</div>
				<div class="ar-cat-label">Best Sellers
					<svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
			</a>
		</div>
	</section>

	<section class="ar-about">
		<div class="ar-about-inner">
			<div class="ar-eyebrow">Our Story</div>
			<h2>Rooted in Three Cities, Woven Into One</h2>
			<p>Africroots was built on a simple belief: African heritage deserves a place in everyday fashion. Every piece is designed to celebrate culture, crafted with care, and made to move with you &mdash; from the streets of Lagos to the shores of Sydney.</p>
		</div>

		<div class="ar-about-cities">
			<div class="ar-about-city">
				<h3>Sydney</h3>
				<div class="ar-city-rule"></div>
				<p>Home base, where every collection comes to life</p>
			</div>
			<div class="ar-about-city">
				<h3>Lagos</h3>
				<div class="ar-city-rule"></div>
				<p>Rooted in culture, colour and craft</p>
			</div>
			<div class="ar-about-city">
				<h3>Abuja</h3>
				<div class="ar-city-rule"></div>
				<p>Connected to heritage at every stitch</p>
			</div>
		</div>
	</section>

	<section class="ar-brand-wrap">
		<div class="ar-brand">
			<div class="ar-brand-img"></div>
			<div class="ar-brand-content">
				<div class="ar-eyebrow">Welcome To</div>
				<h2>More Than Fashion</h2>
				<p>Discover heritage. Experience pride.</p>
				<div class="ar-brand-divider"></div>

				<div class="ar-brand-features">
					<div class="ar-brand-feature">
						<div class="ar-icon-circle">
							<svg viewBox="0 0 24 24" fill="none"><path d="M12 2l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 15.9 6.8 18l1-5.8-4.3-4.1 5.9-.9L12 2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
						</div>
						<strong>Premium Quality</strong>
						<span>Crafted with care</span>
					</div>
					<div class="ar-brand-feature">
						<div class="ar-icon-circle">
							<svg viewBox="0 0 24 24" fill="none"><path d="M6 4h12l-1 3H7L6 4zm0 3l1.5 13a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1L18 7" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
						</div>
						<strong>Latest Collections</strong>
						<span>Stay on trend</span>
					</div>
					<div class="ar-brand-feature">
						<div class="ar-icon-circle">
							<svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.5-9.3-9A5.4 5.4 0 0 1 12 5.5 5.4 5.4 0 0 1 21.3 12c-2.3 4.5-9.3 9-9.3 9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
						</div>
						<strong>Your Style, Our Promise</strong>
						<span>Made to make you shine</span>
					</div>
				</div>
			</div>
		</div>
	</section>

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
