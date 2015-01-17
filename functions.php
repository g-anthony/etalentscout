<?php 

/* THEME SUPPORT
=========================== */

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* GLOBAL STYLES & SCRIPTS
=============================== */

function etalentscout_styles(){
	
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font_roboto', 'http://fonts.googleapis.com/css?family=Roboto:500,300');
	wp_enqueue_style('font_awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('swiper_css', get_template_directory_uri().'/css/idangerous.swiper.css');
	wp_enqueue_style('main_css', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'etalentscout_styles');

function etalentscout_scripts(){
	
	global $wp_scripts;
	
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '', false);
	
	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
	
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('swiper_js', get_template_directory_uri().'/js/idangerous.swiper.min.js', array('jquery'), '', true);
	
	if( is_page('faq') ){
		wp_enqueue_script('jquery-ui-accordion');
	}

}

add_action('wp_enqueue_scripts', 'etalentscout_scripts');


/* REGISTERING MENUS
========================== */

function register_theme_menus() {
	
	register_nav_menus(
			array(
				'header-menu'	=> __( 'Header Menu' )
			)
	);
}
add_action( 'init', 'register_theme_menus' );
















?>