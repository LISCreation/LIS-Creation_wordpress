<?php
/*
* Template Name: Portfolio Page
*/
?>
<?php get_header().wp_head();?>
<body class="clearfix">
<?php get_template_part('template-parts/block_sidebar', 'portfolio');?>
<div class="global-wrapper">
    <section class="header portfolio" id="header">
        <div class="portfolio_background"></div>
        <div class="container-fluid">
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
            <div class="header-main">
                <div class="header-main_middle">
                    <div class="header-main-logo_wrapper">
                        <a href="<?php the_permalink();?>"><img src="<?=get_template_directory_uri();?>/assets/img/logo_lis-creation.png" alt="LIGHT IN SKY Logo" class="header-main-logo logo"></a>
                    </div>
                    <h2 class="header-main-chant">Портфолио</h2>
                    <p class="header-main-description">Здесь расположены не просто наши работы,
                        сюда вложены <span>огромные усилия</span>, <span>время</span>,
                        а главное - <span class="big">душа!</span></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="portfolio-list">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => 5,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'works',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    foreach($posts as $post) : setup_postdata($post); ?>
                        <div class="portfolio-list_item">
                            <div class="portfolio-list_item__inner">
                                <div class="portfolio-list_item__inner2">
                                    <a href="<?php the_permalink();?>">
                                        <img src="<?php the_post_thumbnail_url();?>" class="portfolio-list_item-image" alt="">
                                        <div class="portfolio-list_item-imposition">
                                            <h4 class="portfolio-list_item-label"><?php the_title();?></h4>
                                            <div class="portfolio-list_item-link"><div class="btn_roundness"><div class="btn portfolio-list_item-button">Больше</div></div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php wp_footer().get_footer();?>