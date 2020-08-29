<?php

/*
 @Package  Auaila
* Theme Functions 
*/

function aquila_stylesheet_add() {
	//Register Style
	wp_register_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
	wp_register_style( 'bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.css', [], false, 'all' );


	//Register Scripts
	wp_register_script( 'main-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/main.js' ), true );
	wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.js', ['jquery'],false,true );

	// Enqueue Style
	wp_enqueue_style('stylesheet');
	wp_enqueue_style('bootstrap-css');

	// Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');


}

add_action( 'wp_enqueue_scripts', 'aquila_stylesheet_add' );