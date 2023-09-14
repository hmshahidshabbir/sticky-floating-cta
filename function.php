<?php
function add_footer_cta() {
    $enable_cta = get_option('enable_cta');

    if ($enable_cta) {
        // Get the URL to the plugin directory
        $plugin_url = plugins_url('../', __FILE__);

        // Construct the URL to the modified SVG file within the plugin directory
        $svg_url = $plugin_url . 'assets/images/phone.svg';
        
        // echo '<a style="position:fixed; display:block; padding:20px; ' . esc_attr(get_option('vertical_position_for_cta')) . ':0px; ' . esc_attr(get_option('horizontal_position_for_cta')) . ':0px; background-color:' . esc_attr(get_option('bg_color_for_cta')) . ';" href="tel:' . esc_attr(get_option('add_number_for_cta')) . '"><span style="color:' . esc_attr(get_option('icon_color_for_cta')) . ';" class="cta-phone-icon"><i class="fa fa-phone" aria-hidden="true"></i></a>';

echo '<a class="sticky-cta" href="tel:' . esc_attr(get_option('add_number_for_cta')) . '"><span style="color:' . esc_attr(get_option('icon_color_for_cta')) . ';" class="cta-phone-icon"><i class="fa fa-phone" aria-hidden="true"></i></a>';

    }
}


add_action('wp_footer', 'add_footer_cta');

function add_footer_cta_assets() {
    $enable_cta = get_option('enable_cta');

    if ($enable_cta) {

        echo'<script src="https://kit.fontawesome.com/712b6fc03c.js" crossorigin="anonymous"></script>';
    }
}

add_action('wp_footer', 'add_footer_cta_assets');



function generate_custom_css() {
    $css = '';

    // Check if the CTA is enabled
    $enable_cta = get_option('enable_cta');

    if ($enable_cta) {
        // Add CSS rules based on settings
        $css .= '.sticky-cta {';
        $css .= 'position: fixed;';
        $css .= 'bottom: 20px;';
        $css .= 'right: 20px;';
        $css .= 'background-color: ' . esc_attr(get_option('bg_color_for_cta')) . ';';
        $css .= 'color: ' . esc_attr(get_option('icon_color_for_cta')) . ';';
        // Add more CSS rules as needed
        $css .= '}';
    }

    return $css;
}