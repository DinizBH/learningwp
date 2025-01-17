<?php 
/**
 * Theme Functions.
 * 
 * @package Vaniz
 */

if(!defined('VANIZ_DIR_PATH')){
  define('VANIZ_DIR_PATH',untrailingslashit(get_template_directory()));
}

if(!defined('VANIZ_DIR_URI')){
  define('VANIZ_DIR_URI',untrailingslashit(get_template_directory_uri()));
}

require_once VANIZ_DIR_PATH . '/inc/helpers/autoloader.php';
require_once VANIZ_DIR_PATH . '/inc/helpers/template-tags.php';

function vaniz_get_theme_instance(){
  \VANIZ_THEME\Inc\VANIZ_THEME::get_instance();
}
vaniz_get_theme_instance();

function vaniz_enqueue_scripts(){
  
  
  } 

add_action('wp_enqueue_scripts','vaniz_enqueue_scripts');
?>