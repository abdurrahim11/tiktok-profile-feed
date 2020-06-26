<?php
/**
 * @package  tiktokProfileFeed
 */
/*
Plugin Name: Tiktok Profile Feed
Plugin URI: http://techbestproduct.com/
Description: This plugin was originally created to make Tiktok videos look beautiful And and Tiktok user based on these topics through this plugin so that his profile information can be displayed nicely on his website.
Version: 1.0.0
Author: Abdur Rahim
Author URI: http://techbestproduct.com/
License:  later
Text Domain:  tiktok-profile-feed
*/

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );


// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}
