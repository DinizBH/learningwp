<?php 
/**
 * Register Menus
 * 
 * @package Vaniz
 */

namespace VANIZ_THEME\Inc;

use VANIZ_THEME\Inc\Traits\Singleton;

class Menus{
    use Singleton;

    protected function __construct(){//load class
        $this->setup_hooks();
    }
    protected function setup_hooks(){ //actions and filters
        /**
         * Actions.
         */
        add_action('init    ', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus( [
            'vaniz-header-menu' =>esc_html__('Header Menu', 'vaniz'),
            'vaniz-footer-menu' =>esc_html__('Footer Menu', 'vaniz'),
        ] );
    }
}