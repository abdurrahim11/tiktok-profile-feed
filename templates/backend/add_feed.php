
<div class="feed-them-social-admin-wrap">
    <h1><?php _e( 'Tiktok Feed And Profile Box', 'tiktok-profile-feed' ); ?></h1>
    <hr>
    <div class="use-of-plugin">

    </div>



    <!-- custom option for padding -->
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="form-area">
        <input type="hidden" name="tiktok_data" value="1">
        <div class="tiktok_form-main">
            <div class="tiktok_form_left">
                <strong><?php _e( 'Tiktok Username:', 'tiktok-profile-feed' ); ?></strong>
            </div>
            <div class="tiktok_form_right">
                <input required type="text" name="user_tiktok_username" placeholder="Enter Your Username">
            </div>
        </div>

        <div class="tiktok_form-main">
            <div class="tiktok_form_left">
                <strong><?php _e( 'Layout Feed:', 'tiktok-profile-feed' ); ?></strong>
            </div>
            <div class="tiktok_form_right">
                <select required name="user_layout_feed"  class="Tiktok-input" id="layout_feed">
                    <option value="">Please Select Option</option>
                    <option value="1">Tiktok Video Feeds</option>
                    <option value="2">Tiktok Profile Box</option>
                    <option  value="3">Tiktok Video Feed & Profile Box</option>
                </select>
            </div>
        </div>
        <div class="border-area">
            <hr>
        </div>
        <div id="profile-area">
            <div class="feed-them-social-admin-input-wrap">
                <div class="fts-title-description-settings-page">
                    <h3> <?php _e( 'Tiktok Profile Box Options', 'tiktok-profile-feed' ); ?>	</h3>
                </div>
                <div class="border-area">
                    <hr>
                </div>




                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Layout Profile:', 'tiktok-profile-feed' ); ?>	 </strong>
                    </div>
                    <div class="tiktok_form_right">
                        <div class="options_group">
                            <div class="form-field">
                                <ul class="list-videos">
                                    <li class="media-modal-image ">
                                        <input type="radio" name="user_layout_profile" value="1" checked="">
                                        <img src="<?php echo $this->plugin_url."/assets/img/layout/one.png"?>">
                                    </li>
                                    <li class="media-modal-image ">
                                        <input type="radio" name="user_layout_profile" value="2">
                                        <img src="<?php echo $this->plugin_url."/assets/img/layout/two.png"?>">
                                    </li>
                                    <li class="media-modal-image ">
                                        <input type="radio" name="user_layout_profile" value="3">
                                        <img src="<?php echo $this->plugin_url."/assets/img/layout/three.png"?>">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Show Profile Photo:', 'tiktok-profile-feed' ); ?>	 </strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_profile_photo" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show Name:', 'tiktok-profile-feed' ); ?>	 </strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_name" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong>  <?php _e( ' Show Username:', 'tiktok-profile-feed' ); ?>	</strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_username" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Show Follow Button :', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_follow_button" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Follow button label :', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right ">
                        <input type="text" name="user_button_label" value="Follow" >
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Show Following Count :', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_following_count" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Show follower Count:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_follower_count" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show tagline bio:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_tagline_bio" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show Likes Count :', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_likes_count" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong>  <?php _e( 'Show video Count:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="user_video_count" value="yes">
                    </div>
                </div>
            </div>

        <div class="border-area">
            <hr>
        </div>
        </div>
        <div id="video-feed">
            <div class="feed-them-social-admin-input-wrap">
                <div class="fts-title-description-settings-page">
                    <h3><?php _e( ' Tiktok  Feeds Options', 'tiktok-profile-feed' ); ?>	</h3>
                </div>
                <div class="border-area">
                    <hr>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Columns:', 'tiktok-profile-feed' ); ?>	</strong>
                    </div>
                    <div class="tiktok_form_right ">
                        <input value="3" type="number" name="feeds_columns_count" max="12">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Limit:', 'tiktok-profile-feed' ); ?>	</strong>
                    </div>
                    <div class="tiktok_form_right ">
                        <input value="12" type="number" name="feeds_limit_count">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show Views Count:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="feeds_views_count" value="yes">
                    </div>
                </div>

                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show comments  Count: ', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="feeds_comments_count" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong> <?php _e( 'Show Publish Time:  ', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="feeds_publish_time" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong>  <?php _e( 'Show text: ', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input  type="checkbox" name="feeds_text" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong>  <?php _e( 'Video Sound:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="video_sound" value="yes">
                    </div>
                </div>
                <div class="tiktok_form-main">
                    <div class="tiktok_form_left">
                        <strong><?php _e( 'Show Share Button:', 'tiktok-profile-feed' ); ?></strong>
                    </div>
                    <div class="tiktok_form_right checkbox-area">
                        <input checked type="checkbox" name="feeds_share_button" value="yes">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="feeds_add_form">
        <div class="tiktok_form-main">
            <div class="tiktok_form_left">
                <input type="submit" class="btn-add-data" value="Save All Changes">
            </div>
        </div>
    </form>
</div>


<script>
    jQuery(document).ready(function () {
        jQuery("#layout_feed").change(function () {
            if (this.value == 1){
                jQuery("#profile-area").hide();
                jQuery("#video-feed").show();
            }
            if (this.value == 2){
                jQuery("#profile-area").show();
                jQuery("#video-feed").hide();
            }
            if (this.value == 3){
                jQuery("#profile-area").show();
                jQuery("#video-feed").show();
            }
        });
    });
</script>


