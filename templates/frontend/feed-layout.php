<div class="feeds-area">
    <div class="row">
        <?php
        $columns = 12 / $feed_result->feeds_columns_count;
        $count = 0;

        foreach ($tiktok_feeds->itemListData as  $row){
            $count++;
            ?>

            <div class="col-<?php echo  $columns?> rowsingle">
                <div class="video-section">
                    <video controls data-play="hover" <?php if ($feed_result->video_sound == 1){}else{echo "muted";}?> >
                        <source src="<?php echo esc_url( $row->itemInfos->video->urls['0'] ); ?>" type="video/mp4">
                    </video>
                    <?php
                    if ($feed_result->feeds_views_count == 1){
                        ?>
                        <div class="video-view-info">
                            <div class="video-play-count">
                                <?php    $video_url   = "https://www.tiktok.com/@".$row->authorInfos->nickName."/video/".$row->itemInfos->id ?>
                                <a href="<?php echo esc_url( $video_url ); ?>" class="video-link" target="_blank"><img src="<?php echo esc_url( $this->plugin_url."assets/img/video-icon.svg"); ?>" alt="<?php echo esc_attr( $row->authorInfos->nickName ); ?>" ></a>
                                <span><?php  _e( \Inc\Base\NumberFormat::print_number_count($row->itemInfos->playCount), 'tiktok-profile-feed' );  ?></span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="video-info">
                    <?php if ($feed_result->feeds_text == 1){
                        ?>
                        <p class="video-info-text"><?php  _e(  $row->itemInfos->text , 'tiktok-profile-feed' );?></p>
                        <?php
                    }?>

                    <div class="time-uploade-commernt">
                        <?php if ($feed_result->feeds_publish_time == 1){
                            ?>
                            <p>  <?php  _e(  \Inc\Base\TimeAgo::timeAgo($row->itemInfos->createTime), 'tiktok-profile-feed' ); ?></p>
                            <?php
                        }?>
                        <?php if ($feed_result->feeds_comments_count == 1){
                            ?>
                            <span class="comments"><strong><?php   _e( $row->itemInfos->commentCount, 'tiktok-profile-feed' );?></strong> comments</span>
                        <?php }?>
                    </div>
                    <?php  if ($feed_result->feeds_share_button == 1){?>
                        <div class="sharecontainer-btn">
                            <ul>
                                <?php
                                $facebook_url =   "https://www.facebook.com/sharer/sharer.php?u= https://www.tiktok.com/@".$row->authorInfos->nickName."/video/". $row->itemInfos->id;
                                ?>
                                <li><a href="<?php echo esc_url( $facebook_url ); ?>"  title="<?php echo esc_attr( 'Share on Facebook' ); ?>"  target="_blank"><img src="<?php echo esc_url( $this->plugin_url.'assets/img/social/facebook.svg'); ?>" alt="<?php echo esc_attr( 'facebook share' ); ?>" ></a></li>
                                <?php
                                $twitter_url = "https://twitter.com/intent/tweet?url= https://www.tiktok.com/@".$row->authorInfos->nickName."/video/".$row->itemInfos->id."&text=".$row->itemInfos->text."&via=".$row->authorInfos->nickName; ;
                                ?>
                                <li>  <a target="_blank" class="share-button share-twitter" href="<?php echo esc_url( $twitter_url ); ?>" title=" <?php echo esc_attr( 'Tweet this' ); ?>"><img src="<?php echo esc_url( $this->plugin_url.'assets/img/social/twitter.svg'); ?>" alt="<?php echo esc_attr( 'twitter share' ); ?>"></a></li>
                                <?php
                                $pinterest_url = "//pinterest.com/pin/create/link/?url= https://www.tiktok.com/@".$row->authorInfos->nickName."/video/". $row->itemInfos->id."&amp;description=".$row->itemInfos->text; ?>
                                <li><a href="<?php echo esc_url( $pinterest_url ); ?>" title="<?php echo esc_attr( 'Share on Pinterest ' ); ?>" target="_blank"><img src="<?php echo esc_url( $this->plugin_url.'assets/img/social/pinterest.svg'); ?>"  alt="<?php echo esc_attr( 'pinterest share' ); ?>"></a></li>
                                <?php
                                $googleplus = "https://plus.google.com/share?url= https://www.tiktok.com/@".$row->authorInfos->nickName."/video/".$row->itemInfos->id;
                                ?>
                                <li><a target="_blank" class="share-button share-googleplus" href="<?php echo esc_url( $googleplus ); ?>"  title="<?php echo esc_attr( 'Share on Google+' ); ?>"><img src="<?php echo esc_url( $this->plugin_url.'assets/img/social/google-plus.svg'); ?>" alt="<?php echo esc_attr( 'google plus share' ); ?>"></a></li>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php

            if ($count == $feed_result->feeds_limit_count){
                break;
            }
        }

        ?>

    </div>
</div>
