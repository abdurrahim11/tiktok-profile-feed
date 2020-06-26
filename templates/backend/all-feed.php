<div id="wpbody-content">
    <div id="sbi_admin" class="wrap">

        <div id="header">
            <h1><?php _e( 'Tiktok Feed', 'tiktok-profile-feed' ); ?></h1>
        </div>
        <h2 class="nav-tab-wrapper">
            <a href="?page=welcome-tiktok" class="nav-tab "><?php _e( '1. Welcome', 'tiktok-profile-feed' ); ?></a>
            <a href="?page=tiktok-all-feeds" class="nav-tab nav-tab-active"><?php _e( '2. Feeds', 'tiktok-profile-feed' ); ?></a>
            <a href="?page=tiktok-setting" class="nav-tab "> <?php _e( '3. Setting', 'tiktok-profile-feed' ); ?></a>
            <a href="?page=tiktok-Support" class="nav-tab "> <?php _e( '4. Support', 'tiktok-profile-feed' ); ?></a>
        </h2>

        <div class="wrap about-wrap full-width-layout">
            <a href="?page=tiktok-add-feed" class="page-title-action"><?php _e( 'Add New ', 'tiktok-profile-feed' ); ?></a>
            <table  class="form-table widefat striped tiktok-feeds-list">
                <thead>
                <tr>
                    <th> <?php _e( 'Image', 'tiktok-profile-feed' ); ?></th>
                    <th> <?php _e( 'Username', 'tiktok-profile-feed' ); ?></th>
                    <th> <?php _e( 'Fans', 'tiktok-profile-feed' ); ?></th>
                    <th><?php _e( 'Layout Feed ', 'tiktok-profile-feed' ); ?></th>
                    <th><?php _e( 'Shortcode ', 'tiktok-profile-feed' ); ?></th>
                    <th><?php _e( 'Actions ', 'tiktok-profile-feed' ); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php

                use Inc\Base\Api;

                foreach ($results as $result){
                    $data =  Api::Profile($result->user_tiktok_username);
                    ?>
                    <tr class="" data-feed_id="0" data-feed_position="1">
                        <td width="1%">
                            <img class="qlttf-avatar" src="<?php echo  $data->covers['0']?>">
                        </td>
                        <td width="1%">
                            <?php _e( $result->user_tiktok_username, 'tiktok-profile-feed' );  ?>
                        </td>
                        <td width="1%">
                            <?php _e( $data->fans, 'tiktok-profile-feed' );  ?>
                        </td>
                        <td>
                            <?php
                            if ($result->user_layout_feed  == 1){
                                _e("Tiktok Video Feeds", 'tiktok-profile-feed');
                            }elseif ($result->user_layout_feed  == 2){
                                _e("Tiktok Profile Box", 'tiktok-profile-feed');
                            }elseif ($result->user_layout_feed  == 3){
                                _e("Tiktok Video Feed & Profile Box", 'tiktok-profile-feed');
                            }
                              ?>
                        </td>
                        <td>
                            <input id="0-feed-shortcode" type="text" value="[tiktok-feed-profile id=&quot;<?php echo $result->id?>&quot;]" readonly="">
                        </td>
                        <td>
                            <!--<a href="javascript:;" class="qlttf_edit_feed button button-primary" title="Edit feed">Edit</a> -->
                            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" >
                                <input hidden name="feed_id" type="text" value="<?php echo $result->id?>">
                                <input type="hidden" name="action" value="feed_delete_form">
                                <input value="Delete" type="submit" class="qlttf_edit_feed button button-link-delete">
                            </form>
                            <span class="spinner"></span>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>

    </div> <!-- end #sbi_admin -->


    <div class="clear"></div></div>