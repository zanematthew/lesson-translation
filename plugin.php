<?php

/**
 * Plugin Name: Lesson Translation
 * Plugin URI: http://zanematthew.com/
 * Description: This is a sample plugin showing how to translate a plugin
 * Version: 1.0
 * Author: Zane M. Kolnik
 * Author URI: http://zanematthew.com/
 * License:
 */

require_once plugin_dir_path( __FILE__ ) . 'admin-menu.php';
require_once plugin_dir_path( __FILE__ ) . 'render.php';


/**
 * Plugin initial setup
 */
function lesson_translation(){
    // Set up localization
    load_plugin_textdomain( 'lesson_translation', false, plugin_basename(dirname(__FILE__)) . '/languages' );
}
add_action( 'init', 'lesson_translation' );



function change_locale(){
    return 'fr_FR';
}
add_filter('locale', 'change_locale');