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

Redux::set_section( $opt_name, [
    'title'  => esc_html__( 'Header', 'your-textdomain-here' ),
    'id'     => 'header',
    'icon'   => 'el el-home',
    'fields' => [
        [
            'id'       => 'header_logo',
            'type'     => 'media',
            'title'    => esc_html__( 'Logo', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'header_cta_text',
            'type'     => 'text',
            'title'    => esc_html__( 'CTA text', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'header_cta_url',
            'type'     => 'text',
            'title'    => esc_html__( 'CTA url', 'your-textdomain-here' ),
        ],
    ]
]);

Redux::set_section( $opt_name, [
    'title'  => esc_html__( 'Footer', 'your-textdomain-here' ),
    'id'     => 'footer',
    'icon'   => 'el el-home',
    'fields' => [
        [
            'id'       => 'footer_logo',
            'type'     => 'media',
            'title'    => esc_html__( 'Logo', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'footer_description',
            'type'     => 'editor',
            'title'    => esc_html__( 'Description', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'footer_phone',
            'type'     => 'text',
            'title'    => esc_html__( 'Phone', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'footer_email',
            'type'     => 'text',
            'title'    => esc_html__( 'Email', 'your-textdomain-here' ),
        ],
        [
            'id'       => 'footer_linkedin',
            'type'     => 'text',
            'title'    => esc_html__( 'Linkedin', 'your-textdomain-here' ),
        ],
    ]
]);