<?php

/**
 * Trigger this file on Plugin uninstall
 *
 * @package  AlecadddPlugin
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Clear Database stored data

global $wpdb;
$table_name = $wpdb->prefix . 'tiktok_feed_profile_box';
$sql = "DROP TABLE IF EXISTS $table_name";
$wpdb->query($sql);
delete_option("my_plugin_db_version");