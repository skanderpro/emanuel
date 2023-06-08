<?php
define( 'EMANUEL_ASSETS_URL', get_template_directory_uri() . '/assets/dist/' );
define( 'EMANUEL_PATH', get_template_directory() );

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/redux/index.php';

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'emanuel-normalize', EMANUEL_ASSETS_URL . '/files/css/normalize.css' );
	wp_enqueue_style( 'emanuel-main', EMANUEL_ASSETS_URL . '/css/style.css' );
	wp_enqueue_script( 'emanuel-main-js', EMANUEL_ASSETS_URL . '/js/app.min.js', [], false, true );
	wp_enqueue_script( 'emanuel-popup-js', EMANUEL_ASSETS_URL . '/files/js/openPopup.js', [], false, true );
} );


add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( [
		'primary_menu'  => __( 'Primary Menu', 'emanuel' ),
		'footer_menu_1' => __( 'Footer 1 Column', 'emanuel' ),
		'footer_menu_2' => __( 'Footer 2 Column', 'emanuel' ),
		'footer_menu_3' => __( 'Footer 3 Column', 'emanuel' ),
	] );
}, 0 );


add_action( 'widgets_init', function () {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
} );

//add_action('parse_query', function (\WP_Query $query) {
//	if (!$query->is_main_query()) {
//		return;
//	}
//	global $opt_name;
//
//	$cat = Redux::get_option($opt_name, 'blog_sidebar_category');
//
//	$query->set('category__not_in', [$cat]);
//});