<?php
add_action('template_redirect', 'self_redirects');
function self_redirects() {
	if(is_page(37)) {
		wp_redirect(get_permalink(17));
		exit;
	}
}
remove_filter( 'the_content', 'wpautop' );
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
	wp_enqueue_script('scroll_speed', get_template_directory_uri().'/assets/js/jQuery.scrollSpeed.js', array(), null, true);
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
		'view_item' => 'Открыть страницу работы',
		'search_items' => 'Искать работы',
		'not_found' =>  'Работ не найдено.',
		'not_found_in_trash' => 'В корзине нет работ.',
		'menu_name' => 'Портфолио' // ссылка в меню в админке
	);
	$args = array(
		'rewrite' => array('slug' => 'works'),
		'labels' => $labels,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-welcome-view-site', // иконка корзины
		'menu_position' => 5,
		'taxonomies' => array('works'),
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('work', $args);
}
add_action('init', 'create_taxonomy');
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('pages', array('work'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Pages',
			'singular_name'     => 'Страница',
			'search_items'      => 'Искать страницы',
			'all_items'         => 'Все страницы',
			'view_item '        => 'Смотреть страницу',
			'edit_item'         => 'Редактировать страницу',
			'update_item'       => 'Обновить страницу',
			'add_new_item'      => 'Добавить страницу',
			'new_item_name'     => 'Имя новой страницы',
			'menu_name'         => 'Страницы',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => array('slug' => null),
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}
require 'inc/cb-fields.php';