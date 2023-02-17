<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

// Load classes
foreach (glob(dirname(__FILE__) . '/inc/classes/*.php') as $class) {
    require_once $class;
}

// Load blocks
foreach (glob(dirname(__FILE__) . '/blocks/*/*.json') as $block) {
    register_block_type($block);
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
    wp_enqueue_style('tesiup-main', get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('tesiup-vendors', get_stylesheet_directory_uri() . '/assets/js/vendors.js', '', false, true);
    wp_enqueue_script('tesiup', get_stylesheet_directory_uri() . '/assets/js/scripts.js', 'tesiup-vendors', false, true);
}

add_action('wp_enqueue_scripts', 'tesiup_enqueue_style');

function tesiup_admin_enqueue_style()
{
    wp_register_style('tesiup-main', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

add_action('admin_enqueue_scripts', 'tesiup_admin_enqueue_style');