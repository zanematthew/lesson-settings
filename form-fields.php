<?php

function lesson_settings_intro(){ ?>
    <?php _e( 'My instructions', 'lesson_settings' ); ?>
<?php }


/**
 * Display the form field.
 */
function lesson_setting_form_field_html(){ ?>
    <p><label><?php _e( 'My Form Field', 'lesson_settings' ); ?></label><input name="lesson_setting_form_field_name" id="" type="text" class="code" value="<?php echo lesson_setting_form_field_name(); ?>" /></p>
<?php }