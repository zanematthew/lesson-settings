<?php

function lesson_settings_render(){ ?>
    <form method="POST" action="options.php">
    <?php
    settings_fields( 'lesson-settings-group' ); //pass slug name of page, also referred
    do_settings_sections( 'lesson-settings' );  //pass slug name of page
    submit_button();
    ?>
    </form>

<?php }