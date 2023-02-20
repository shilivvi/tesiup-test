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
    wp_enqueue_style('tesiup-forminator', get_stylesheet_directory_uri() . '/assets/css/forminator.css');

    wp_enqueue_script('tesiup-vendors', get_stylesheet_directory_uri() . '/assets/js/vendors.js', '', false, true);
    wp_enqueue_script('tesiup', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['tesiup-vendors'], false, true);

    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/lib/popper.min.js', '', false, true);
    wp_enqueue_script('tippy', get_stylesheet_directory_uri() . '/assets/js/lib/tippy-bundle.umd.min.js', ['popper'], false, true);
    wp_enqueue_script('tooltips', get_stylesheet_directory_uri() . '/assets/js/tooltips.js', ['popper', 'tippy'], false, true);

    wp_enqueue_script('forminator-select2', forminator_plugin_url() . 'assets/forminator-ui/js/select2.full.min.js', ['jquery'], FORMINATOR_VERSION, true);
}

add_action('wp_enqueue_scripts', 'tesiup_enqueue_style');

function tesiup_admin_enqueue_style()
{
    wp_register_style('tesiup-main', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

add_action('admin_enqueue_scripts', 'tesiup_admin_enqueue_style');

function add_none_class_for_forminator_form_design($design_class, $form_design)
{
    if ($form_design = 'none') {
        $design_class = 'forminator-design--' . $form_design;
    }

    return $design_class;
}

add_filter('forminator_render_form_design_class', 'add_none_class_for_forminator_form_design', 10, 2);

function tesiup_wp_nav_menu_objects($items, $args)
{
    foreach ($items as &$item) {

        $icon = get_field('icon', $item);

        if ($icon) {
            $item->title .= ' <i class="' . $icon . '" aria-hidden="true"></i>';
        }
    }

    return $items;
}

add_filter('wp_nav_menu_objects', 'tesiup_wp_nav_menu_objects', 10, 2);