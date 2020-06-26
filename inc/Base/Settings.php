<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Base;

class Settings
{
    public function register()
    {
        add_action( "admin_post_nopriv_setting_req_form", array($this,"setting_req_form"));
        add_action( "admin_post_setting_req_form", array($this,"setting_req_form"));
        add_option( 'playDelay', 10, '', 'yes' );
        add_option( 'pauseDelay', 0, '', 'yes' );

    }

    public function setting_req_form(){
        // Update a saved database option using the update_option routine
        update_option( 'playDelay', $_POST['playDelay'], 'yes' );
        update_option( 'pauseDelay', $_POST['pauseDelay'], 'yes' );
        wp_redirect( "admin.php?page=tiktok-setting", 302, 'WordPress' );
    }

}
