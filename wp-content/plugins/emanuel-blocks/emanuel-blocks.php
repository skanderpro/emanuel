<?php
/**
 * Plugin Name: Emanuel Blocks
 * Plugin URI: #
 * Description: This is a plugin add blocks to editor
 * Version: 1.0.0
 * Author: #
 *
 * @package emanuel-blocks
 */

define( 'EMANUEL_BLOCKS_PATH', plugin_dir_path( __FILE__ ) );

require_once EMANUEL_BLOCKS_PATH . '/widgets/index.php';

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/elementor/HeroHome.php' );
	require_once( __DIR__ . '/elementor/SourceData.php' );
	require_once( __DIR__ . '/elementor/Contact.php' );
	require_once( __DIR__ . '/elementor/AddressList.php' );
	require_once( __DIR__ . '/elementor/BoxInfo.php' );
	require_once( __DIR__ . '/elementor/ContactUs.php' );
	require_once( __DIR__ . '/elementor/EstateInfo.php' );
	require_once( __DIR__ . '/elementor/EstateInfoSecond.php' );
	require_once( __DIR__ . '/elementor/BoxInfoStage.php' );
	require_once( __DIR__ . '/elementor/Team.php' );
	require_once( __DIR__ . '/elementor/Career.php' );
	require_once( __DIR__ . '/elementor/LinksBlock.php' );
	require_once( __DIR__ . '/elementor/ServicesBlock.php' );

	$widgets_manager->register( new \HeroHome() );
	$widgets_manager->register( new \LinksBlock() );
	$widgets_manager->register( new \Contact() );
	$widgets_manager->register( new \AddressList() );
	$widgets_manager->register( new \BoxInfo() );
	$widgets_manager->register( new \BoxInfoStage() );
	$widgets_manager->register( new \ContactUs() );
	$widgets_manager->register( new \EstateInfo() );
	$widgets_manager->register( new \EstateInfoSecond() );
	$widgets_manager->register( new \Team() );
	$widgets_manager->register( new \Career() );
	$widgets_manager->register( new \SourceData() );
	$widgets_manager->register( new \ServicesBlock() );
}

add_action( 'elementor/widgets/register', 'register_hello_world_widget' );


add_action( 'init', function () {
	$labels = array(
		'name'                  => _x( 'News', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'New', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'News', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New', 'textdomain' ),
		'new_item'              => __( 'New', 'textdomain' ),
		'edit_item'             => __( 'Edit New', 'textdomain' ),
		'view_item'             => __( 'View New', 'textdomain' ),
		'all_items'             => __( 'All News', 'textdomain' ),
		'search_items'          => __( 'Search News', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent News:', 'textdomain' ),
		'not_found'             => __( 'No news found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No news found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'News Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'News archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'News list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'News list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

	register_post_type( 'news', $args );

	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add Service', 'textdomain' ),
		'add_new_item'          => __( 'Add Service', 'textdomain' ),
		'new_item'              => __( 'Service', 'textdomain' ),
		'edit_item'             => __( 'Edit Service', 'textdomain' ),
		'view_item'             => __( 'View Service', 'textdomain' ),
		'all_items'             => __( 'All Services', 'textdomain' ),
		'search_items'          => __( 'Search Services', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Services:', 'textdomain' ),
		'not_found'             => __( 'No Services found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Services found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Services Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Services archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
	);

	register_post_type( 'services', $args );
} );