<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

// Load classes
foreach (glob(dirname(__FILE__) . '/inc/classes/*.php') as $class) {
    require_once $class;
}

// Load theme page settings
require_once 'inc/options-page.php';

// Register nav menus
function tesiup_register_nav_menus()
{
    register_nav_menus([
        'top_header_menu' => 'Top header menu',
        'header_menu' => 'Header menu',
        'mobile_header_menu' => 'Mobile header menu',
    ]);
}

add_action('after_setup_theme', 'tesiup_register_nav_menus');

// Load styles
function tesiup_enqueue_style()
{
    wp_enqueue_style('tesiup', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tesiup_enqueue_style');