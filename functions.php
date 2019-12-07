<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
 
function themename_custom_logo_setup() {
	$defaults = array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}

function the_breadcrumb(){
	$seperator = " > ";
	echo '<a href="';
	echo get_option('home');
	echo '">';
	echo "<i class='fas fa-home'></i>";
	echo '</a>' . $seperator;

	$categories = get_the_category();
	if(!empty(categories)){
	  echo get_category_parents($categories[0]->term_id, true, $seperator);
	}

	if(is_single()){
		the_title();
	}
}

add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
?>