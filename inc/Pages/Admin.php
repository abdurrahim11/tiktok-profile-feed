<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Pages;

use Inc\Base\BaseController;
class Admin extends BaseController

{
    public function register()
    {
        add_action("admin_menu",array($this,"register_menu"));
    }
    public function register_menu(){

        add_menu_page(
            "Tiktok Feeds",
            "Tiktok Feeds",
            "manage_options",
            "welcome-tiktok",
            array($this,"welcome"),
            $this->plugin_url ."/assets/img/tiktok-white.svg",
            80
        );
        add_submenu_page(
            "welcome-tiktok",
            "Welcome",
            "Welcome",
            "manage_options",
            "welcome-tiktok",
            array($this,"welcome"),
            null
        );
        add_submenu_page(
            "welcome-tiktok",
            "All Feeds",
            "All Feeds",
            "manage_options",
            "tiktok-all-feeds",
            array($this,"all_feed"),
            null
        );
        add_submenu_page(
            "welcome-tiktok",
            "Add Feed",
            "Add Feed",
            "manage_options",
            "tiktok-add-feed",
            array($this,"add__feed"),
            null
        );
        add_submenu_page(
            "welcome-tiktok",
            "Setting",
            "Setting",
            "manage_options",
            "tiktok-setting",
            array($this,"setting"),
            null
        );
        add_submenu_page(
            "welcome-tiktok",
            "Support",
            "Support",
            "manage_options",
            "tiktok-Support",
            array($this,"support"),
            null
        );
    }
    public function welcome(){
        require_once $this->plugin_path."/templates/backend/welcome.php";
    }

    public function all_feed(){
        global $wpdb;
        $tablename =$wpdb->prefix.'tiktok_feed_profile_box';
        $results =  $wpdb->get_results("SELECT * FROM ".$tablename. " ORDER BY id DESC" );

        require_once $this->plugin_path."/templates/backend/all-feed.php";
    }

    public function add__feed(){
        require_once $this->plugin_path."/templates/backend/add_feed.php";
    }
    public function setting(){
        require_once $this->plugin_path."/templates/backend/setting.php";
    }
    public function support(){
        require_once $this->plugin_path."/templates/backend/support.php";
    }
}