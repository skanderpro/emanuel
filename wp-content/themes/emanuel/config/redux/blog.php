<?php
global $opt_name;


Redux::set_section( $opt_name, [
	'title'  => esc_html__( 'Blog', 'your-textdomain-here' ),
	'id'     => 'blog',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'blog_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
		],
	]
]);