<?php
// Footer CTA settings page
function hms_sticky_floating_cta_page() {
    ?>
    <div class="shed-body-wrap">
        <div class="shed-setting-header">
            <div class="shed-content shed-light">
                <h2>HMS Sticky Floating CTA (Call to action) Settings</h2>
            </div>
        </div>
        <div class="shed-content">
            <form method="post" action="options.php">
                     <?php settings_fields('hms-sticky-floating-settings-group'); ?>
                <?php do_settings_sections('hms-sticky-floating-settings-group'); ?>
                <table class="form-table">
                    <tr>
                        <th scope="row">Enable Sticky CTA</th>
                        <td>
                            <input type="checkbox" name="enable_cta" value="1" <?php checked(get_option('enable_cta'), 1); ?>>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Add Number for CTA</th>
                        <td>
                            <input type="tel" id="add_number_for_cta" name="add_number_for_cta" value="<?php echo esc_attr(get_option('add_number_for_cta')); ?>" pattern="\d{10}" oninput="formatPhoneNumber()">
                            <script>
                                function formatPhoneNumber() {
                                    // Get the input field
                                    var phoneNumberInput = document.getElementById('add_number_for_cta');

                                    // Check if the input is empty or too short to format
                                    if (cleanedInput.length < 3) {
                                        phoneNumberInput.value = cleanedInput;
                                        return;
                                    }

                                    // Format the phone number with spaces
                                    var formattedPhoneNumber = cleanedInput.replace(/^(\d{3})(\d{3})(\d{4})$/, '$1 $2 $3');

                                    // Set the formatted value back to the input field
                                    phoneNumberInput.value = formattedPhoneNumber;
                                }
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Icon Color</th>
                        <td>
                            <input type="text" name="icon_color_for_cta" value="<?php echo esc_attr(get_option('icon_color_for_cta')); ?>">
                            <input type="color" name="icon_color_for_cta" value="<?php echo esc_attr(get_option('icon_color_for_cta')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Background Color for CTA</th>
                        <td>
                            <input type="text" name="bg_color_for_cta" value="<?php echo esc_attr(get_option('bg_color_for_cta')); ?>">
                            <input type="color" name="bg_color_for_cta" value="<?php echo esc_attr(get_option('bg_color_for_cta')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Horizontal Position</th>
                        <td>
                            <input type="radio" name="horizontal_position_for_cta" value="left" <?php checked(get_option('horizontal_position_for_cta'), 'left'); ?>> Left
                            <input type="radio" name="horizontal_position_for_cta" value="right" <?php checked(get_option('horizontal_position_for_cta'), 'right'); ?>> Right
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Vertical Position</th>
                        <td>
                            <input type="radio" name="vertical_position_for_cta" value="top" <?php checked(get_option('vertical_position_for_cta'), 'top'); ?>> Top
                            <input type="radio" name="vertical_position_for_cta" value="bottom" <?php checked(get_option('vertical_position_for_cta'), 'bottom'); ?>> Bottom
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
    </div>

    <?php
}


