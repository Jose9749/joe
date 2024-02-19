<?php
/*
Plugin Name: Custom Plugin
Description: This is a custom plugin for the personal portfolio website.
Author: Your Name
Version: 1.0
*/

// Enqueue scripts and styles
function custom_plugin_enqueue_scripts() {
    wp_enqueue_style('custom-plugin-style', plugins_url('custom-plugin.css', __FILE__));
    wp_enqueue_script('custom-plugin-script', plugins_url('custom-plugin.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_plugin_enqueue_scripts');

// Add a custom shortcode
function custom_plugin_shortcode($atts) {
    ob_start();
    // You can add custom code here to display portfolio items
    return ob_get_clean();
}
add_shortcode('custom-plugin', 'custom_plugin_shortcode');

// Add a custom widget
class Custom_Plugin_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'custom_plugin_widget',
            __('Custom Plugin Widget', 'text_domain'),
            array('description' => __('A Custom Plugin Widget', 'text_domain'),)
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        // You can add custom code here to display portfolio items
        echo $args['after_widget'];
    }
}
function register_custom_plugin_widget() {
    register_widget('Custom_Plugin_Widget');
}
add_action('widgets_init', 'register_custom_plugin_widget');

?>
