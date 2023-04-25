<?php
define('EMANUEL_ASSETS_URL', get_template_directory_uri() . '/assets/dist/');
define('EMANUEL_PATH', get_template_directory());

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/redux/index.php';

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('emanuel-normalize', EMANUEL_ASSETS_URL . '/files/css/normalize.css');
    wp_enqueue_style('emanuel-main', EMANUEL_ASSETS_URL . '/css/style.css');
    wp_enqueue_script('emanuel-main-js', EMANUEL_ASSETS_URL . '/js/app.min.js', [], false, true);
});


add_action( 'after_setup_theme', function () {
    register_nav_menus( [
        'primary_menu' => __( 'Primary Menu', 'emanuel' ),
        'footer_menu_1'  => __( 'Footer 1 Column', 'emanuel' ),
        'footer_menu_2'  => __( 'Footer 2 Column', 'emanuel' ),
        'footer_menu_3'  => __( 'Footer 3 Column', 'emanuel' ),
    ]);
}, 0 );