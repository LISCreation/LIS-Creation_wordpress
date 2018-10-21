<?php get_header().wp_head();?>
<body class="work clearfix">
<div class="global-sidebar global-sidebar_work">
	<div class="global-sidebar_up">
		<div class="global-sidebar_up_icon-wrapper">
			<a href="<?=get_term_link(7, 'pages');?>"><img class="global-sidebar_icon global-sidebar_up_icon" src="<?=get_template_directory_uri();?>/assets/img/icons/up.svg" alt="Вверх"></a>
		</div>
	</div>
	<div class="global-sidebar_down">
		<div class="global-sidebar_down_icon-wrapper">
			<img src="<?=get_template_directory_uri();?>/assets/img/icons/call.svg" alt="Позвонить!" class="global-sidebar_icon">
		</div>
		<div class="global-sidebar_down_icon-wrapper">
			<img src="<?=get_template_directory_uri();?>/assets/img/icons/email.svg" alt="Позвонить!" class="global-sidebar_icon">
		</div>
	</div>
</div>
<?php $service_id = carbon_get_post_meta($post->ID, 'site_type');?>
<div class="global-wrapper work-wrapper">
	<header class="work-header">
		<div class="work-header-init_wrapper">
			<div class="work-header-init">
				<h5 class="work-header-init_service"><?php the_content();?></h5>
				<h1 class="work-header-init_title"><?php the_title();?></h1>
			</div>
		</div>
		<div class="work-header-init__list">
			<div class="work-header-init_link"><a href="<?=carbon_get_post_meta($post->ID, 'site_link');?>" rel="nofollow" target="_blank"><?=carbon_get_post_meta($post->ID, 'site_link');?></a></div>
			<div class="work-header-init_want">
				<div class="btn_roundness btn_roundness-reverse"><a href="<?php the_permalink($service_id);?>"><div class="btn works-link-button work-header-init_click">Хочу такой же!</div></a></div>
			</div>
			<div class="work-header-init_type">
				<p>Тип сайта: <a href="<?php the_permalink($service_id);?>"><?=get_the_title($service_id);?></a></p>
			</div>
		</div>
		<div class="work-header-slider">
			<div class="work-header-slider_area owl-carousel">
				<?php
				$gallery = carbon_get_post_meta($post->ID, 'site_gallery', 'complex');
				foreach($gallery as $gallery_item) {
					echo "<div class='work-header-slider_item'>
					    <img src='{$gallery_item['gallery_image']}' class='back' alt='work back'>
					    <img src='{$gallery_item['gallery_image']}' class='front' alt='work front'>
				    </div>";
                }
				?>
                <!--<div class="work-header-slider_item">
					<img src="https://klubputeshestvennikov.com/wp-content/uploads/2017/01/Los-Anzheles-9.jpg" class="back" alt="LIS creation work">
					<img src="https://klubputeshestvennikov.com/wp-content/uploads/2017/01/Los-Anzheles-9.jpg" class="front" alt="LIS creation work">
				</div>-->
			</div>
		</div>
		<div class="work-header-list_wrapper">
			<button class="work-header_more"><img src="<?=get_template_directory_uri();?>/assets/img/icons/arrow-down.svg" alt=""><p>Что мы сделали?</p></button>
			<ul class="work-header-list">
                <?php
                $tasks_list = carbon_get_post_meta($post->ID, 'site_tasks', 'complex');
                foreach($tasks_list as $task_item) echo "<li class='work-header-list_item'>$task_item[task]</li>";
                ?>
			</ul>
		</div>
	</header>
</div>
<?php wp_footer();?>
</body>
</html>