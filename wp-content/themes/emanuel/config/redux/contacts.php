<?php
global $opt_name;


Redux::set_section( $opt_name, [
	'title'  => esc_html__( 'Contacts', 'your-textdomain-here' ),
	'id'     => 'contacts',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'contact_company',
			'type'     => 'text',
			'title'    => esc_html__( 'Company', 'your-textdomain-here' ),
		],
		[
			'id'       => 'contact_address',
			'type'     => 'editor',
			'title'    => esc_html__( 'Address', 'your-textdomain-here' ),
		],
		[
			'id'       => 'contact_phone',
			'type'     => 'text',
			'title'    => esc_html__( 'Phone', 'your-textdomain-here' ),
		],
		[
			'id'       => 'contact_email',
			'type'     => 'text',
			'title'    => esc_html__( 'Email', 'your-textdomain-here' ),
		],
		[
			'id'       => 'contact_linkedin',
			'type'     => 'text',
			'title'    => esc_html__( 'Linkedin', 'your-textdomain-here' ),
		],
	]
]);