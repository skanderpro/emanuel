<?php
define( 'EMANUEL_ASSETS_URL', get_template_directory_uri() . '/assets/dist/' );
define( 'EMANUEL_PATH', get_template_directory() );

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/redux/index.php';

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'emanuel-normalize', EMANUEL_ASSETS_URL . '/files/css/normalize.css' );
	wp_enqueue_style( 'emanuel-main', EMANUEL_ASSETS_URL . '/css/style.css' );
	wp_enqueue_script( 'emanuel-main-js', EMANUEL_ASSETS_URL . '/js/app.min.js', [], false, true );
	wp_enqueue_script( 'emanuel-popup-js', EMANUEL_ASSETS_URL . '/files/js/openPopup.js', [], false, true );
} );


add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( [
		'primary_menu'  => __( 'Primary Menu', 'emanuel' ),
		'footer_menu_1' => __( 'Footer 1 Column', 'emanuel' ),
		'footer_menu_2' => __( 'Footer 2 Column', 'emanuel' ),
		'footer_menu_3' => __( 'Footer 3 Column', 'emanuel' ),
	] );
}, 0 );


add_action( 'widgets_init', function () {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
} );

//add_action('parse_query', function (\WP_Query $query) {
//	if (!$query->is_main_query()) {
//		return;
//	}
//	global $opt_name;
//
//	$cat = Redux::get_option($opt_name, 'blog_sidebar_category');
//
//	$query->set('category__not_in', [$cat]);
//});

add_filter('request', 'wptwpm_remove_term_request', 1, 1 );

function wptwpm_remove_term_request($query){

	$tax_name = 'apartments_cats'; // specify your taxonomy name here

	// Request for child terms differs, we should make an additional check
	if( isset($query['attachment']) ) :
		$include_children = true;
		$name = $query['attachment'];
	else:
		$include_children = false;
		$name = $query['name'] ?? $query['pagename'] ?? '';
	endif;


	$term = get_term_by('slug', $name, $tax_name); // get the current term to make sure it exists

	if (isset($name) && $term && !is_wp_error($term)): // check it here

		if( $include_children ) {
			unset($query['attachment']);
			$parent = $term->parent;
			while( $parent ) {
				$parent_term = get_term( $parent, $tax_name);
				$name = $parent_term->slug . '/' . $name;
				$parent = $parent_term->parent;
			}
		} else {
			unset($query['pagename']);
		}

		switch( $tax_name ):
			case 'category':{
				$query['category_name'] = $name; // for categories
				break;
			}
			case 'post_tag':{
				$query['tag'] = $name; // for post tags
				break;
			}
			default:{
				$query['tax_query'] = [
					array (
						'taxonomy' => $tax_name,
						'field' => 'term_id',
						'terms' => $term->term_id,
					)
				]; // for another taxonomies
				break;
			}
		endswitch;

	endif;

	return $query;

}


add_filter( 'term_link', 'wptwpm_change_term_permalink', 10, 3 );

function wptwpm_change_term_permalink( $url, $term, $taxonomy ){

	$taxonomy_name = 'apartments_cats'; // your taxonomy name here
	$taxonomy_slug = 'apartments_cats'; // the taxonomy slug can be different with the taxonomy name

	// exit the function if taxonomy slug is not in URL
	if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;

	$url = str_replace('/' . $taxonomy_slug, '', $url);

	return $url;
}


add_action('template_redirect', 'wptwpm_old_term_redirect');

function wptwpm_old_term_redirect() {

	$taxonomy_name = 'apartments_cats'; // your taxonomy name here
	$taxonomy_slug = 'apartments_cats'; // your taxonomy slug here

	// exit the redirect function if taxonomy slug is not in URL
	if( strpos( $_SERVER['REQUEST_URI'], $taxonomy_slug ) === FALSE)
		return;

	if( ( is_category() && $taxonomy_name=='category' ) || ( is_tag() && $taxonomy_name=='post_tag' ) || is_tax( $taxonomy_name ) ) :

		wp_redirect( site_url( str_replace($taxonomy_slug, '', $_SERVER['REQUEST_URI']) ), 301 );
		exit();

	endif;

}
