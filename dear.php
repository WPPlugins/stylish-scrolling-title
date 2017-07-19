<?php
/*

Plugin Name: Stylish Scrolling Title
Plugin URI: http://www.devilhunter.net/
Description: Title of your website will auto scroll from left to right in Internet Explorer, Mozilla Firefox, Google Chrome, Opera.
Version: 1.1
Author: Tawhidur Rahman Dear
Author URI: https://www.facebook.com/tawhidurrahmandear/
License: GPLv2 or later

Author Introduction:
Tawhidur Rahman Dear

Founder & CEO
Dear IT Solution
(IT Consultancy, Web Development, AdSense, SEO, Password Recovery & Security, Online Marketing)
	 
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
	
http://www.devilhunter.net/
dear@devilhunter.net
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
LinkedIn: https://www.linkedin.com/in/tawhidurrahmandear  
	
	
 * @package Stylish Scrolling Title
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'DEARFOUR_VERSION' ) ) {
    define( 'DEARFOUR_VERSION', '1.0.0' );
}

if ( ! defined( 'DEARFOUR_NAME' ) ) {
    define( 'DEARFOUR_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('DEARFOUR_DIR' ) ) {
    define( 'DEARFOUR_DIR', WP_PLUGIN_DIR . '/' . DEARFOUR_NAME );
}

if ( ! defined('DEARFOUR_URL' ) ) {
    define( 'DEARFOUR_URL', WP_PLUGIN_URL . '/' . DEARFOUR_NAME );
}


/**
 * Plugin Initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( DEARFOUR_DIR . '/assets/dear-init.php' ) ) {
    require_once( DEARFOUR_DIR . '/assets/dear-init.php' );
}
