<?php
/**
 * Footer override — mirrors header.php's scoping: only Shop/Product pages
 * get the new footer; everything else keeps the existing Cornerstone footer.
 */

if ( is_shop() || is_product_category() || is_product_tag() || is_product() ) :
	?>
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
	</div><!-- .ar-home-redesign -->

	<?php wp_footer(); ?>
	</body>
	</html>
	<?php
	return;
endif;

do_action( 'cs_footer' );
