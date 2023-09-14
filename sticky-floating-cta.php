<?php
/**
 * Plugin Name: Sticky Floating CTA (Call to Action)
 * Description: Adds a customizable floating Call to Action (CTA) button.
 * Version: 1.0
 * Author: Muhammad Shahid
 */


// Include admin menu registration
include_once(plugin_dir_path(__FILE__) . 'includes/admin-menu.php');
include_once(plugin_dir_path(__FILE__) . 'includes/settings.php');
include_once(plugin_dir_path(__FILE__) . 'function.php');


function enqueue_plugin_admin_tyles() {
    wp_enqueue_style('hms-plugin-styles', plugins_url('includes/assets/css/admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'enqueue_plugin_admin_tyles');






function enqueue_custom_css() {
    $custom_css = generate_custom_css();

    if (!empty($custom_css)) {
        wp_add_inline_style('sticky-floating-cta-style', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_css');

