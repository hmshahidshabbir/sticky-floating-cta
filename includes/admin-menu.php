<?php


function hms_sticky_floating_register_menus() {
    // Add main menu
    add_menu_page(
        'HMS Floating CTA',         // Main menu title
        'HMS Floating CTA',         // Main menu name
        'manage_options',
        'floating-cta',         // Menu slug
        'hms_sticky_floating_cta_page', // Callback function to display the main page
        'dashicons-phone' // Icon for the menu
    );

}
add_action('admin_menu', 'hms_sticky_floating_register_menus');




function hms_sticky_floating_register_settings() {
    register_setting('hms-sticky-floating-settings-group', 'enable_cta');
    register_setting('hms-sticky-floating-settings-group', 'add_number_for_cta');
    register_setting('hms-sticky-floating-settings-group', 'icon_color_for_cta');
    register_setting('hms-sticky-floating-settings-group', 'bg_color_for_cta');
    register_setting('hms-sticky-floating-settings-group', 'vertical_position_for_cta');
    register_setting('hms-sticky-floating-settings-group', 'horizontal_position_for_cta');
    
}
add_action('admin_init', 'hms_sticky_floating_register_settings');