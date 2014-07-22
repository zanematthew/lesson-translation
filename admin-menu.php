<?php

function lesson_translatoin_menu(){
    add_submenu_page(
        'options-general.php',
        __('Lesson Translation', 'lesson_translation' ),
        __('Lesson Translation','lesson_translation'),
        'manage_options',
        'lesson-translation',
        'lesson_translation_render' // see form.php
        );
}
add_action('admin_menu', 'lesson_translatoin_menu');