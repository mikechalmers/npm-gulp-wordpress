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