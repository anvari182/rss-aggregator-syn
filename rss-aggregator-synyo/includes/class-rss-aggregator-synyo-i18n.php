<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/anvari182
 * @since      1.0.0
 *
 * @package    Rss_Aggregator_Synyo
 * @subpackage Rss_Aggregator_Synyo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rss_Aggregator_Synyo
 * @subpackage Rss_Aggregator_Synyo/includes
 * @author     Ermia Anvari <anvari182@gmail.com>
 */
class Rss_Aggregator_Synyo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rss-aggregator-synyo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
