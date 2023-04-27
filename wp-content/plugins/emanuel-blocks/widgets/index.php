<?php


add_action( 'widgets_init', function () {
	require_once EMANUEL_BLOCKS_PATH . '/widgets/FeaturedPostsList/FeaturedPostsList.php';

	register_widget(\FeaturedPostsList::class);


	register_sidebar([
		'name'          => __( 'Blog Sidebar', 'textdomain' ),
		'id'            => 'blog_sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	]);
} );