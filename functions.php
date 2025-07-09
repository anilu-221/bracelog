<?php
/**
 * Functions.
 *
 * @package bracelog
 */

/**Exit if accessed directly*/
defined( 'ABSPATH' ) || exit;

/**Set theme's version */
if ( ! defined( 'BRACELOG_THEME_VERSION' ) ) {
	define( 'BRACELOG_THEME_VERSION', '1.0.0' );
}

/**Theme constants*/
define( 'BRACELOG_THEME_DIR', get_template_directory_uri() );
define( 'BRACELOG_THEME_SLUG', 'bracelog' );


/**Theme functions */



/**
 * Allow SVG uploads.
 *
 * @param array $mimes Existing list of allowed mime types.
 * @return array Modified list of allowed mime types.
 */
function bracelog_allow_svg_uploads( $mimes ) {
	if ( current_user_can( 'manage_options' ) ) {
		$mimes['svg'] = 'image/svg+xml';
	}
	return $mimes;
}
add_filter( 'upload_mimes', 'bracelog_allow_svg_uploads' );

/**
 * Add theme support for a custom logo.
 */
function bracelog_theme_support_custom_logo() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'bracelog_theme_support_custom_logo' );
