<?php

/**
 * Determine if email admin support is enabled.
 *
 * @return The option from the database
 */
function lesson_setting_form_field_name(){
    return get_option( 'lesson_setting_form_field_name' );
}