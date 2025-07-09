<?php
/**
 * Bracelog Scripts
 *
 * @package bracelog
 */

/**Exit if accessed directly*/
defined( 'ABSPATH' ) || exit;

/**Enqueue Scripts*/
if ( ! class_exists( 'Bracelog_Scripts' ) ) {
	/**
	 * Enqueue scripts.
	 */
	class Bracelog_Scripts {
		/**
		 * Constructor function
		 */
		public function __construct() {
			// Enqueue frontend scripts.
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_scripts' ) );
		}

		// Functions.

		/**
		 * Frontend scripts
		 */
		public function enqueue_frontend_scripts() {
			// Fonts.
				// Poppins - Google Fonts.
				wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap', '', BRACELOG_THEME_VERSION, 'all' );

			// Bracelog CSS.
				wp_enqueue_style( 'bracelog-css', get_template_directory_uri() . '/dist/css/app.css', array(), BRACELOG_THEME_VERSION, 'all' );

			// Bracelog JS.
				wp_enqueue_script( 'bracelog-js', get_template_directory_uri() . '/dist/js/app.js', 'jquery', BRACELOG_THEME_VERSION, true );
		}
	}
}

new Bracelog_Scripts();
