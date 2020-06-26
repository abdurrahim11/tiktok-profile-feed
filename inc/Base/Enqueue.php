<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
 *
 */
class Enqueue extends BaseController
{
    public function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
        add_action("wp_enqueue_scripts", array($this,"front_end_enqueue"), 10000);
    }

    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style("tiktokfeeds_style",  $this->plugin_url ."assets/css/backend/style.css",array(),false,"all");

    }
    public function front_end_enqueue(){
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;700;900&display=swap', false );
        wp_deregister_style("bootstrap");
        wp_enqueue_style("bootstrap", $this->plugin_url ."assets/css/frontend/bootstrap.min.css",array(),false,"all");
        wp_enqueue_style("style-checkout", $this->plugin_url ."assets/css/frontend/style.css",array(),false,"all");
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true);
        wp_enqueue_script('hoverplay', $this->plugin_url .'assets/js/jquery.hoverplay.js', array(), null, true);

    }

}