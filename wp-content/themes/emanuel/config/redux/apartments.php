<?php
global $opt_name;

Redux::set_section( $opt_name, [
	'title'  => esc_html__( 'Apartments page', 'your-textdomain-here' ),
	'id'     => 'apartments',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'apartments_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
		],
		[
			'id'       => 'apartments_description',
			'type'     => 'text',
			'title'    => esc_html__( 'Description', 'your-textdomain-here' ),
		],
	]
]);