<?php
/**
 * Plugin Name: Custom Advanced Custom Field Year Picker
 * Plugin URI: #
 * Description: Adds a 'Year Picker' field type to ACF.
 * Version: 1.0
 * Author: Wajid Khan
 * Author URI: h#
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Include the ACF Year Picker PHP file
include_once plugin_dir_path( __FILE__ ) . 'acf-year-picker.php';

// Register activation and deactivation hooks
register_activation_hook( __FILE__, 'your_plugin_activate' );
register_deactivation_hook( __FILE__, 'your_plugin_deactivate' );

/**
 * Actions to perform on plugin activation
 */
function your_plugin_activate() {
    // Activation actions
}

/**
 * Actions to perform on plugin deactivation
 */
function your_plugin_deactivate() {
    // Deactivation actions
}
