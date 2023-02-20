<?php

if( function_exists('acf_add_options_page') ) {
    $parent = acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer settings',
        'menu_title'  => 'Footer',
        'parent_slug' => $parent['menu_slug'],
    ));
}
