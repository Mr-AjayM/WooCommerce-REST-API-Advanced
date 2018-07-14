<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://profiles.wordpress.org/ajayghaghretiya1
 * @since      1.0.0
 *
 * @package    Woocommerce_Rest_Api_Advanced
 * @subpackage Woocommerce_Rest_Api_Advanced/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Rest_Api_Advanced
 * @subpackage Woocommerce_Rest_Api_Advanced/includes
 * @author     Ajay Ghaghretiya <ajay.mscit.2015@hotmail.com>
 */
class Woocommerce_Rest_Api_Advanced_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-rest-api-advanced',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
