<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Base;
class MigrateDB
{
    public static  function db_create(){
        global $wpdb;
        $table_name = $wpdb->prefix. "tiktok_feed_profile_box";
        global $charset_collate;
        $charset_collate = $wpdb->get_charset_collate();
        global $db_version;

        if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
        {   $create_sql = "CREATE TABLE " . $table_name . " (
            id INT(11) NOT NULL auto_increment,
            user_tiktok_username VARCHAR(250) NOT NULL ,
            user_layout_feed VARCHAR(250) NULL,
            user_layout_profile VARCHAR(100) NULL,
            user_profile_photo VARCHAR(100) NULL,
            user_name VARCHAR(100) NULL,
            user_username VARCHAR(100) NULL,
            user_follow_button VARCHAR(100) NULL,
            user_button_label VARCHAR(100) NULL,
            user_tagline_bio VARCHAR(100) NULL,
            user_following_count VARCHAR(100) NULL,
            user_follower_count VARCHAR(100) NULL,
            user_likes_count VARCHAR(100) NULL,
            user_video_count VARCHAR(100) NULL,
            feeds_columns_count VARCHAR(100) NULL,
            feeds_limit_count VARCHAR(100) NULL,
            feeds_views_count VARCHAR(100) NULL,
            feeds_comments_count VARCHAR(100) NULL,
            feeds_publish_time VARCHAR(100) NULL,
            feeds_text VARCHAR(100) NULL,
            video_sound VARCHAR(100) NULL,
            feeds_share_button VARCHAR(100) NULL,
            PRIMARY KEY (id))$charset_collate;";
        }
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta( $create_sql );




        //register the new table with the wpdb object
        if (!isset($wpdb->stripe_transactions))
        {
            $wpdb->stripe_transactions = $table_name;
            //add the shortcut so you can use $wpdb->stats
            $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
        }
    }
}