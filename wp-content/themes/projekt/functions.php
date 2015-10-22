<?php

	function theme_stylesheet(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	
	add_action('wp_enqueue_scripts', 'theme_stylesheet');

	add_filter('show_admin_bar', '__return_false');

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

	
// add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
// function woo_reorder_tabs( $tabs ) {

// 	$tabs['reviews']['priority'] = 5;			// Reviews first
// 	$tabs['description']['priority'] = 10;			// Description second
// 	$tabs['additional_information']['priority'] = 15;	// Additional information third

// 	return $tabs;
// }




// remove_action( 'woocommerce_single_product_summary', 'woocommerce_after_single_product_summary', 30 );

// add_action( 'woocommerce_single_product_summary', 'woocommerce_after_single_product_summary', 60 );



// woocommerce_after_single_product_summary





