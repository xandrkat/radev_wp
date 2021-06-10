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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpxandr' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kW4xC{XM>*K_o!hJ.&oY7/jNnj[MN%;oXdtWiG^8uz9VJbcC_]/i)3)J,RGcT6t_' );
define( 'SECURE_AUTH_KEY',  '<Yt~ta])b@rTv(iImRpndO|n8-,hy$!7If6dOQJzX{05Fq;(ViPChnJ?rNo&F~U0' );
define( 'LOGGED_IN_KEY',    'iV0h0K+US%>-h4=JV%MqaGOfyHNrrd&iS?lyP5{-9SJjU&JQx55x&}M4wW/.{eYO' );
define( 'NONCE_KEY',        ')f#c+NLL^YidpZ[2f,raRq)cE%7Ka,Vb,W-jV__Y<+.7QxfW2K=W;k#Bs~-`Xe&u' );
define( 'AUTH_SALT',        'HF%(ROEX:VqPwQz~_kV5/ 7!oho4W*f6+yJvC{*~EfhT`kP.u]NURT*|5/LR4amM' );
define( 'SECURE_AUTH_SALT', 'HIv}!r+`WLG@,6U<!}#rH:4h2`jTy;OP,fZ7xAq<`%s1h&CA%~5IKf}|]M<oycC4' );
define( 'LOGGED_IN_SALT',   'U63&d3ka5Bv@R]8Ay#%1<a6YzdNKn[Y0&@C`4AHDn*mg-=Z_(Lv:Pl{g[kFNtc_.' );
define( 'NONCE_SALT',       'h[utB[?6_Y@uaGmORp{kC[Euun+6t#q4o,/gk.GEV9a.T/mH-}SudRQICcIMFdHo' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
