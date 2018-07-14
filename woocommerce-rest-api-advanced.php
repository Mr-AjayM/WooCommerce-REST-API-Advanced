<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/ajayghaghretiya1
 * @since             1.0.0
 * @package           Woocommerce_Rest_Api_Advanced
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce REST API Advanced
 * Plugin URI:        https://github.com/Mr-AjayM/WooCommerce-REST-API-Advanced
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ajay Ghaghretiya
 * Author URI:        https://profiles.wordpress.org/ajayghaghretiya1
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-rest-api-advanced
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-rest-api-advanced-activator.php
 */
function activate_woocommerce_rest_api_advanced() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-rest-api-advanced-activator.php';
	Woocommerce_Rest_Api_Advanced_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-rest-api-advanced-deactivator.php
 */
function deactivate_woocommerce_rest_api_advanced() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-rest-api-advanced-deactivator.php';
	Woocommerce_Rest_Api_Advanced_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_rest_api_advanced' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_rest_api_advanced' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-rest-api-advanced.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_rest_api_advanced() {

	$plugin = new Woocommerce_Rest_Api_Advanced();
	$plugin->run();

}
run_woocommerce_rest_api_advanced();
