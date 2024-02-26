<?php
// Add theme support for Portfolio post type
function custom_theme_setup() {
    add_theme_support('post-formats', array('portfolio'));
}
add_action('after_setup_theme', 'custom_theme_setup');

// Enqueue styles and scripts
function custom_theme_scripts() {
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script('custom-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Register custom navigation menu
function register_custom_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'custom-theme'),
            'footer-menu' => __('Footer Menu', 'custom-theme')
        )
    );
}
add_action('init', 'register_custom_theme_menus');

// Register sidebar
function custom_theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'custom-theme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'custom-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'custom_theme_widgets_init');

// Add custom image size for portfolio items
add_image_size('portfolio-thumb', 740, 446, true);

// Register Portfolio post type
function custom_theme_portfolio_post_type() {
    $labels = array(
        'name' => __('Portfolio', 'custom-theme'),
        'singular_name' => __('Portfolio Item', 'custom-theme'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
        'taxonomies' => array('category', 'post_tag'),
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'custom_theme_portfolio_post_type');
?>