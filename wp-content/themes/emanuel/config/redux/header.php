<?php
global $opt_name;

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
