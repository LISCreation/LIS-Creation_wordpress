<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_register_fields', 'add_cbfields' ); // Для версии 1.6 и ниже

function add_cbfields () {
	$query = new WP_Query();
	$services_info = get_page_children(37, $query->query(array('post_type' => 'page')));
	$service_options = array();
	foreach($services_info as $service_info) {
		$service_options[$service_info->ID] = $service_info->post_title;
	}
	Container::make('post_meta', 'Portfolio Work')
		->show_on_post_type('work')->set_priority('high')
	->add_fields(array(
		Field::make('text', 'site_link', 'Ссылка на сайт'),
		Field::make('select', 'site_type', 'Тип сайта')
			->add_options($service_options)->set_required(true),
		Field::make('complex', 'site_gallery', 'Галерея работы')
			->add_class('site_gallery')
			->add_fields(array(
				Field::make('image', 'gallery_image', 'Фото сайта')->set_value_type('url'),
				Field::make('html', 'crb_gallery_styles', 'Стили для полей')
					->set_html('
					<style>
						.site_gallery .carbon-groups-holder {
							display: flex;
							flex-wrap: wrap;
						}
						.site_gallery .carbon-groups-holder > .carbon-row {
							width: 32%;
						}
						.carbon-field .fields-container label {text-align: center;}
						.carbon-attachment {width: 100%!important;}
						.carbon-attachment .carbon-attachment-preview {
							height: 100%;
							width: 100%;
						}
						.carbon-attachment .carbon-attachment-preview img {
							width: 100%;
							object-fit: contain;
							height: 130px!important;
						}
					</style>'),
			)),
		Field::make('complex', 'site_tasks', 'Что было сделано')
			->add_fields(array(
				Field::make('text', 'task', 'Задача')
			))
	));
}