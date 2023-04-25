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
	]
]);