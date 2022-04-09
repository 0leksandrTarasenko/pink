
<?php

add_action('wp_print_styles', 'style_theme');
function style_theme()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello.css');
}

add_action('wp_footer', 'scripts_theme');
function scripts_theme()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-scripts', get_template_directory_uri() . '/js/my-scripts.js');
}


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}

add_theme_support('menus');
function theme_register_nav_menu()
{
    register_nav_menu('header', 'header_menu');

}


function my_theme_styles() {
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

add_theme_support( 'post-thumbnails' );


