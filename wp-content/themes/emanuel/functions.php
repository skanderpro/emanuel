<?php
define('EMANUEL_ASSETS_URL', get_template_directory_uri() . '/assets/dist/');

require_once __DIR__ . '/vendor/autoload.php';

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('emanuel-normalize', get_template_directory_uri() . '/assets/dist/files/css/normalize.css');
    wp_enqueue_style('emanuel-main', get_template_directory_uri() . '/assets/dist/css/style.css');
    wp_enqueue_script('emanuel-main-js', get_template_directory_uri() . '/assets/dist/js/app.min.js', [], false, true);
});


add_action( 'after_setup_theme', function () {
    register_nav_menus( [
        'primary_menu' => __( 'Primary Menu', 'emanuel' ),
        'footer_menu_1'  => __( 'Footer 1 Column', 'emanuel' ),
        'footer_menu_2'  => __( 'Footer 2 Column', 'emanuel' ),
        'footer_menu_3'  => __( 'Footer 3 Column', 'emanuel' ),
    ]);
}, 0 );