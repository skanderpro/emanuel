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
		'name'                  => _x( 'Apartments', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Apartment', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Apartments', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Apartments', 'Add Apartment on Toolbar', 'textdomain' ),
		'add_apartment'               => __( 'Add Apartment', 'textdomain' ),
		'add_apartment_item'          => __( 'Add Apartment', 'textdomain' ),
		'apartment_item'              => __( 'Apartment', 'textdomain' ),
		'edit_item'             => __( 'Edit Apartment', 'textdomain' ),
		'view_item'             => __( 'View Apartment', 'textdomain' ),
		'all_items'             => __( 'All Apartments', 'textdomain' ),
		'search_items'          => __( 'Search Apartments', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Apartments:', 'textdomain' ),
		'not_found'             => __( 'No apartments found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No apartments found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Apartments Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Apartments archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Apartments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Apartments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'apartments' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt' ),
	);

	register_post_type( 'apartments', $args );

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
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
	);

	register_post_type( 'services', $args );

	$labels = array(
		'name'              => _x( 'Properties', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Property', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Properties', 'textdomain' ),
		'all_items'         => __( 'All Properties', 'textdomain' ),
		'parent_item'       => __( 'Parent Property', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Property:', 'textdomain' ),
		'edit_item'         => __( 'Edit Property', 'textdomain' ),
		'update_item'       => __( 'Update Property', 'textdomain' ),
		'add_new_item'      => __( 'Add New Property', 'textdomain' ),
		'new_item_name'     => __( 'New Property Name', 'textdomain' ),
		'menu_name'         => __( 'Property', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'apartments_props' ),
	);

	register_taxonomy( 'apartments_props', array( 'apartments' ), $args );

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'apartments_cats' ),
	);

	register_taxonomy( 'apartments_cats', array( 'apartments' ), $args );
} );

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$prefix = '';

	$images = get_posts([
		'post_type' => 'attachment',
		'posts_per_page' => -1,
	]);
	$imagesOpts = [];
	foreach ( $images as $image ) {
		$imagesOpts[$image->guid] = get_the_title($image);
	}

	$meta_boxes[] = [
		'title'      => esc_html__( 'Apartment fields', 'online-generator' ),
		'id'         => 'apartment_fields',
		'post_types' => ['apartments'],
		'context'    => 'normal',
		'fields'     => [
			[
				'type' => 'text',
				'name' => esc_html__( 'Address', 'online-generator' ),
				'id'   => $prefix . 'address',
			],
			[
				'type' => 'number',
				'name' => esc_html__( 'Rooms', 'online-generator' ),
				'id'   => $prefix . 'rooms',
				'min'  => 1,
				'max'  => 20,
				'step' => 1,
			],
			[
				'type' => 'text',
				'name' => esc_html__( 'Living space', 'online-generator' ),
				'id'   => $prefix . 'living_space',
			],
			[
				'type' => 'number',
				'name' => esc_html__( 'Floor', 'online-generator' ),
				'id'   => $prefix . 'floor',
				'min'  => 1,
				'max'  => 200,
				'step' => 1,
			],
			[
				'type'     => 'select_advanced',
				'name'     => esc_html__( 'Images', 'online-generator' ),
				'id'       => $prefix . 'images',
				'options'  => $imagesOpts,
				'multiple' => true,
			],
			[
				'type' => 'text',
				'name' => esc_html__( 'Contact for viewing', 'online-generator' ),
				'id'   => $prefix . 'contact',
			],
		],
	];

	return $meta_boxes;
});
