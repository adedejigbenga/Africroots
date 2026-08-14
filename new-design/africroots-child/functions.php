<?php

function africroots_child_enqueue_assets() {
	wp_enqueue_style(
		'africroots-parent-style',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'africroots-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'africroots-parent-style' ),
		'1.0.0'
	);

	if ( is_page_template( 'template-home-redesign.php' ) ) {
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
			'1.0.0'
		);
	}
}
add_action( 'wp_enqueue_scripts', 'africroots_child_enqueue_assets' );
