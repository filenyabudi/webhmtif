<?php

add_filter( 'ot_theme_mode', '__return_true' );
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );


function hmtif_scripts() {

wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'style', get_stylesheet_uri());

wp_enqueue_script('google-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array('jquery'));

wp_enqueue_script('font-awesome', '//use.fontawesome.com/releases/v5.0.3/js/all.js'); 

wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

// wp_enqueue_script( 'timer', get_template_directory_uri() . '/js/timer.js');
}

function cptui_register_my_cpts_seputar_kampus() {

	/**
	 * Post Type: Seputar Kampus.
	 */

	$labels = array(
		"name" => __( "Seputar Kampus", "twentyseventeen" ),
		"singular_name" => __( "Seputar Kampus", "twentyseventeen" ),
	);

	$args = array(
		"label" => __( "Seputar Kampus", "twentyseventeen" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "seputar_kampus", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "seputar_kampus", $args );
}

add_action( 'init', 'cptui_register_my_cpts_seputar_kampus' );


add_action( 'wp_enqueue_scripts', 'hmtif_scripts' );
?>