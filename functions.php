<?php

// Добавить поддержку меню
add_theme_support("menus");

// Изменить класс для <li> в меню навигации под класс bootstrap
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	$classes = ['nav-item'];
	return $classes;
}

// Изменить класс для <a> в меню навигации под класс bootstrap
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
		$atts['class'] = 'nav-link';

	return $atts;
}

// Добавить стили и скрипты
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
	// Theme sytles
	wp_enqueue_style( 'bs', get_template_directory_uri() .'/lib/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'bs-icons', get_template_directory_uri() . '/lib/bootstrap/bootstrap-icons.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	// Theme scripts
	wp_enqueue_script('jq', get_template_directory_uri() . '/lib/jquery/jquery-3.7.1.min.js',[],'',true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/lib/bootstrap/bootstrap.bundle.min.js',[],'',true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], '', true);
}
?>
