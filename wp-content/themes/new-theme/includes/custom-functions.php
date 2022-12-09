<?php
/**
 * This is file for all of your custom functions for the project
 */

/**
 * Enables the Link Manager that existed in WordPress until version 3.5.
 */
// add_filter('pre_option_link_manager_enabled', '__return_true');

//
/* custom post types */
//
// function create_gateway_post_type() {
//   register_post_type( 'gateway',
//       array(
//           'labels' => array(
//               'name' => __( 'Gateways' ),
//               'singular_name' => __( 'Gateway' )
//           ),
//           'public' => false,
//           'show_ui' => true,
//           'menu_position' => 20,
//           'has_archive' => true,
//           'rewrite' => array('slug' => 'gateway'),
//           'show_in_rest' => true,
//           'menu_icon' => 'dashicons-superhero-alt',
//       )
//   );
// }
// add_action( 'init', 'create_gateway_post_type' );
/**
 * Disable Gutenberg editor for Gateway post type
 */
// function disable_gutenberg( $current_status, $post_type ) {

//     // Disabled post types
//     $disabled_post_types = array( 'gateway' );

//     // Change $can_edit to false for any post types in the disabled post types array
//     if ( in_array( $post_type, $disabled_post_types, true ) ) {
//         $current_status = false;
//     }

//     return $current_status;
// }
// add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg', 10, 2 );