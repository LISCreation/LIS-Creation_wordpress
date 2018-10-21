<?php get_header().wp_head();?>
<body class="clearfix">
<?php get_template_part('template-parts/block_sidebar', 'main');?>
<div class="global-wrapper">
    <header class="header" id="header">
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
        <h1 class="header-main-title">Light In Sky</h1>
        <div class="header-main">
            <div class="header-main_middle">
                <div class="header-main-logo_wrapper">
                    <a href="<?php the_permalink();?>"><img src="<?=get_template_directory_uri();?>/assets/img/logo_lis-creation.png" alt="LIGHT IN SKY Logo" title="Перезагрузить страницу" class="header-main-logo logo"></a>
                </div>
                <h2 class="header-main-chant">Место, где рождаются сайты</h2>
                <p class="header-main-description">Наличие сайта – это необходимость нашего времени.
                    Креативная команда LIS Creation воплотит ваши идеи
                    в жизнь. Мы работаем на результат!</p>
            </div>
        </div>
        <ul class="social header_social">
            <li class="social_item header_social_item">
                <a href="#" rel="nofollow" target="_blank" title="Telegram">
                    <svg id="telegramIcon" viewBox="0 0 300 300">
                        <path d="M5.299,144.645l69.126,25.8l26.756,86.047c1.712,5.511,8.451,7.548,12.924,3.891l38.532-31.412   c4.039-3.291,9.792-3.455,14.013-0.391l69.498,50.457c4.785,3.478,11.564,0.856,12.764-4.926L299.823,29.22   c1.31-6.316-4.896-11.585-10.91-9.259L5.218,129.402C-1.783,132.102-1.722,142.014,5.299,144.645z M96.869,156.711l135.098-83.207   c2.428-1.491,4.926,1.792,2.841,3.726L123.313,180.87c-3.919,3.648-6.447,8.53-7.163,13.829l-3.798,28.146   c-0.503,3.758-5.782,4.131-6.819,0.494l-14.607-51.325C89.253,166.16,91.691,159.907,96.869,156.711z"></path>
                    </svg>
                </a>
            </li>
            <li class="social_item header_social_item">
                <a href="#" rel="nofollow" target="_blank" title="VK">
                    <svg id="vkIcon" viewBox="0 0 363.301 363.301">
                        <path d="M347.506,240.442c-7.91-9.495-16.899-18.005-25.592-26.235c-3.091-2.927-6.287-5.953-9.368-8.962  c-8.845-8.648-9.167-11.897-2.164-21.72c4.845-6.771,9.982-13.551,14.95-20.108c4.506-5.949,9.166-12.101,13.632-18.273l0.917-1.269  c8.536-11.811,17.364-24.024,22.062-38.757c1.22-3.887,2.501-9.607-0.428-14.39c-2.927-4.779-8.605-6.237-12.622-6.918  c-1.987-0.337-3.96-0.383-5.791-0.383l-55.901-0.04l-0.462-0.004c-8.452,0-14.148,3.983-17.412,12.178  c-3.116,7.83-6.539,16.168-10.445,24.096c-7.773,15.787-17.645,33.97-31.93,49.135l-0.604,0.645  c-1.687,1.813-3.598,3.866-4.995,3.866c-0.214,0-0.447-0.041-0.711-0.124c-2.959-1.153-4.945-8.316-4.855-11.648  c0.001-0.046,0.002-0.092,0.002-0.138l-0.039-64.61c0-0.224-0.016-0.446-0.045-0.668c-1.422-10.503-4.572-17.041-16.474-19.372  c-0.316-0.063-0.639-0.094-0.961-0.094h-58.126c-9.47,0-14.688,3.849-19.593,9.61c-1.324,1.54-4.08,4.746-2.714,8.635  c1.386,3.947,5.885,4.791,7.35,5.065c7.272,1.384,11.371,5.832,12.532,13.604c2.027,13.496,2.276,27.901,0.784,45.334  c-0.416,4.845-1.239,8.587-2.595,11.784c-0.315,0.746-1.432,3.181-2.571,3.182c-0.362,0-1.409-0.142-3.316-1.456  c-4.509-3.089-7.808-7.497-11.654-12.942c-13.084-18.491-24.065-38.861-33.575-62.288c-3.527-8.624-10.114-13.452-18.556-13.594  c-9.276-0.141-17.686-0.209-25.707-0.209c-8.764,0-16.889,0.081-24.823,0.246C8.914,83.74,4.216,85.776,1.744,89.676  c-2.476,3.903-2.315,9.03,0.479,15.236c22.366,49.723,42.645,85.876,65.755,117.228c16.193,21.938,32.435,37.123,51.109,47.784  c19.674,11.255,41.722,16.727,67.402,16.727c2.911,0,5.921-0.071,8.956-0.213c14.922-0.727,20.458-6.128,21.158-20.657  c0.333-7.425,1.145-15.212,4.795-21.853c2.304-4.184,4.452-4.184,5.158-4.184c1.36,0,3.046,0.626,4.857,1.799  c3.248,2.12,6.033,4.96,8.316,7.441c2.149,2.357,4.274,4.738,6.401,7.12c4.59,5.141,9.336,10.456,14.294,15.497  c10.852,11.041,22.807,15.897,36.538,14.843h51.252c0.109,0,0.219-0.004,0.328-0.011c5.107-0.337,9.53-3.17,12.135-7.772  c3.227-5.701,3.162-12.974-0.174-19.46C356.718,251.867,351.808,245.601,347.506,240.442z"></path>
                    </svg>
                </a>
            </li>
            <li class="social_item header_social_item">
                <a href="#" rel="nofollow" target="_blank" title="WhatsApp">
                    <svg id="whatsappIcon" viewBox="0 0 326.123 326.123">
                        <path d="M164.251,0C76.444,0,5.008,71.436,5.008,159.242c0,29.993,8.32,59.018,24.113,84.279L3.264,312.618  c-1.373,3.671-0.477,7.805,2.294,10.576c1.91,1.909,4.466,2.929,7.073,2.929c1.176,0,2.362-0.207,3.503-0.635l71.362-26.704  c23.423,12.902,49.854,19.7,76.754,19.7c87.807,0,159.242-71.436,159.242-159.242C323.493,71.436,252.058,0,164.251,0z   M240.984,209.248c-4.447,15.813-21.07,27.288-39.525,27.287c-1.805,0-3.628-0.112-5.391-0.331  c-22.431-3.225-48.683-18.615-70.274-41.221c-22.737-21.715-38.127-47.963-41.17-70.214c-3.08-22.52,6.997-39.314,26.953-44.926  c1.025-0.288,2.109-0.434,3.222-0.434c11.69,0,25.615,16.52,30.452,28.363c3.15,7.713,2.911,13.655-0.69,17.186  c-9.036,8.856-12.404,14.24-12.015,19.205c0.436,5.533,5.586,11.926,14.335,21.098c1.116,1.172,2.61,2.732,4.288,4.417  c1.567,1.561,3.069,3,4.397,4.27c9.767,9.314,16.145,14.362,21.875,14.362c4.765-0.001,9.931-3.378,18.425-12.045  c1.287-1.312,3.66-2.875,7.658-2.875c10.542,0,25.419,10.288,32.7,19.897C240.637,199.109,242.282,204.629,240.984,209.248z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="social_item header_social_item">
                <a href="#" rel="nofollow" target="_blank" title="Skype">
                    <svg id="skypeIcon" viewBox="0 0 293.828 293.828">
                        <path d="M284.642,174.604c1.668-8.685,2.513-17.513,2.513-26.267c0-76.523-62.273-138.779-138.817-138.779  c-6.598,0-13.273,0.478-19.87,1.422C115.764,3.792,101.383,0,86.758,0C39.975,0,1.914,38.066,1.914,84.856  c0,13.689,3.356,27.279,9.721,39.422c-1.388,7.92-2.091,16.004-2.091,24.058c0,76.531,62.263,138.794,138.793,138.794  c7.368,0,14.725-0.578,21.893-1.719c11.426,5.511,24.127,8.416,36.843,8.416c46.782,0,84.842-38.062,84.842-84.847  C291.912,196.992,289.467,185.436,284.642,174.604z M144.059,127.973c1.886,0.611,3.814,1.236,5.779,1.887  c2.589,0.856,5.299,1.696,7.92,2.508c10.849,3.361,22.067,6.837,31.239,13.356c12.093,8.596,18.225,20.765,18.225,36.167  c0,14.151-6.257,26.514-17.619,34.809c-10.153,7.413-24.142,11.331-40.453,11.331c-48.718,0-60.419-28.631-62.845-37.405  c-2.207-7.985,2.477-16.248,10.461-18.455c7.982-2.204,16.247,2.477,18.455,10.461c2.705,9.787,15.071,15.399,33.929,15.399  c8.44,0,28.072-1.572,28.072-16.14c0-10.664-5.698-13.851-28.343-20.868c-2.755-0.854-5.604-1.736-8.467-2.684  c-1.907-0.631-3.777-1.237-5.605-1.83c-11.4-3.696-22.168-7.187-30.633-13.165c-11.199-7.909-16.878-19.123-16.878-33.329  c0-21.975,21.084-44.221,61.38-44.221c34.518,0,50.294,15.104,57.45,27.773c4.074,7.213,1.529,16.363-5.684,20.438  c-7.213,4.074-16.362,1.53-20.438-5.684c-1.75-3.099-7.076-12.527-31.329-12.527c-20.475,0-31.38,8.259-31.38,14.221  C117.296,117.657,119.603,120.044,144.059,127.973z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="social_item header_social_item">
                <a href="#" rel="nofollow" target="_blank" title="Instagram">
                    <svg id="instagramIcon" viewBox="0 0 290 290">
                        <g>
                            <path d="M250.626,0H39.374C17.663,0,0,17.663,0,39.374v211.252C0,272.338,17.663,290,39.374,290h211.252   C272.337,290,290,272.338,290,250.626V39.374C290,17.663,272.337,0,250.626,0z M145,215.846c-35.762,0-64.856-29.094-64.856-64.856   c0-35.761,29.095-64.856,64.856-64.856s64.856,29.095,64.856,64.856C209.856,186.752,180.762,215.846,145,215.846z    M265.447,103.115H206.85C192.058,85.407,169.823,74.122,145,74.122s-47.058,11.286-61.85,28.993H24.553V46.804   c0-14.313,11.645-25.957,25.958-25.957h188.979c14.313,0,25.958,11.644,25.958,25.957V103.115z"/>
                            <path d="M145,109.296c-22.989,0-41.694,18.704-41.694,41.693c0,22.99,18.704,41.693,41.694,41.693s41.694-18.703,41.694-41.693   C186.694,128,167.989,109.296,145,109.296z"/>
                            <path d="M233.488,37.491h-25.093c-5.735,0-10.401,4.667-10.401,10.402v25.093c0,5.735,4.665,10.401,10.401,10.401h25.093   c5.735,0,10.401-4.665,10.401-10.401V47.893C243.889,42.157,239.223,37.491,233.488,37.491z"/>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
        <img src="<?=get_template_directory_uri();?>/assets/img/line.png" alt="" class="header_line">
        <div class="header_mouse__wrapper">
            <a href="#" class="anchor"><img src="<?=get_template_directory_uri();?>/assets/img/icons/mouse.svg" alt="Mouse to down" class="header_mouse"></a>
        </div>
    </header>
    <section class="achievements anchor_section" id="achievements">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">О нас в цифрах</h2>
            </div>
            <div class="achievements-list">
                <div class="row">
                    <div class="col-md-4">
                        <div class="achievements-list_item">
                            <div class="achievements-list_item-num">4+</div>
                            <p class="achievements-list_item-designation">года успешного опыта</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="achievements-list_item">
                            <div class="achievements-list_item-num">100%</div>
                            <p class="achievements-list_item-designation">довольных клиентов</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="achievements-list_item">
                            <div class="achievements-list_item-num">87</div>
                            <p class="achievements-list_item-designation">выполненных проектов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="works anchor_section" id="works">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">лучшие работы</h2>
                <p class="section-description">Самое приятное в работе – получать положительные отзывы клиентов.
                    Здесь представлены несколько наших лучших разработок,
                    посмотрите процесс их создания</p>
            </div>
            <div class="works-list">
                <div class="row">
                    <div class="works-list_item__wrapper">
                        <a href="#">
                            <div class="works-list_item" data-name="Advocat-krd.ru" id="left_work">
                                <img class="work-default" src="https://kwork.ru/pics/t3/21/239064-1.jpg" alt="">
                                <img class="work-opened" src="<?=get_template_directory_uri();?>/assets/img/works/best/1-opened.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="works-list_item__wrapper">
                        <a href="#">
                            <div class="works-list_item" data-name="Arendatoram.com" id="middle_work">
                                <img class="work-default" src="https://i.novostroy.su/u/newbuilding/box/b868520e-8ce0-452a-bc31-2c776507d150.jpg" alt="">
                                <img class="work-opened" src="<?=get_template_directory_uri();?>/assets/img/works/best/2-opened.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="works-list_item__wrapper">
                        <a href="#">
                            <div class="works-list_item" data-name="Copter Force" id="right_work">
                                <img class="work-default" src="http://souo-mos.ru/wp-content/uploads/2017/11/1-4.jpg" alt="">
                                <img class="work-opened" src="<?=get_template_directory_uri();?>/assets/img/works/best/3-opened.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="works-link" href="<?=get_permalink(9);?>"><div class="btn_roundness"><div class="btn works-link-button">Смотреть полное портфолио</div></div></a>
        </div>
    </section>
    <section class="team anchor_section" id="team">
        <div class="container-fluid">
            <div class="section-info d-block d-md-none">
                <h2 class="section-header team-header">Наша команда</h2>
            </div>
            <div class="row">
                <div class="col-xl-5 col-md-6 ml-auto">
                    <div class="team-slider">
                        <div class="team-slider_item">
                            <img src="<?=get_template_directory_uri();?>/assets/img/team/tiger.jpg" title="Alexander" alt="Alexander Front-end dev" class="team-slider_item-image">
                            <div class="team-slider_item-info">
                                <div class="team-slider_item-info__blank">
                                    <h5 class="name">Alexander</h5>
                                    <h5 class="profession"><strong>Front-end developer</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider_item">
                            <img src="<?=get_template_directory_uri();?>/assets/img/team/lynx.jpg" title="Ekaterina" alt="Ekaterina Designer" class="team-slider_item-image">
                            <div class="team-slider_item-info">
                                <div class="team-slider_item-info__blank">
                                    <h5 class="name">Ekaterina</h5>
                                    <h5 class="profession"><strong>Web-designer</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider_item">
                            <img src="<?=get_template_directory_uri();?>/assets/img/team/panda.jpg" title="Sergei" alt="Sergei Back-end dev" class="team-slider_item-image">
                            <div class="team-slider_item-info">
                                <div class="team-slider_item-info__blank">
                                    <h5 class="name">Sergei</h5>
                                    <h5 class="profession"><strong>Back-end developer</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mr-auto">
                    <div class="section-info d-none d-md-block">
                        <h2 class="section-header team-header">Наша команда</h2>
                    </div>
                    <div class="team-desc">
                        <p>LIS Creation с большой ответственностью и
                            профессионализмом подходит к работе над проектами
                            любой сложности.</p>
                        <p>Мы знаем, как важен комплексный подход, поэтому
                            разработали систему «под ключ» - от вашей идеи до
                            продвижения на передовые позиции в интернете.</p>
                        <p>Грамотно созданный сайт можно легко
                            модернизировать и обновлять.
                            Хотите продающий сайт? Теперь вы знаете к кому
                            обращаться!</p>
                    </div>
                    <a class="works-link anchor" href="#callback"><div class="btn_roundness btn_roundness-reverse"><div class="btn btn-reverse team-button">Связаться</div></div></a>
                </div>

            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/section_service', 'main');?>
    <section class="why anchor_section" id="why">
        <div class="container">
            <div class="section-info">
                <h2 class="section-header">почему именно мы?</h2>
            </div>
            <div class="why-offers">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="why-offers_item">
                            <div class="why-offers_item-icon__wrapper"><img src="<?=get_template_directory_uri();?>/assets/img/why/brainstorming.svg" alt="" class="why-offers_item-icon"></div>
                            <p class="why-offers_item-text">Для нас не существует трудностей, есть только интересные задачи</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="why-offers_item">
                            <div class="why-offers_item-icon__wrapper"><img src="<?=get_template_directory_uri();?>/assets/img/why/target.svg" alt="" class="why-offers_item-icon"></div>
                            <p class="why-offers_item-text">К каждому проекту и к каждой задаче у нас индивидуальный, эффективный подход</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="why-offers_item">
                            <div class="why-offers_item-icon__wrapper"><img src="<?=get_template_directory_uri();?>/assets/img/why/html.svg" alt="" class="why-offers_item-icon"></div>
                            <p class="why-offers_item-text">Мы знаем как создать уникальный и продающий сайт для любой отрасли</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="why-offers_item">
                            <div class="why-offers_item-icon__wrapper"><img src="<?=get_template_directory_uri();?>/assets/img/why/quality.svg" alt="" class="why-offers_item-icon"></div>
                            <p class="why-offers_item-text">Нам нравится создавать то, что имеет ценность для других людей</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/section_callback', 'main');?>
<?php wp_footer().get_footer();?>