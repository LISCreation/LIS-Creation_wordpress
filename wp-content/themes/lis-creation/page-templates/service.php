<?php
/*
 * Template Name: Услуги (Portfolio page)
 * */
?>
<?php get_header().wp_head();?>
<body class="clearfix service">
<?php get_template_part('template-parts/block_sidebar', 'services')?>
<div class="global-wrapper serv <?php
    $serv_id = get_field('service_id-name');
    if($serv_id != 'landing') echo 'another ';
    the_field('service_id-name');
?>">
    <header class="header serv-header" id="header">
        <div class="container-self">
	        <?php
	        wp_nav_menu(array(
		        'theme_location'  => 'main',
		        'menu'            => '',
		        'container'       => 'nav',
		        'container_class' => 'header-menu',
		        'menu_class'      => 'header-menu-list',
		        'walker'          => new MyWalker()
	        ));
	        ?>
            <div class="serv-header-content_wrapper">
                <div class="serv-header-content">
                    <div class="serv-header-main">
                        <div class="title_wrapper">
                            <img src="<?=get_template_directory_uri();?>/assets/img/logo_lis-creation.png" alt="LIS Creation (Light in Sky) Logo" class="logo">
                            <h1 class="title"><?php the_title();?></h1>
                        </div>
                        <div class="info">
	                        <?php the_content();?>
                        </div>
                        <div class="btn_roundness btn_roundness-reverse serv-header-button"><a class="works-link" href="#callback"><div class="btn btn-reverse">Узнать больше!</div></a></div>
                    </div>
                    <div class="serv-header-image_wrapper">
                        <img src="<?php the_field('main_image');?>" class="serv-header-image" alt="Landing page одностраничный">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="listing tasks" id="tasks">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">Задачи <?php the_field('rod_name');?></h2>
                <p class="section-description"><?php the_field('tasks_desc');?></p>
            </div>
            <div class="listing-list tasks-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item tasks-list_item">
                            <div class="listing-list_item-icon tasks-list_item-icon"><img src="<?php the_field('task_image1')?>" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation tasks-list_item-designation"><?php the_field('task1');?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item tasks-list_item">
                            <div class="listing-list_item-icon tasks-list_item-icon"><img src="<?php the_field('task_image2')?>" alt="<?=basename(get_field(''))?>"></div>
                            <p class="listing-list_item-designation tasks-list_item-designation"><?php the_field('task2');?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item tasks-list_item">
                            <div class="listing-list_item-icon tasks-list_item-icon"><img src="<?php the_field('task_image3')?>" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation tasks-list_item-designation"><?php the_field('task3');?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item tasks-list_item">
                            <div class="listing-list_item-icon tasks-list_item-icon"><img src="<?php the_field('task_image4')?>" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation tasks-list_item-designation"><?php the_field('task4');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process" id="process">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">создание <?php the_field('rod_name');?></h2>
                <p class="section-description"><?php the_field('process_desc');?></p>
            </div>
            <div class="process-info">
                <p class="process-text"><?php the_field('process_team');?></p>
                <div class="process-numbers">
                    <p class="process-price">Срок разработки проекта - <strong><?php the_field('process_time');?></strong></p>
                    <p class="process-duration">Стоимость проекта - <strong>от <?php the_field('process_price')?> руб.</strong></p>
                </div>
                <div class="process-button"><a class="works-link" href="#"><div class="btn_roundness"><div class="btn btn-reverse process_press">Заказать</div></div></a></div>
            </div>
            <div class="process-image_wrapper">
                <img src="<?php the_field('process_image')?>" alt="3d example from works" class="process-image">
            </div>
        </div>
    </section>
    <section class="listing offer" id="offer">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">Что мы  предлагаем?</h2>
                <p class="section-description">
                    Для Вашего удобства мы разработали систему «под ключ» - от вашей
                    идеи до продвижения на передовые позиции в интернете.
                    Мы работаем только на результат!</p>
            </div>
            <div class="listing-list offer-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item offer-list_item">
                            <div class="listing-list_item-icon offer-list_item-icon"><img src="<?=get_template_directory_uri();?>/assets/img/icons/services/pixel.svg" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation offer-list_item-designation">Разработаем уникальный, современный и продающий дизайн сайта</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item offer-list_item">
                            <div class="listing-list_item-icon offer-list_item-icon"><img src="<?=get_template_directory_uri();?>/assets/img/icons/services/tap.svg" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation offer-list_item-designation">Адаптивная верстка HTML5/CSS3 и SEO оптимизация</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item offer-list_item">
                            <div class="listing-list_item-icon offer-list_item-icon"><img src="<?=get_template_directory_uri();?>/assets/img/icons/services/testing.svg" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation offer-list_item-designation">Первичное наполнение сайта контентом, размещение на хостинге</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="listing-list_item offer-list_item">
                            <div class="listing-list_item-icon offer-list_item-icon"><img src="<?=get_template_directory_uri();?>/assets/img/icons/services/timeline.svg" alt="Rocket LIS"></div>
                            <p class="listing-list_item-designation offer-list_item-designation">Продвижение сайта в топ и настройка контекстной рекламы</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_template_part('template-parts/section_service', 'main');
get_template_part('template-parts/section_callback', 'main');
wp_footer().get_footer();
?>