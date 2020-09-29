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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U1VP,*N?^*he%m4Nh{c5O +o,sS(73_<l}CnZ?6t~|x;P3kteSj+Q*q;3zABl=s^' );
define( 'SECURE_AUTH_KEY',  'vSi<6;^]&wCFgFW<$Qv@|+7N~&;Qw|vPp9Gg{^kS*yH7Qh,#FR-BnL=9P0O3<}n:' );
define( 'LOGGED_IN_KEY',    '?&5xtZSz%aKCEqjcJ7y0RJ[Hjret.3d[Si =iTiu,<sg%/ ^>j5,6ZZ(^otJ`/>~' );
define( 'NONCE_KEY',        'u0t$x<,5vN-IKqvsMpF18;q&nuxh.^j/b.lN:%lFMJ%Ark+;`5tl-U,GYSEa)#3<' );
define( 'AUTH_SALT',        'w<M_K(}f,WsIXl[?7chI^0@&),c0d2{Qk=$H]bQ6=u<,>5Y5$2{L(UnS3=i6(@,*' );
define( 'SECURE_AUTH_SALT', ',hWMam0;/N<@-1J_FNV9UBVrK,3A7UGP/-uNr/%rovB@ix.e`^/$lJ%^LrW7m/a>' );
define( 'LOGGED_IN_SALT',   '-Jm2>a{7yZxDkst5hPi; ,ot&+W3R x3(d|*aoo{M3UI3tj[GF|RQjeF5- iJFcC' );
define( 'NONCE_SALT',       '!]e]4WabmI{^dyCr)PQFYd?lsv;u5oNL?XMycMF.no5s(iXy(ADD@s0j`P^R?2o3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
