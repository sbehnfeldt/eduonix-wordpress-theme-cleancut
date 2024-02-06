<?php
require_once 'wp_bootstrap_navwalker.php';

// Theme Support
function cleancut_theme_support()
{
    register_nav_menus([
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ]);
}

add_action('after_setup_theme', 'cleancut_theme_support');

