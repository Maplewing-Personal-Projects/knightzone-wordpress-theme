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
	echo '</a>';
	
	if(is_home())
		return;
	
	echo $seperator;

	if(is_single()){
		$categories = get_the_category();
		if(!empty($categories)){
			echo get_category_parents($categories[0]->term_id, true, $seperator);
		}
	}
	else if(is_category()){
		$category = get_category(get_query_var('cat'));
		if(!empty($category)){
			echo get_category_parents($category->term_id, true, $seperator);
		}
	}

	if(is_single() || is_page()){
		the_title();
	}
	else if(is_archive()){
		the_archive_title();
	}
	else if(is_search()){
		the_search_title();
	}
}

function the_category_without_link($seperator){
	$is_output = false;
	foreach(get_the_category() as $category){
		if($is_output) echo $seperator;
		echo $category->name;
		$is_output = true;
	}
}

function the_tags_without_link($seperator){
	$is_output = false;
	foreach(get_the_tags() as $tag){
		if($is_output) echo $seperator;
		echo $tag->name;
		$is_output = true;
	}
}

function the_search_title(){
	echo _e("搜尋結果：") . get_search_query();
}

function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}

function the_all_tags(){
	$tags = get_tags();
	echo '<ul>';
	foreach ($tags as $tag) {
	echo '<li><a href="' . get_tag_link($tag->term_id) . '>' . $tag->name . '</a></li>';
	}
	echo '</ul>';
}

add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );

add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/nav.js');
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
?>