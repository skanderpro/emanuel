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
define( 'EMANUEL_BLOCKS_URL', plugin_dir_url( __FILE__ ) );

require_once EMANUEL_BLOCKS_PATH . '/widgets/index.php';
require_once EMANUEL_BLOCKS_PATH . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_media();
	wp_enqueue_script('manuel-blocks-main', EMANUEL_BLOCKS_URL . '/assets/js/main.js');
});

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
	require_once( __DIR__ . '/elementor/TitleText.php' );
	require_once( __DIR__ . '/elementor/Formular.php' );
	require_once( __DIR__ . '/elementor/Vacancies.php' );
	require_once( __DIR__ . '/elementor/CareerDescription.php' );
	require_once( __DIR__ . '/elementor/HeroHaus.php' );
	require_once( __DIR__ . '/elementor/InfoPanels.php' );

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
	$widgets_manager->register( new \TitleText() );
	$widgets_manager->register( new \Formular() );
	$widgets_manager->register( new \Vacancies() );
	$widgets_manager->register( new \HeroHaus() );
	$widgets_manager->register( new \InfoPanels() );
//	$widgets_manager->register( new \CareerDescription() );
}

add_action( 'elementor/widgets/register', 'register_hello_world_widget' );

add_action('init', function () {
	require_once __DIR__ . '/Metabox/Fields/RWMB_Media_Field.php';
});

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
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
	);

	register_post_type( 'apartments', $args );

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

	$labels = array(
		'name'                  => _x( 'Vacancies', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Vacancy', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Vacancies', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Vacancies', 'Add Vacancy on Toolbar', 'textdomain' ),
		'add_vacancy'               => __( 'Add Vacancy', 'textdomain' ),
		'add_vacancy_item'          => __( 'Add Vacancy', 'textdomain' ),
		'vacancy_item'              => __( 'Vacancy', 'textdomain' ),
		'edit_item'             => __( 'Edit Vacancy', 'textdomain' ),
		'view_item'             => __( 'View Vacancy', 'textdomain' ),
		'all_items'             => __( 'All Vacancies', 'textdomain' ),
		'search_items'          => __( 'Search Vacancies', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Vacancies:', 'textdomain' ),
		'not_found'             => __( 'No vacancies found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No vacancies found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Vacancies Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Vacancies archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Vacancies list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Vacancies list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor',),
	);

	register_post_type( 'vacancies', $args );

    $labels = array(
        'name'                  => _x( 'Häuser', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Haus', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Häuser', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Haus', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New Haus', 'textdomain' ),
        'add_new_item'          => __( 'Add New Haus', 'textdomain' ),
        'new_item'              => __( 'New Haus', 'textdomain' ),
        'edit_item'             => __( 'Edit Haus', 'textdomain' ),
        'view_item'             => __( 'View Haus', 'textdomain' ),
        'all_items'             => __( 'All Häuser', 'textdomain' ),
        'search_items'          => __( 'Search Häuser', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Häuser:', 'textdomain' ),
        'not_found'             => __( 'No Häuser found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Häuser found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Haus Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Häuser archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Haus', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Haus', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Häuser list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Häuser list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Häuser list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'haus' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'haus', $args );

    $labels = array(
        'name'              => _x( 'Features', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Feature', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Features', 'textdomain' ),
        'all_items'         => __( 'All Features', 'textdomain' ),
        'parent_item'       => __( 'Parent Feature', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Feature:', 'textdomain' ),
        'edit_item'         => __( 'Edit Feature', 'textdomain' ),
        'update_item'       => __( 'Update Feature', 'textdomain' ),
        'add_new_item'      => __( 'Add New Feature', 'textdomain' ),
        'new_item_name'     => __( 'New Feature Name', 'textdomain' ),
        'menu_name'         => __( 'Feature', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'haus_features' ),
    );

    register_taxonomy( 'haus_features', array( 'haus' ), $args );

    $labels = array(
        'name'              => _x( 'Highlights', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Highlight', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Highlights', 'textdomain' ),
        'all_items'         => __( 'All Highlights', 'textdomain' ),
        'parent_item'       => __( 'Parent Highlight', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Highlight:', 'textdomain' ),
        'edit_item'         => __( 'Edit Highlight', 'textdomain' ),
        'update_item'       => __( 'Update Highlight', 'textdomain' ),
        'add_new_item'      => __( 'Add New Highlight', 'textdomain' ),
        'new_item_name'     => __( 'New Highlight Name', 'textdomain' ),
        'menu_name'         => __( 'Highlight', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'haus_highlight' ),
    );

    register_taxonomy( 'haus_highlight', array( 'haus' ), $args );

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
				'type' => 'text',
				'name' => esc_html__( 'Availability', 'online-generator' ),
				'id'   => $prefix . 'availability',
			],
			[
				'type' => 'text',
				'name' => esc_html__( 'Price', 'online-generator' ),
				'id'   => $prefix . 'price',
			],
			[
				'type' => 'number',
				'name' => esc_html__( 'Rooms', 'online-generator' ),
				'id'   => $prefix . 'rooms',
				'min'  => 1,
				'max'  => 20,
				'step' => 0.5,
			],
			[
				'type' => 'text',
				'name' => esc_html__( 'Living space', 'online-generator' ),
				'id'   => $prefix . 'living_space',
			],
			[
				'type' => 'text',
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
			[
				'type' => 'media',
				'name' => esc_html__( 'Plan', 'online-generator' ),
				'id'   => $prefix . 'plan',
			],
            [
                'type' => 'select_advanced',
                'name' => esc_html__( 'Status', 'online-generator' ),
                'id'   => $prefix . 'status',
                'options' => [
                    'available' => esc_html__( 'Available', 'online-generator' ),
                    'reserved' => esc_html__( 'Reserved', 'online-generator' ),
                ],
            ],
		],
	];

	$meta_boxes[] = [
		'title'      => esc_html__( 'Vacancies fields', 'online-generator' ),
		'id'         => 'vacancies_fields',
		'post_types' => ['vacancies'],
		'context'    => 'normal',
		'fields'     => [
			[
				'type' => 'text',
				'name' => esc_html__( 'Url', 'online-generator' ),
				'id'   => $prefix . 'url',
			],
		],
	];

    $meta_boxes[] = [
        'title'      => esc_html__( 'Haus fields', 'online-generator' ),
        'id'         => 'haus_fields',
        'post_types' => ['haus'],
        'context'    => 'normal',
        'fields'     => [

            [
                'type' => 'number',
                'name' => esc_html__( 'Flats Count', 'online-generator' ),
                'id'   => $prefix . 'flats_count',
            ],
            [
                'type' => 'date',
                'name' => esc_html__( 'Available From', 'online-generator' ),
                'id'   => $prefix . 'available_from',
            ],
            [
                'type' => 'select_advanced',
                'name' => esc_html__( 'Standart', 'online-generator' ),
                'id'   => $prefix . 'standart',
                'options' => [
                    'common' => esc_html__( 'Common', 'online-generator' ),
                    'lux' => esc_html__( 'hochwertiger Innenausbau', 'online-generator' ),
                ],
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Address', 'online-generator' ),
                'id'   => $prefix . 'address',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Address Description', 'online-generator' ),
                'id'   => $prefix . 'address_description',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Address Image', 'online-generator' ),
                'id'   => $prefix . 'address_image',
                'js_options' => [],
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Highlight Image', 'online-generator' ),
                'id'   => $prefix . 'highlight_image',
                'js_options' => [],
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Subtitle', 'online-generator' ),
                'id'   => $prefix . 'subtitle',
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Area', 'online-generator' ),
                'id'   => $prefix . 'area',
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Rooms Count', 'online-generator' ),
                'id'   => $prefix . 'rooms_count',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Price', 'online-generator' ),
                'id'   => $prefix . 'price',
            ],
            [
                'type' => 'select_advanced',
                'name' => esc_html__( 'Status', 'online-generator' ),
                'id'   => $prefix . 'status',
                'options' => [
                    'available' => esc_html__( 'Available', 'online-generator' ),
                    'reserved' => esc_html__( 'Reserved', 'online-generator' ),
                ],
            ],
            [
                'type' => 'post',
                'name' => esc_html__( 'Apartments', 'online-generator' ),
                'id'   => $prefix . 'apartments',
                'post_type'   => 'apartments',
                'field_type'  => 'select_advanced',
                'js_options' => [],
                'multiple' => true,
                'query_args'  => [
                    'post_status'    => 'publish',
                    'posts_per_page' => - 1,
                ],
            ],
        ],
    ];

	return $meta_boxes;
});

add_action('rest_api_init', function () {
	register_rest_route('emanuel/v1', 'send-formular', [
		'methods' => 'POST',
		/** @var WP_REST_Request $request */
		'callback' => function ($request) {
			$files = [];

			if (!empty($request->get_file_params())) {
				foreach ( $request->get_file_params() as $name => $file ) {
					$uploaded_file = wp_handle_upload($file, ['test_form' => false]);

					if (!empty($uploaded_file['url'])) {
						$files[$name] = $uploaded_file['url'];
					}
				}
			}

			ob_start();
			$params = $request->get_params();
			require_once EMANUEL_BLOCKS_PATH . '/templates/email/formular.php';
			$description = ob_get_clean();

			\EB_s\CRMClient::inst()->contactUs('Application job from ' . ($params['vorname'] ?? '') . ' ' . ($params['nachname'] ?? ''), $description);

			header('Location: ' . $request->get_header('referer'));
			exit;
		},
	]);

	register_rest_route('emanuel/v1', 'send-contact', [
		'methods' => 'POST',
		/** @var WP_REST_Request $request */
		'callback' => function ($request) {
			$mail = new PHPMailer(true);

			try {
				global $opt_name;

				$host = Redux::get_option($opt_name, 'email_host');
				$user = Redux::get_option($opt_name, 'email_user');
				$pass = Redux::get_option($opt_name, 'email_pass');
				$port = Redux::get_option($opt_name, 'email_port');
				$secure = Redux::get_option($opt_name, 'email_secure');
				$from = Redux::get_option($opt_name, 'email_from');
				$to = Redux::get_option($opt_name, 'email_from');
				$subject = Redux::get_option($opt_name, 'email_subject');
				$content = Redux::get_option($opt_name, 'email_team_content');


				//Server settings
				ob_start();
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = $host;                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = $user;                     //SMTP username
				$mail->Password   = $pass;                               //SMTP password
				$mail->SMTPSecure = $secure ?? null;            //Enable implicit TLS encryption
				$mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				$params = $request->get_params();

				//Recipients
				$mail->setFrom($from);
				$mail->addAddress($params['email']);     //Add a recipient
				if (!empty($params['rec_email'])) {
					$mail->addAddress($params['rec_email']);     //Add a recipient
				}

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = $subject;

				ob_clean();
				$mail->Body    = $content;

				ob_start();
				$mail->send();
			} catch (Exception $e) {
			} finally {
				ob_clean();
			}

			ob_start();
			$params = $request->get_params();
			require_once EMANUEL_BLOCKS_PATH . '/templates/email/contact-team.php';
			$description = ob_get_clean();

			\EB_s\CRMClient::inst()->contactUs('Contact Team Member', $description);

			header('Location: ' . $request->get_header('referer'));
			exit;
		},
	]);

	register_rest_route('emanuel/v1', 'contact-us', [
		'methods' => 'POST',
		/** @var WP_REST_Request $request */
		'callback' => function ($request) {
			$mail = new PHPMailer(true);

			try {
				global $opt_name;


				$host = Redux::get_option($opt_name, 'email_host');
				$user = Redux::get_option($opt_name, 'email_user');
				$pass = Redux::get_option($opt_name, 'email_pass');
				$port = Redux::get_option($opt_name, 'email_port');
				$secure = Redux::get_option($opt_name, 'email_secure');
				$from = Redux::get_option($opt_name, 'email_from');
				$to = Redux::get_option($opt_name, 'email_from');
				$subject = Redux::get_option($opt_name, 'email_subject');
				$content = Redux::get_option($opt_name, 'email_contact_us_content');


				//Server settings
				ob_start();
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = $host;                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = $user;                     //SMTP username
				$mail->Password   = $pass;                               //SMTP password
				$mail->SMTPSecure = $secure ?? null;            //Enable implicit TLS encryption
				$mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				$params = $request->get_params();

				//Recipients
				$mail->setFrom($from);
				$mail->addAddress($params['email']);     //Add a recipient


				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = $subject;

				ob_clean();
				$mail->Body    = $content ?? 'Email was sent';

				ob_start();
				$mail->send();
			} catch (Exception $e) {
			} finally {
				ob_get_clean();
			}

			ob_start();
			$params = $request->get_params();
			require_once EMANUEL_BLOCKS_PATH . '/templates/email/contact-us.php';
			$description = ob_get_clean();

			\EB_s\CRMClient::inst()->contactUs('Contact Us', $description);

			header('Location: ' . $request->get_header('referer'));
			exit;
		},
	]);

    register_rest_route('emanuel/v1', 'send-haus-request', [
        'methods' => 'POST',
        /** @var WP_REST_Request $request */
        'callback' => function ($request) {
            $mail = new PHPMailer(true);

            ob_start();
            $params = $request->get_params();
            require_once EMANUEL_BLOCKS_PATH . '/templates/email/haus-request.php';
            $description = ob_get_clean();

            try {
                global $opt_name;

                $host = Redux::get_option($opt_name, 'email_host');
                $user = Redux::get_option($opt_name, 'email_user');
                $pass = Redux::get_option($opt_name, 'email_pass');
                $port = Redux::get_option($opt_name, 'email_port');
                $secure = Redux::get_option($opt_name, 'email_secure');
                $from = Redux::get_option($opt_name, 'email_from');
                $to = Redux::get_option($opt_name, 'email_to');
                $subject = Redux::get_option($opt_name, 'email_subject');


                //Server settings
                ob_start();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = $host;                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $user;                     //SMTP username
                $mail->Password   = $pass;                               //SMTP password
                $mail->SMTPSecure = $secure ?? null;            //Enable implicit TLS encryption
                $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($from);
                $mail->addAddress($to);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "House Request: " . $subject;

                ob_clean();
                $mail->Body    = $description;

                ob_start();
                $mail->send();
            } catch (Exception $e) {
            } finally {
                ob_clean();
            }

            \EB_s\CRMClient::inst()->houseRequest('House request', $description);

            header('Location: ' . $request->get_header('referer'));
            exit;
        },
    ]);


});