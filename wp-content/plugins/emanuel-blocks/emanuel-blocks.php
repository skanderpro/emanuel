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
	require_once( __DIR__ . '/elementor/Contact.php' );
	require_once( __DIR__ . '/elementor/AddressList.php' );
	require_once( __DIR__ . '/elementor/BoxInfo.php' );
	require_once( __DIR__ . '/elementor/ContactUs.php' );
	require_once( __DIR__ . '/elementor/EstateInfo.php' );
	require_once( __DIR__ . '/elementor/EstateInfoSecond.php' );
	require_once( __DIR__ . '/elementor/BoxInfoStage.php' );
	require_once( __DIR__ . '/elementor/Team.php' );
	require_once( __DIR__ . '/elementor/Career.php' );

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
}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );