<?php
/**
 * WP Rig functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rig
 */

define( 'WP_RIG_MINIMUM_WP_VERSION', '4.5' );
define( 'WP_RIG_MINIMUM_PHP_VERSION', '7.0' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], WP_RIG_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), WP_RIG_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _wp_rig_autoload( $class_name ) {
		$namespace = 'WP_Rig\WP_Rig';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}

		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc';
		foreach ( $parts as $part ) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if ( ! file_exists( $path ) ) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register( '_wp_rig_autoload' );
}

// Load the `wp_rig()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'WP_Rig\WP_Rig\wp_rig' );

/**
 * Setup suggested plugin system.
 *
 * Include the Austintatious_Design_Plugin_Manager class and add
 * an interface for users to to manage suggested
 * plugins.
 *
 * @since x.x.x
 *
 * @see  Austintatious_Design_Plugin_Manager
 * @link http://mypluginmanager.com
 */
function austintatious_plugin_manager() {

	if ( ! is_admin() ) {
		return;
	}

	/**
	 * Include plugin manager class.
	 *
	 * No other includes are needed. The Austintatious_Design_Plugin_Manager
	 * class will handle including any other files needed.
	 *
	 * If you want to move the "plugin-manager" directory to
	 * a different location within your theme, that's totally
	 * fine; just make sure you adjust this include path to
	 * the plugin manager class accordingly.
	 */
	require_once( get_parent_theme_file_path( '/plugin-manager/class-austintatious-design-plugin-manager.php' ) );

	/*
	 * Setup suggested plugins.
	 *
	 * It's a good idea to have a filter applied to this so your
	 * loyal users running child themes have a way to easily modify
	 * which plugins show as suggested for the site they're setting
	 * up for a client.
	 */
	$plugins = apply_filters( 'austintatious_plugins', array(
		array(
			'name'    => 'Advanced Custom Fields Pro',
			'slug'    => 'advanced-custom-fields-pro',
			'version' => '5.8+',
			'url'     => 'http://www.gravityforms.com', // Only for non wp.org plugins.
		),
		array(
			'name'    => 'AMP',
			'slug'    => 'amp',
			'version' => '1.5+',
			'url'     => 'http://www.gravityforms.com', // Only for non wp.org plugins.
		),
		array(
			'name'    => 'Custom Post Type UI',
			'slug'    => 'custom-post-type-ui',
			'version' => '1.7+',
			'url'     => 'http://www.gravityforms.com', // Only for non wp.org plugins.
		),
	));

	/*
	 * Setup optional arguments for plugin manager interface.
	 *
	 * See the set_args() method of the Austintatious_Design_Plugin_Manager
	 * class for full documentation on what you can pass in here.
	 */
	$args = array(
		'page_title' => __( 'Required Plugins', 'austintatious' ),
		'menu_slug'  => 'austintatious-required-plugins',
	);

	/*
	 * Create plugin manager object, passing in the required
	 * plugins and optional arguments.
	 */
	$manager = new Austintatious_Design_Plugin_Manager( $plugins, $args );

}
add_action( 'after_setup_theme', 'austintatious_plugin_manager' );

