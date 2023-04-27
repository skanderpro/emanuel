<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

global $opt_name;

$opt_name = 'redux_demo';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get( 'Name' ),
    'display_version'      => $theme->get( 'Version' ),
    'menu_title'           => esc_html__( 'Emanuel Options', 'your-textdomain-here' ),
);

Redux::set_args( $opt_name, $args );

require_once EMANUEL_PATH . '/config/redux/header.php';
require_once EMANUEL_PATH . '/config/redux/contacts.php';
require_once EMANUEL_PATH . '/config/redux/footer.php';
require_once EMANUEL_PATH . '/config/redux/blog.php';