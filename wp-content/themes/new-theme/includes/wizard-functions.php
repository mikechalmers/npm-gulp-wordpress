<?php
/**
 * Website Wizard Theme Functions
 */

//
/* website wizard admin dashboard widget */
//
add_action('wp_dashboard_setup', 'ww_dashboard_widget');
function ww_dashboard_widget() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('ww_help_widget', 'Website Wizard Theme Support', 'ww_dashboard_help');
}
function ww_dashboard_help() {
    echo '
    <p>😃 Welcome to your custom theme</p>
    <p>❓ Need help? Contact Mike the developer <a href="mailto:mikechalmers@gmail.com">here</a>.</p>
    <div style="display: flex; justify-content: flex-end;">
      <img width="200px" src="https://websitewizard.net/assets/sticker1b-min.png" />
    </div>
    ';
}

//
/* remove the unnecessary dashboard meta boxes */
//
function remove_dashboard_meta() {
remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );


//
/* disable WordPress Admin Bar for all users */
//
add_filter( 'show_admin_bar', '__return_false' );
//
/* disable menu items in admin */
//
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php'); // remove comments
    remove_menu_page('edit.php'); // remove posts
});

//
/* disable  admin email verification at login */
//
add_filter( 'admin_email_check_interval', '__return_false' );