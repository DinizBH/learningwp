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

    protected function __construct(){//load class
        Assets::get_instance();

        $this->setup_hooks();
    }
    protected function setup_hooks(){ //actions and filters
        /**
         * Actions.
         */
    }
}
