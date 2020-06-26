<div id="sbi_admin" class="wrap">
    <div id="header">
        <h1>Instagram Feed</h1>
    </div>
    <input type="hidden" name="sb_instagram_settings_hidden_field" value="Y">
    <input type="hidden" id="sb_instagram_settings_nonce" name="sb_instagram_settings_nonce" value="78cadffe37"><input type="hidden" name="_wp_http_referer" value="/plugin-dev/wp-admin/admin.php?page=sb-instagram-feed&amp;tab=support">
    <h2 class="nav-tab-wrapper">
        <a href="?page=welcome-tiktok" class="nav-tab "><?php _e( '1. Welcome', 'tiktok-profile-feed' ); ?></a>
        <a href="?page=tiktok-all-feeds" class="nav-tab "><?php _e( '2. Feeds', 'tiktok-profile-feed' ); ?></a>
        <a href="?page=tiktok-setting" class="nav-tab nav-tab-active"> <?php _e( '3. Setting', 'tiktok-profile-feed' ); ?></a>
        <a href="?page=tiktok-Support" class="nav-tab "> <?php _e( '4. Support', 'tiktok-profile-feed' ); ?></a>
    </h2>
    <div class="wrap about-wrap full-width-layout">
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
            <table class="widefat form-table">
                <tbody>
                <tr>
                    <td colspan="100%">
                        <table>
                            <tbody>
                            <tr>
                                <th scope="row"><?php _e( 'PlayDelay', 'tiktok-profile-feed' ); ?></th>
                                <td>
                                    <input name="playDelay" type="number"  value="<?php echo get_option("playDelay")?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><?php _e( 'PauseDelay', 'tiktok-profile-feed' ); ?></th>
                                <td>
                                    <input type="hidden" name="action" value="setting_req_form">

                                    <input name="pauseDelay" type="number"  value="<?php echo get_option("pauseDelay")?>">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">
                        <span class="spinner"></span>
                        <button type="submit" class="button button-primary secondary"><?php _e( 'Save', 'tiktok-profile-feed' ); ?></button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>

</div>


