<?php
if (!defined('ABSPATH')) exit;
function bricks_child_enqueue_assets() {
    $parent_style = 'bricks-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bricks-child-style', get_stylesheet_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('bricks-child-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'bricks_child_enqueue_assets', 20);
