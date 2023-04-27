<?php
class FeaturedPostsList extends \WP_Widget
{
	function __construct() {
		// Instantiate the parent object.
		parent::__construct( false, __( 'News List', 'textdomain' ) );
	}

	public function widget( $args, $instance ) {
		require EMANUEL_BLOCKS_PATH . '/widgets/FeaturedPostsList/template.php';
	}


}