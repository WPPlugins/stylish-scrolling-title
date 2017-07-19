<?php
/**
 * WP_DEARFOUR class
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WP_DEARFOUR
 */

if ( ! class_exists( 'WP_DEARFOUR' ) ) :

class WP_DEARFOUR {

	/**
	 * Settings.
	 *
	 * @var 	array
	 */
	private $dearfour_settings;



	/**
	 * Enqueue Script.
	 *
	 */
	public function dear_power() {
		if ( 'on' == $this->is_posts || 'on' == $this->is_pages || shortcode_exists( 'dearfour' ) ) {
			?>
<SCRIPT>
var Version = navigator.appVersion;
   var Nom = navigator.appName;
   var texte = document.title;
   var width = 75;
   var strLen = texte.length;
   var pos = 1 - width;
 
   Titre();
 
   function Titre(){
   var scroll = "";
   pos++;
   if (pos == strLen) pos = 1 - width;
   if (pos<0){
   for (var i=1; i<=Math.abs(pos); i++) scroll = scroll + " ";
   scroll = scroll + texte.substring(0, width - i + 1);
   for (var i=scroll.length; i<=width; i++) scroll = scroll + " ";}
   else{
   scroll = scroll + texte.substring(pos, pos + width);
   for (var i=scroll.length; i<=width; i++) scroll = scroll + " ";
   }
   if (Nom == 'Microsoft Internet Explorer','Mozilla FireFox','Opera','Google Chrome','Safari') document.title = scroll;
   setTimeout("Titre()",100);}
--></SCRIPT>

			<?php
		}
	} // dear_power ended.


	/**
	 * Add Dear Plugin.
	 */
	public function add_dearfour_plugin( $content ) {
		// Get the $post.
		global $post;


		// If nothing from both of the check then simply return the content.
		return $content;

	} // add_dearfour_plugin() ended.
	


	/**
	 * [dearfour] Shortcode.
	 */
	public function shortcode() {
		/**
		 * Shortcode: `[dearfour]`.
		 */
		add_shortcode( 'dearfour', function () {
			return '<div></div>';
		} );// annonymous function and action ended.

	}


} // Class WP_DEARFOUR ended.

endif;
