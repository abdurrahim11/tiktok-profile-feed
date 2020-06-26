<?php


namespace Inc\Base;


use Inc\Base\BaseController;
use ProfileLayout;


class ShowFeeds extends BaseController
{
    public function register() {

        add_shortcode("tiktok-feed-profile",array($this,"get_tiktok_feed_profile"));
    }
    public function get_tiktok_feed_profile($data){
        $feed_result = $this->db_user_feeds_info($data["id"]);
        $tiktok_profile_info = self::Profile($feed_result->user_tiktok_username);
        $tiktok_feeds = self::ProfileVideo($feed_result->user_tiktok_username);

        if (isset($feed_result) && isset($tiktok_feeds) && isset($tiktok_profile_info)){
            if ($feed_result->user_layout_feed == 1){
                 require $this->plugin_path."templates/frontend/feed-layout.php";
            }elseif ($feed_result->user_layout_feed == 2){
                $this->profile_layout($tiktok_feeds,$tiktok_profile_info,$feed_result);
            }elseif ($feed_result->user_layout_feed == 3){
                $this->profile_layout($tiktok_feeds,$tiktok_profile_info,$feed_result);
                require $this->plugin_path."templates/frontend/feed-layout.php";
            }
        }else{
            echo "<h3 class='text-center text-danger'>Please check your internet connection</h3>";
        }
    }

    public function profile_layout($tiktok_feeds,$tiktok_profile_info,$feed_result)
    {
        if ($feed_result->user_layout_profile == 1) {
            require $this->plugin_path."templates/frontend/layout/part-one.php";
        } elseif ($feed_result->user_layout_profile == 2) {
            require $this->plugin_path."templates/frontend/layout/part-two.php";
        } elseif ($feed_result->user_layout_profile == 3) {
            require $this->plugin_path."templates/frontend/layout/part-three.php";
        }
    }
    public function db_user_feeds_info($id){
        global $wpdb;
        $tablename =$wpdb->prefix.'tiktok_feed_profile_box';
        $db_feed = $wpdb->get_row(" SELECT * FROM ".$tablename. " WHERE `id` = " .$id );
        return $db_feed;
    }

    private static function curl_get_data($username = null, $type = null)
    {
        $url = "https://tiktok.quadlayers.com/?type=".$type."&&name=".$username;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response);
        return $result;
    }

    public static function Profile($username)
    {
        $type = "user-profile";
        $data = self::curl_get_data($username, $type);
        return $data;
    }

    public static function ProfileVideo($username)
    {

        $type = "user-videos";
        $data = self::curl_get_data($username, $type);
        return $data;
    }
}