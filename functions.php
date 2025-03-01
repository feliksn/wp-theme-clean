<?php


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
	// Theme sytles
	wp_enqueue_style( 'bs', get_template_directory_uri() .'/lib/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'bs-icons', get_template_directory_uri() . '/lib/bootstrap/bootstrap-icons.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	// Theme scripts
	wp_enqueue_script('jq', get_template_directory_uri() . '/lib/jquery/jquery-3.7.1.min.js',[],'',true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/lib/bootstrap/bootstrap.bundle.min.js',[],'',true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}
?>
