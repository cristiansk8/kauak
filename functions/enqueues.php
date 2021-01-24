<?php

function lilibuy_child_assets() {

	wp_register_style('metro-css', get_template_directory_uri() . '/assets/metro.css', false, null);
	wp_enqueue_style('metro-css');
	// Bootstrap Support
	//enqueue bootstrap in the child theme

	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');

	// Styles
	$theme_info = wp_get_theme();

	wp_enqueue_style('my-styles', get_stylesheet_directory_uri().'/assets/css/theme.css', array(), $theme_info->get('Version'));

	// Scripts

	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);

	wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/assets/js/vendors/slick/slick.js', false, null, true);

	wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri().'/assets/js/theme.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'lilibuy_child_assets', 300);

function storefront_credit() {
?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div>
	<!-- .site-info -->
<?php
}
/* Remove sidebars
function remove_sidebars() {
  unregister_sidebar( 'sidebar-1' ); // primary
 // unregister_sidebar( 'sidebar-2' ); // secondary
}
*/
/* Remove sidebar from all pages except those using page-sidebar.php template */
// Need to figure out width CSS for sidebar pages later...
/*
if (!is_admin()) {
	$url = explode('?', 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	$id = url_to_postid($url[0]);
	$template = get_post_meta( $id, '_wp_page_template', true );
	if ($template !== "page-sidebar.php") {
		//error_log('template ' . $template);
		add_action( 'widgets_init', 'remove_sidebars', 11 );
	}
}
*/
function x_my_custom_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'My Shop Sidebar', '__x__' ),
    'id'            => 'sidebar-my-custom-shop',
    'description'   => __( 'Appears on the index shop page.', '__x__' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="h-widget">',
    'after_title'   => '</h4>',
  ) );

}

add_action( 'widgets_init', 'x_my_custom_widgets_init' );
/* Remove search from header */
add_action( 'init', 'remove_storefront_header_search' );

function remove_storefront_header_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 	40 );
}
