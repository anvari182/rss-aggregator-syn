<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/anvari182
 * @since             1.0.0
 * @package           Rss_Aggregator_Synyo
 *
 * @wordpress-plugin
 * Plugin Name:       rss aggragetor synyo
 * Plugin URI:        https://github.com/anvari182/rss-aggregator-syn
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ermia Anvari
 * Author URI:        https://github.com/anvari182
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rss-aggregator-synyo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rss-aggregator-synyo-activator.php
 */
function activate_rss_aggregator_synyo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rss-aggregator-synyo-activator.php';
	Rss_Aggregator_Synyo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rss-aggregator-synyo-deactivator.php
 */
function deactivate_rss_aggregator_synyo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rss-aggregator-synyo-deactivator.php';
	Rss_Aggregator_Synyo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rss_aggregator_synyo' );
register_deactivation_hook( __FILE__, 'deactivate_rss_aggregator_synyo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rss-aggregator-synyo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rss_aggregator_synyo() {

	$plugin = new Rss_Aggregator_Synyo();
	$plugin->run();

}
run_rss_aggregator_synyo();
