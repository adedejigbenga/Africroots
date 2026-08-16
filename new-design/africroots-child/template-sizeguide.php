<?php
/**
 * Template Name: Size Guide (Redesign)
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
			<a href="<?php echo esc_url( home_url( '/size-guide/' ) ); ?>" class="is-active">Size Guide</a>
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
		<div class="ar-eyebrow">Size Guide</div>
		<h1>Find Your Fit</h1>
		<p>Find your sizes and measurements here. All measurements in centimetres.</p>
	</div>

	<div class="ar-sizeguide-wrap">
		<div class="ar-size-block">
			<h3>Sets &amp; Tops</h3>
			<div class="ar-size-table"><table>
				<tr><th>Size</th><th>S</th><th>M</th><th>L</th><th>XL</th><th>2XL</th><th>3XL</th><th>4XL</th></tr>
				<tr><td>Bust (1/2)</td><td>43</td><td>46</td><td>50</td><td>52</td><td>54</td><td>56</td><td>58</td></tr>
				<tr><td>Length</td><td>62</td><td>64</td><td>68</td><td>70</td><td>72</td><td>74</td><td>76</td></tr>
				<tr><td>Shoulder Width</td><td>39</td><td>40</td><td>43</td><td>46</td><td>48</td><td>50</td><td>52</td></tr>
				<tr><td>Height (cm)</td><td>150-155</td><td>155-165</td><td>165-170</td><td>170-175</td><td>175-180</td><td>180-185</td><td>185-190</td></tr>
				<tr><td>Weight (kg)</td><td>85-100</td><td>100-120</td><td>120-140</td><td>140-160</td><td>160-180</td><td>180-200</td><td>200-220</td></tr>
			</table></div>
			<div class="ar-size-note">*Due to manual measurement methods, a 1-3cm variance is acceptable.</div>
		</div>

		<div class="ar-size-block">
			<h3>T-Shirts</h3>
			<div class="ar-size-table"><table>
				<tr><th>Size</th><th>Length</th><th>Bust</th><th>Shoulder Width</th><th>Sleeve Length</th></tr>
				<tr><td>M</td><td>68</td><td>53.5</td><td>50.2</td><td>23</td></tr>
				<tr><td>L</td><td>70</td><td>55.5</td><td>52</td><td>23.5</td></tr>
				<tr><td>XL</td><td>72</td><td>57.5</td><td>53.8</td><td>24</td></tr>
				<tr><td>2XL</td><td>74</td><td>59.5</td><td>55.6</td><td>24.5</td></tr>
				<tr><td>3XL</td><td>76</td><td>61.5</td><td>57.4</td><td>25</td></tr>
				<tr><td>4XL</td><td>78</td><td>63.5</td><td>59.2</td><td>25.5</td></tr>
			</table></div>
			<div class="ar-size-note">*Due to manual measurement methods, a 1-3cm variance is acceptable.</div>
		</div>

		<div class="ar-size-block">
			<h3>Pants &amp; Shorts</h3>
			<div class="ar-size-table"><table>
				<tr><th>Size</th><th>Inseam</th><th>Hip Circumference</th><th>Waist</th><th>Leg Opening</th></tr>
				<tr><td>M</td><td>52</td><td>108</td><td>34</td><td>29</td></tr>
				<tr><td>L</td><td>54</td><td>112</td><td>36</td><td>30</td></tr>
				<tr><td>XL</td><td>56</td><td>116</td><td>38</td><td>31</td></tr>
				<tr><td>2XL</td><td>57.5</td><td>120</td><td>40</td><td>32</td></tr>
				<tr><td>3XL</td><td>59</td><td>124</td><td>42</td><td>33</td></tr>
				<tr><td>4XL</td><td>60</td><td>128</td><td>44</td><td>34</td></tr>
			</table></div>
			<div class="ar-size-note">*Due to manual measurement methods, a 1-3cm variance is acceptable.</div>
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
