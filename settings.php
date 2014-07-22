<?php

/**
 * Register our settings, sections, and fields for the email admin feature.
 *
 * @link codex.wordpress.org/Function_Reference/add_settings_section
 * @link codex.wordpress.org/Function_Reference/add_settings_field
 *
 */
function lesson_settings_register() {

    register_setting( 'lesson-settings-group', 'lesson_setting_form_field_name', 'lesson_setting_sanitize' );

    add_settings_section( 'lesson-setting', 'Lesson Settings', 'lesson_settings_intro', 'lesson-settings' );

    // Add our settings for the checkbox
    add_settings_field(
        'lesson_setting_form_field_name', // Unique ID use for name="", get_option(), etc.
        null,
        'lesson_setting_form_field_html',
        'lesson-settings', // Page slug
        'lesson-setting'
    );
}
add_action( 'admin_init', 'lesson_settings_register' );


/**
 * Sanitize our value to be saved
 *
 * @return (bool)value The value should always true or false
 */
function lesson_setting_sanitize( $value ){
    return (string)$value;
}