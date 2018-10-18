<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lis-creation');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '05x22003l');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '={1w#Y3.R7+5C+?unU6wR&-0!+VBBQ<iVe#O`.9HUMI!dcN1NROOEXm#$1k2U*wO');
define('SECURE_AUTH_KEY',  'd0pLG4o7JqWxH0JPh`Q0`05q&h]:cI)6t0.nZ5kvg/W0pPG<85>hhlOeV87` I$~');
define('LOGGED_IN_KEY',    'Xz`h2m9/&jQ>t>S]tezI[czT2lgVm6%ch9g4@*H>EBOodz2K,4eVOy%i.,t91qxB');
define('NONCE_KEY',        'Hp>{ArcKao6mQv~m 8kL{;*$s6/!_|3G<Y%!:;X4+y<7<_fb9P}du9USP4>}y54@');
define('AUTH_SALT',        ';*pY[F0 +ZT)|;DKASAt$7])o/2TfW%s+.+OJ?fT0, 7uhkl?A-s8ZEI)xLfz:0B');
define('SECURE_AUTH_SALT', '[N]hc*n>_2,t_`w^X-qOF$MN)bXxy}p#5+lcOK<i$Ubg/7l!Bj^l&EI,(Ys,?UP:');
define('LOGGED_IN_SALT',   'W.Dv6q#nH`OkG{|s+24vK@)R?HuXbPgI,fN4Us~ta1%F`:acw4{%v!$[4ANSDj*!');
define('NONCE_SALT',       'jKqU.Y%4hc 5*DO]f%Sk5)DqJeVa#l>.E(*?:ks;4Ba!,DJ`e`imJZ!w[,U`MXG?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
