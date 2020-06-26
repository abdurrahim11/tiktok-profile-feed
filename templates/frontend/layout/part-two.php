<div class="two-layout-user">
    <div class="tiktok-compact">

        <?php if ($feed_result->user_profile_photo == 1 ){?>
            <div class="tiktok-avatar">
                <?php $profile_img =  $tiktok_profile_info->coversMedium['0'] ?>
                <img  src="<?php echo esc_url( $profile_img ); ?>" alt="<?php echo esc_attr($tiktok_profile_info->uniqueId); ?>" >
            </div>
        <?php }?>
        <?php if ($feed_result->user_name == 1 ){?>
            <div class="tiktok-user_name">
                <h3> <?php _e( $tiktok_profile_info->nickName , 'tiktok-profile-feed' ); ?></h3>
            </div>
        <?php }?>

        <?php if ($feed_result->user_username == 1 ){?>
            <div class="tiktok-user_username">
                <h4>@ <?php _e(  $tiktok_profile_info->uniqueId  , 'tiktok-profile-feed' );?></h4>
            </div>
        <?php }?>
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

        <?php if ($feed_result->user_follow_button == 1 ){
            $uniqueId    = "https://tiktok.com/@".$tiktok_profile_info->uniqueId ?>
            <div class="tiktok-follow-btn">
                <a href="<?php echo esc_url( $uniqueId ); ?>"  target="_blank"><?php if (!empty($tiktok_profile_info->user_button_label)){_e( $tiktok_profile_info->user_button_label , 'tiktok-profile-feed');}else{  _e( "Follow" , 'tiktok-profile-feed');}?></a>
            </div>
        <?php }?>
    </div>
</div>
