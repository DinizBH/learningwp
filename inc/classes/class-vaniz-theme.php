<?php 
/**
 * Bootstraps the theme.
 * 
 * @package Vaniz
 */

namespace VANIZ_THEME\Inc;

use VANIZ_THEME\Inc\Traits\Singleton;

class VANIZ_THEME{
    use Singleton;

    protected function __construct(){
        //Load class.
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks(){
         //actions and filters
        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this,'setup_theme']);
    }

    public function setup_theme(){

        add_theme_support('title-tag');
        add_theme_support('custom-logo',[
            'header-text' => ['site-title','site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);

        add_theme_support('backgroung-color',[
            'default-color' => '0000ff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);

        add_theme_support('post-thumbnails');
        add_image_size('featured-thumbnail',353,233,true);
        
        
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('html-5',[
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]);

        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }
}
