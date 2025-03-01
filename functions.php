<?php


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
	// Theme sytles
	wp_enqueue_style( 'bs', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'bs-icons', get_template_directory_uri().'/css/bootstrap-icons.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css');
	// Theme scripts
	wp_enqueue_script('jq', get_template_directory_uri(). '/js/jquery-3.7.1.min.js',[],'',true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js',[],'',true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
}
?>
