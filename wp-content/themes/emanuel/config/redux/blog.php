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
	'title'  => esc_html__( 'Blog', 'your-textdomain-here' ),
	'id'     => 'blog',
	'icon'   => 'el el-home',
	'fields' => [
		[
			'id'       => 'blog_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
		],
		[
			'id'       => 'blog_sidebar_category',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar category', 'your-textdomain-here' ),
			'options' => $categoriesOpts,
		],
	]
]);