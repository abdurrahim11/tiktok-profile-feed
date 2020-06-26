<div class="default_layout_profile">

    <?php if ($feed_result->user_profile_photo == 1 ){?>
        <div class="default_layout_profile_avatar">
            <?php $profile_img =  $tiktok_profile_info->coversMedium['0'] ?>
            <div class="avatar-wrapper round" style="background-image: url(<?php echo esc_url( $profile_img ); ?>); width: 138px; height: 138px; flex: 0 0 138px;"></div>
        </div>
    <?php }?>
    <div class="default_layout_share-info">
        <?php if ($feed_result->user_name == 1 ){?>
            <h1 class="default_layout_share-title"><?php _e( $tiktok_profile_info->nickName , 'tiktok-profile-feed' ); ?></h1>
        <?php }?>


        <?php if ($feed_result->user_username == 1 ){?>
            <p class="default_layout_share-sub-title">@<?php _e( $tiktok_profile_info->uniqueId , 'tiktok-profile-feed'); ?></p>
        <?php }?>

        <?php if ($feed_result->user_follow_button == 1 ){
            $uniqueId    = "https://tiktok.com/@".$tiktok_profile_info->uniqueId ?>

            <a href="<?php echo esc_url( $uniqueId ); ?>" class="default_layout_follow_btn" target="_blank"><?php if (!empty($tiktok_profile_info->user_button_label)){ _e( $tiktok_profile_info->user_button_label , 'tiktok-profile-feed');}else{  _e( "Follow" , 'tiktok-profile-feed');}?></a>
        <?php }?>
        <?php if ($feed_result->user_following_count == 1 ){?>
        <div class="tiktok-following">
                <span class="number" title="Following"><?php
                    _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->following), 'tiktok-profile-feed');
                    ?>
                </span><span class="unit">Following</span>
            <?php }?>


            <?php if ($feed_result->user_follower_count == 1 ){?>
                <span class="number" title="Followers"><?php
                    _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->fans), 'tiktok-profile-feed');

                    ?></span><span class="unit">Followers</span>
            <?php }?>
            <?php if ($feed_result->user_likes_count == 1 ){?>

                <span class="number" title="Likes"><?php
                    _e(\Inc\Base\NumberFormat::print_number_count($tiktok_profile_info->heart), 'tiktok-profile-feed');
                    ?></span><span class="unit">Likes</span>

            <?php }?>


            <?php if ($feed_result->user_tagline_bio == 1 ){?>
                <p class="default_layout_share-desc"><?php _e($tiktok_profile_info->signature , 'tiktok-profile-feed');?>
                </p>
            <?php }?>
        </div>
    </div>
</div>