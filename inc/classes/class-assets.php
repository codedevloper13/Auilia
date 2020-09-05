<?php

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {
		//Load Other Classe
		//wp_die('hello');

		$this->setup_hooks();

	}

//	protected function __clone() {
//	}

	protected function setup_hooks() {
		/*
		 * Actions
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_style' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_script' ] );
	}

	public function register_style() {
		//Register Style
		wp_register_style( 'stylesheet', AQUILA_DIR_URI, [], filemtime( AQUILA_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'bootstrap-css', AQUILA_DIR_URI. '/assets/src/library/css/bootstrap.css', [], false, 'all' );

		// Enqueue Style
		wp_enqueue_style( 'stylesheet' );
		wp_enqueue_style( 'bootstrap-css' );
	}

	public function register_script() {
		//Register Scripts
		wp_register_script( 'main-js', AQUILA_DIR_URI, [], filemtime( AQUILA_DIR_PATH . '/assets/main.js' ), true );
		wp_register_script( 'bootstrap-js', AQUILA_DIR_URI. '/assets/src/library/js/bootstrap.js', [ 'jquery' ], false, true );

		// Enqueue Scripts
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
	}
}
