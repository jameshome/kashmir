<?php
/**
 * kashmir functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kashmir
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function kashmir_setup() {
	add_theme_support( 'title-tag' );
	register_nav_menus(
		array(
			'header' => __( 'Header', 'kashmir' ),
      'footer'  => __( 'Footer', 'kashmir' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'kashmir_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kashmir_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kashmir_content_width', 1500 );
}
add_action( 'after_setup_theme', 'kashmir_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function kashmir_scripts() {
	wp_enqueue_style( 'kashmir-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'kashmir-js', get_template_directory_uri() . '/js/kashmir.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'kashmir_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

