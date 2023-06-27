<?php
global $opt_name;

$categories = get_categories([
	'hide_empty' => false,
]);
$categoriesOpts = [];
foreach ( $categories as $category ) {
	$categoriesOpts[$category->term_id] = $category->name;
}

Redux::set_section( $opt_name, [
	'title'  => esc_html__( 'Email', 'your-textdomain-here' ),
	'id'     => 'email',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'email_host',
			'type'     => 'text',
			'title'    => esc_html__( 'Host', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_user',
			'type'     => 'text',
			'title'    => esc_html__( 'User', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_pass',
			'type'     => 'text',
			'title'    => esc_html__( 'Password', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_port',
			'type'     => 'text',
			'title'    => esc_html__( 'Port', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_secure',
			'type'     => 'text',
			'title'    => esc_html__( 'Secure', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_from',
			'type'     => 'text',
			'title'    => esc_html__( 'From address', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_to',
			'type'     => 'text',
			'title'    => esc_html__( 'Target imale', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_subject',
			'type'     => 'text',
			'title'    => esc_html__( 'Subject', 'your-textdomain-here' ),
		],

		[
			'id'       => 'email_contact_us_content',
			'type'     => 'editor',
			'title'    => esc_html__( 'Email "Contact Us"', 'your-textdomain-here' ),
		],
		[
			'id'       => 'email_team_content',
			'type'     => 'editor',
			'title'    => esc_html__( 'Email "Team"', 'your-textdomain-here' ),
		],

	]
]);