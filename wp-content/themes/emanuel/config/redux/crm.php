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
	'title'  => esc_html__( 'CRM', 'your-textdomain-here' ),
	'id'     => 'crm',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'crm_token',
			'type'     => 'text',
			'title'    => esc_html__( 'Token', 'your-textdomain-here' ),
		],
	]
]);