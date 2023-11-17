<?php

/**
 * codeMukto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage codeMukto
 * @since codeMukto 1.0
 */


if ( ! function_exists( 'codeMukto_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since codeMukto 1.0
	 *
	 * @return void
	 */
	function codeMukto_support() {
	
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'codeMukto_support' );




if ( ! function_exists( 'codeMukto_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since codeMukto 1.0
	 *
	 * @return void
	 */
	function codeMukto_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'codeMukto-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( '/style.css' ) )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'codeMukto_styles' );
