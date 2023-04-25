<?php
global $opt_name;


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
			'id'       => 'footer_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
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