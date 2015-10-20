<?php

	function theme_stylesheet(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	
	add_action('wp_enqueue_scripts', 'theme_stylesheet');



//Navs
	register_nav_menus(array(
			'primary' => __( 'Primary Menu'),
			'footer' => __( 'Footer Menu' ),
		));

//add_filter('show_admin_bar', '__return_false');



	function home_page_menu_args( $args ) {
		$args['show_home'] = true;
		return $args;
	}

	add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


// 	function create_posttype() { 

// 		register_post_type( 'movies',
// 			array(
// 				'labels' => array(
// 					'name' => __( 'Banner'),
// 					'singular_name' => array('slug' => 'banner')
// 					),
// 				'public' => true,
// 				'has_archive' => true,
// 				'rewrite' => array('slug' => 'banner'),
// 			)
// 		);
// }

// add_action( 'init', 'create_posttype' );





