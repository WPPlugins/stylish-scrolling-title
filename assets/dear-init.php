<?php
/**
 * Dear Plugin Initializer
 *
 * Initializes everything for the plugin.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * WP_DEARFOUR Class.
 */
if ( file_exists( DEARFOUR_DIR . '/assets/class-dear.php' ) ) {
	require_once( DEARFOUR_DIR . '/assets/class-dear.php' );
}


/**
 * Actions/Filters.
 */

if ( class_exists( 'WP_DEARFOUR' ) ) {
	/**
	 * Object for `WP_DEARFOUR` class.
	 *
	 * @var 	object
	 */
	$dearfour_obj = new WP_DEARFOUR();

	// Hook the dearfour to head.
	// add_action( 'wp_enqueue_scripts', array( $dearfour_obj, 'dearfour' ) );
	add_action( 'wp_head', array( $dearfour_obj, 'dear_power' ) );



	// Register the shortcode [dearfour]
	add_action( 'init', array( $dearfour_obj, 'shortcode' ) );


} // class_exits() ended.

