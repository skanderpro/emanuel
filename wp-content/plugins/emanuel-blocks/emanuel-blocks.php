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

define('EMANUEL_BLOCKS_PATH', plugin_dir_path( __FILE__ ));

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/elementor/HeroHome.php' );
	require_once( __DIR__ . '/elementor/LinksBlock.php' );

	$widgets_manager->register( new \HeroHome() );
	$widgets_manager->register( new \LinksBlock() );
}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );