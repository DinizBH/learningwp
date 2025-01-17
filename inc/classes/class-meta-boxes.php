<?php

/**
 * Register Meta Boxes
 * 
 * @package Vaniz
 */

namespace VANIZ_THEME\Inc;

use VANIZ_THEME\Inc\Traits\Singleton;

class Meta_boxes
{
    use Singleton;

    protected function __construct()
    { //load class
        $this->setup_hooks();
    }
    protected function setup_hooks()
    { //actions and filters
        /**
         * Actions.
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box($post)
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title', //Unique ID
                __('Hide page title', 'vaniz'), //Box Title
                [$this, 'custom_meta_box_html'], //Content Callback, must
                $screen,
                'side'
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);
?>
        <label for="vaniz_field"><?php esc_html_e('Hide the page title', 'vaniz') ?></label>
        <select name="vaniz_field" id="vaniz-field" class="postbox">
            <option value=""><?php esc_html_e('Select', 'vaniz') ?></option>
            <option value="yes"><?php selected($value, 'yes'); ?><?php esc_html_e('Yes', 'vaniz') ?></option>
            <option value="no"><?php selected($value, 'no'); ?><?php esc_html_e('No', 'vaniz') ?></option>
        </select>
<?php
    }
}
