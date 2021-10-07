<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package WordPress
 * @since 1.0.0
 */

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	/**
	 * Set up theme defaults and register supports
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
	add_action( 'after_setup_theme', 'twentytwentytwo_support' );
endif;

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Enqueue theme stylesheet.
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), $version_string );
	}
	add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );
endif;

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :
	/**
	 * Enqueue editor styles.
	 *
	 * @return void
	 */
	function twentytwentytwo_editor_styles() {
		// Enqueue editor styles.
		add_editor_style(
			array(
				get_stylesheet_uri(),
			)
		);
	}
	add_action( 'admin_init', 'twentytwentytwo_editor_styles' );
endif;
