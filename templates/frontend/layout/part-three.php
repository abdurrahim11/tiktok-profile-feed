<div class="three-layout-user">
    <div class="tiktok-compact">
        <div class="tiktok-header">
            <?php if ($feed_result->user_profile_photo == 1 ){?>
                <?php $profile_img =  $tiktok_profile_info->coversMedium['0'] ?>
                <div class="tiktok-avatar"><img src="<?php echo esc_url( $profile_img ); ?>" alt="<?php echo esc_attr($tiktok_profile_info->uniqueId); ?>"></div>
            <?php }?>
            <div class="tiktok-userinfo">
                <div class="tiktok-userinfo-leftinfo" >
                    <?php if ($feed_result->user_name == 1 ){?>
                        <div class="tiktok-name"><?php _e( $tiktok_profile_info->nickName  , 'tiktok-profile-feed' ); ?></div>
                    <?php }?>
                    <?php if ($feed_result->user_username == 1 ){?>
                        <div class="tiktok-username">@ <?php _e( $tiktok_profile_info->uniqueId   , 'tiktok-profile-feed' ); ?></div>
                    <?php }?>
                </div>
                <div class="tiktok-follow">
                    <?php

                    ?>
                    <?php if ($feed_result->user_follow_button == 1 ){
                        $uniqueId    = "https://tiktok.com/@".$tiktok_profile_info->uniqueId ?>
                        <a class="tiktok-button-follow" href="<?php echo esc_url( $uniqueId ); ?>" target="_blank"><?php if (!empty($tiktok_profile_info->user_button_label)){ _e( $tiktok_profile_info->user_button_label , 'tiktok-profile-feed');}else{  _e( "Follow" , 'tiktok-profile-feed');}?></a>
                    <?php }?>

                </div>

            </div>
        </div>
        <div class="tiktok-info">
            <div class="tiktok-stats">
                <?php if ($feed_result->user_following_count == 1 ){?>
                    <div class="tiktok-following">
                        <strong><?php
                            _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->following), 'tiktok-profile-feed');
                            ?>
                        </strong> Following</div>
                <?php }?>

                <?php if ($feed_result->user_follower_count == 1 ){?>
                    <div class="tiktok-followers"><strong><?php
                            _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->fans), 'tiktok-profile-feed');

                            ?></strong> Followers</div>
                <?php }?>


                <?php if ($feed_result->user_likes_count == 1 ){?>
                    <div class="tiktok-likes"><strong><?php
                            _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->heart), 'tiktok-profile-feed');
                            ?></strong> Likes</div>
                <?php }?>


                <?php if ($feed_result->user_video_count == 1 ){?>
                    <div class="tiktok-videos"><strong><?php
                            _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->video), 'tiktok-profile-feed');

                            ?></strong> Videos</div>
                <?php }?>


            </div>

            <?php if ($feed_result->user_tagline_bio == 1 ){?>
                <p class="tiktok-bio">
                    <?php
                    _e($tiktok_profile_info->signature, 'tiktok-profile-feed');

                    ?>
                </p>
            <?php }?>
        </div>

    </div>
</div>