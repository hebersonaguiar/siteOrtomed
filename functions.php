<?php
	//ativando suporte a imagem destacada
	add_theme_support( 'post-thumbnails' );	

	//ativando menus dinamicos
	function register_menu(){
		register_nav_menus(
			array(
					'header-menu' => __('Menu Topo')
			)
		);
	}
	add_action( 'init', 'register_menu' );

	/*
	* Define a constant path to our single template folder
	*/
	define(SINGLE_PATH, TEMPLATEPATH . '/');
	 
	/**
	* Filter the single_template with our custom function
	*/
	add_filter('single_template', 'my_single_template');
	 
	/**
	* Single template function which will choose our template
	*/
	function my_single_template($single) {
		global $wp_query, $post;
		 
		/**
		* Checks for single template by category
		* Check by category slug and ID
		*/
		foreach((array)get_the_category() as $cat) :
		 
		if(file_exists(SINGLE_PATH . 'single-' . $cat->slug . '.php'))
		return SINGLE_PATH . 'single-' . $cat->slug . '.php';
		 
		elseif(file_exists(SINGLE_PATH . 'single-' . $cat->term_id . '.php'))
		return SINGLE_PATH . 'single-' . $cat->term_id . '.php';
		 
		endforeach;
	}

	//posts types
	// function posts_types(){
	// 	//especialidades
	// 	register_post_type('especialidades',
	// 		array(
	// 			'labels' 			=> array(
	// 				'name' 			=> __('Especialidades'),
	// 				'singular_name' => __('Especialidade')
	// 				),
	// 			'public' 		=> true,
	// 			'has_archive' 	=> true,
	// 			'menu_icon'		=> 'dashicons-heart',
	// 			'supports'		=> array('title', 'editor', 'thumbnail', 'page-attributes'),
	// 			'taxonomies'    => array( 'category' ),
	// 		)
	// 	);
	// }
		// register_post_type('procedimentos',
		// 		array(
		// 			'labels' 			=> array(
		// 				'name' 			=> __('Procedimentos'),
		// 				'singular_name' => __('Procedimento')
		// 				),
		// 			'public' 		=> true,
		// 			'has_archive' 	=> true,
		// 			'menu_icon'		=> 'dashicons-heart',
		// 			'supports'		=> array('title', 'editor', 'thumbnail', 'page-attributes'),
		// 	)
		// );
	// add_action( 'init', 'posts_types' );