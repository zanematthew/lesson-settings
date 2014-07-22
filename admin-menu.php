<?php

function lesson_settings_menu(){
    add_submenu_page(
        'options-general.php',
        __('Lesson Settings', 'lesson_settings' ),
        __('Lesson Settings','lesson_settings'),
        'manage_options',
        'lesson-settings',
        'lesson_settings_render' // see form.php
        );
}
add_action('admin_menu', 'lesson_settings_menu');