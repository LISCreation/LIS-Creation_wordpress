<?php
add_action('wp_enqueue_scripts', 'add_self_styles');
add_action('wp_enqueue_scripts', 'add_self_scripts');
add_action('after_setup_theme', 'register_main_nav_menu');

function add_self_styles() {
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_style('owl-carousel-min', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme-min', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('style-min', get_template_directory_uri().'/assets/css/style.min.css');
}
function add_self_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), null, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), null, true);
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true);
}
function register_main_nav_menu() {
	register_nav_menu('main', 'Main Location');
}