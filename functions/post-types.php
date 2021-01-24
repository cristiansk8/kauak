<?php

// Custom post types creation
function create_posttype() {

	 ////////////////////
	// POST TYPES
	///////////////////

	//Post Type Videos

	// register_post_type( 'videos',
	// // CPT Options
	//     array(
	//         'labels' => array(
	//             'name' => __( 'Videos' ),
	//             'singular_name' => __( 'Video')
	//         ),
	//         'rewrite' => array('slug' => 'video'),
	//         'supports' => array( 'title', 'thumbnail', 'custom-fields'),
	//         'public' => true,
	//         'hierarchical'        => false,
	//         'show_ui'             => true,
	//         'show_in_menu'        => true,
	//         'show_in_nav_menus'   => true,
	//         'show_in_admin_bar'   => true,
	//         'menu_position'       => 5,
	//         'can_export'          => true,
	//         'has_archive'         => true,
	//         'exclude_from_search' => true,
	//         'publicly_queryable'  => true,
	//         'capability_type'     => 'post'
	//     )
	// );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );