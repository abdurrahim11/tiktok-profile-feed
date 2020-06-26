<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Base;

class Feeds
{
    public function register() {
        add_action( "admin_post_nopriv_feeds_add_form", array($this,"add_feed"));
        add_action( "admin_post_feeds_add_form", array($this,"add_feed"));
        add_action( "admin_post_nopriv_feed_delete_form", array($this,"feed_delete_form"));
        add_action( "admin_post_feed_delete_form", array($this,"feed_delete_form"));
    }
    public function add_feed(){
        global $wpdb;
        $tablename=$wpdb->prefix.'tiktok_feed_profile_box';
        $data= array(
            'user_tiktok_username' =>    $_POST["user_tiktok_username"],
            'user_layout_feed' =>        $_POST["user_layout_feed"],
            'user_layout_profile' =>        $_POST["user_layout_profile"],
            'user_profile_photo' =>        isset($_POST["user_profile_photo"]),
            'user_name' =>        isset($_POST["user_name"]),
            'user_username' =>        isset($_POST["user_username"]),
            'user_tagline_bio' =>        isset($_POST["user_tagline_bio"]),
            'user_follow_button' =>        isset($_POST["user_follow_button"]),
            'user_button_label' =>        $_POST["user_button_label"],
            'user_following_count' =>        isset($_POST["user_following_count"]),
            'user_follower_count' =>        isset($_POST["user_follower_count"]),
            'user_likes_count' =>        isset($_POST["user_likes_count"]),
            'user_video_count' =>        isset($_POST["user_video_count"]),
            'feeds_columns_count' =>        $_POST["feeds_columns_count"],
            'feeds_limit_count' =>        $_POST["feeds_limit_count"],
            'feeds_views_count' =>        isset($_POST["feeds_views_count"]),
            'feeds_comments_count' =>        isset($_POST["feeds_comments_count"]),
            'feeds_publish_time' =>        isset($_POST["feeds_publish_time"]),
            'feeds_text' =>        isset($_POST["feeds_text"]),
            'video_sound' =>        isset($_POST["video_sound"]),
            'feeds_share_button' =>        isset($_POST["feeds_share_button"]),
        );
        $wpdb->insert( $tablename, $data);
        wp_redirect( "admin.php?page=tiktok-all-feeds", 302, 'WordPress' );
        exit;
    }

    public function feed_delete_form(){
        global $wpdb;
        $tablename=$wpdb->prefix.'tiktok_feed_profile_box';
        $wpdb->delete( $tablename, array( 'id' => $_POST["feed_id"] ) );
        wp_redirect( "admin.php?page=tiktok-all-feeds", 302, 'WordPress' );
    }

}