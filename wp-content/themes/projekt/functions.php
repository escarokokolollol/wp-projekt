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








// custom post type för kampanj på startsida
	add_action('init', 'kampanj_post_type');
	
	function kampanj_post_type(){
	
		$singular="Kampanj";
		$plural="Kampanjer";
	
		$labels=array(
			'name'=>$plural,
			'singular_name' 	=> $singular,
			'add_name'			=> 'add new',
			'add_new_item' 		=> 'Add new ' . $singular
	
		);
	
		$args = array(
			'labels' => $labels,
			'public' => true,
			'menu_icon' => 'dashicons-flag',
			'hierarchical' => false,
			'supports' => array('title', 'thumbnail')
			
		);
	
		register_post_type('asd', $args);
	}
	
	
	
	
	function header_post_type(){
	
		$singular="header";
		$plural="header";
	
		$labels=array(
			'name'=>$plural,
			'singular_name' 	=> $singular,
			'add_name'			=> 'add new',
			'add_new_item' 		=> 'Add new ' . $singular
	
		);
	
		$args = array(
			'labels' => $labels,
			'public' => true,
			'menu_icon' => 'dashicons-desktop',
			'hierarchical' => false,
			'supports' => array('thumbnail')
			
		);
	
		register_post_type('header', $args);
	}
	
	add_action('init', 'header_post_type');











// Functions.php

	function get_latest() { 
		/* HÄR BÖRJAR DET */
	
		$searchword = $_POST['searchword'];
	
	
	
	// The Query
	$the_query = new WP_Query('s='.$searchword);
	
		if($searchword){
	
			// The Loop
			if ( $the_query->have_posts()) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
	
			<div><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div> 
	
			
	
			<?php	
			}
			} else { ?>
	
				<div><span>Din sökning gav inget resultat. Testa igen.<span></div>
	
			<?php
			}
			wp_reset_postdata();
		}
		/* HÄR SLUTAR DET */
	die(); 
	
	} 
	
	add_action( 'wp_ajax_nopriv_get_latest', 'get_latest' ); 
	add_action( 'wp_ajax_get_latest', 'get_latest' );



















//Searchform
	//add_theme_support('html5', array('search-form'));





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



//Widget sidebar


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Shop Sidebar Left',
		'id'            => 'shop_left',
		'before_widget' => '<div class="shop_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




// function wpsites_before_post_widget( $content ) {
// 	if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
// 		dynamic_sidebar('before-post');
// 	}
// 	return $content;
// }
// add_filter( 'the_content', 'wpsites_before_post_widget' );

// register_sidebar( array(
// 	'id'          => 'before-post',
// 	'name'        => 'Before Posts Widget',
// 	'description' => __( 'Your Widget Description.', 'text_domain' ),
// ) );

?>