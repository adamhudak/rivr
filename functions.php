<?php

    add_theme_support( 'menus' ); 
    add_theme_support( 'post-thumbnails' );
    
    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title' 	=> 'Nastavenie témy',
            'menu_title'	=> 'Nastavenie témy',
            'menu_slug' 	=> 'theme-settings'
        ));
    }
    if ( ! function_exists( 'custom_register_nav_menu' ) ) {
 
        function custom_register_nav_menu(){
            register_nav_menus( array(
                'primary_menu' => __( 'Primary Menu', 'custom-theme' ),
                'company_menu'  => __( 'Company Menu', 'custom-theme' ),
                'products_menu'  => __( 'Products Menu', 'custom-theme' ),
                'contact_menu'  => __( 'Contact Menu', 'custom-theme' ),
                'privacy_menu'  => __( 'Privacy Menu', 'custom-theme' ),
                
                
            ) );
        }
        add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );
    }
        
    //Excerpt length
    function wp_example_excerpt_length($length)
    {
        return 15;
    }
    add_filter('excerpt_length', 'wp_example_excerpt_length');

    function new_excerpt_more($more)
    {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');


    /*SCRIPTS AND STYLE */
    function custom_theme_scripts() {
      
    //Jquery
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), "", true);
	wp_enqueue_script('customt-theme-slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array("jquery"), "", true);

    wp_enqueue_script('custom-theme-js', get_template_directory_uri(). '/js/scripts.js', [], filemtime(get_template_directory() . '/js/scripts.js'), true);
  

	//styles
   

    wp_enqueue_style('custom-theme-css', get_stylesheet_directory_uri(). '/css/style.css', [], filemtime(get_stylesheet_directory() . '/css/style.css'), 'all');    

	wp_enqueue_style('custom-click-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

