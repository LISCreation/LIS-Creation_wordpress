<?php
add_action('wp_enqueue_scripts', 'add_self_styles');
add_action('wp_enqueue_scripts', 'add_self_scripts');
add_action('after_setup_theme', 'register_main_nav_menu');
add_theme_support('post-thumbnails');

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
add_action( 'init', 'register_custom_ptypes' );
function register_custom_ptypes() {
	$labels = array(
		'name' => 'Портфолио',
		'singular_name' => 'Работа', // админ панель Добавить->Функцию
		'add_new' => 'Добавить работу в портфолио',
		'add_new_item' => 'Добавить новую работу', // заголовок тега <title>
		'edit_item' => 'Редактировать работу',
		'new_item' => 'Новая работа',
		'all_items' => 'Общее портфолио',
		'view_item' => 'Просмотр работ на сайте',
		'search_items' => 'Искать работы',
		'not_found' =>  'Работ не найдено.',
		'not_found_in_trash' => 'В корзине нет работ.',
		'menu_name' => 'Портфолио' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-welcome-view-site', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('works',$args);
}
