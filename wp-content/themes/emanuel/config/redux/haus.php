<?php
global $opt_name;

Redux::set_section( $opt_name, [
	'title'  => esc_html__( 'Haus page', 'your-textdomain-here' ),
	'id'     => 'haus',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'haus_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
		],
		[
			'id'       => 'haus_description',
			'type'     => 'text',
			'title'    => esc_html__( 'Description', 'your-textdomain-here' ),
		],
		[
			'id'       => 'haus_empty_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Empty Text', 'your-textdomain-here' ),
		],
	]
]);