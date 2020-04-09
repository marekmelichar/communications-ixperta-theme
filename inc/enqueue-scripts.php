<?php

/**
 * Add scripts & styles
 */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'default_theme_scripts');
function default_theme_scripts()
{




	// CSS

	// wp_enqueue_style('default-animations', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'slickCSS', get_template_directory_uri() . '/css/slick.min.css' );
	wp_enqueue_style( 'slickThemeCSS', get_template_directory_uri() . '/css/slick-theme.min.css' );

	wp_enqueue_style( 'lightbox-CSS', get_template_directory_uri() . '/css/lightbox/lightbox.min.css' );

	wp_enqueue_style(
		'default-style', get_stylesheet_uri()
	);

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );






	// JS

	// wp_register_script( 'Babel', 'https://unpkg.com/babel-standalone@6/babel.min.js', null, null, true );
	// wp_enqueue_script('Babel');

	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'slickJS', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'lightbox-JS', get_template_directory_uri() . '/js/lightbox/lightbox.min.js', array( 'jquery' ), '', true );

	// wp_enqueue_script( 'isMobileJS', get_template_directory_uri() . '/js/ismobile.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'equal-height-js', get_template_directory_uri() . '/js/equal-height.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'scrolldepth-js', get_template_directory_uri() . '/analytics/jquery.scrolldepth.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'screentime-js', get_template_directory_uri() . '/analytics/jquery.screentime.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'riveted-js', get_template_directory_uri() . '/analytics/jquery.riveted.min.js', array( 'jquery' ), '', true );





	// only load CONTACT FORM 7 on contact page
	if ( is_page('contact') )
	{
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			wpcf7_enqueue_scripts();
		}

		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}
}


// load JQUERY in FOOTER
function starter_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );
