<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/home-service/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'home-service' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J{UC?C&U2W`)=]gLpQbzAD<~L_fZP1.3(?j+X5Tsa0?P!k.45:<9+3]EZNo,@:W)' );
define( 'SECURE_AUTH_KEY',  'WdM#mY><t$;OT*wq1bGVs=>#9co*(D`WD=mfZpX0yzWiZvBtxySh~7hR>%10-u/7' );
define( 'LOGGED_IN_KEY',    '~j&r@QD*.U]EX,x 1Jc,^;y(H6d}q79O6 *1:gxv#.@s/DIts1&VJyDX5n.%X^oz' );
define( 'NONCE_KEY',        '6+]*WZkRb~@>0; 99HOx!bfy$.jZ~@bSic[]s:}[]p;;NI5>iXjW)I=d}9LZNl.=' );
define( 'AUTH_SALT',        'Iu*[}X^Ox0sP/WWUoUwbxKo@=&=,p@l=A5{ y$pD>]9k>c_XKfHV=R-)4t;;W~B!' );
define( 'SECURE_AUTH_SALT', 'TI|J+m7[vyLzpd2:jBQ`xdC`<Hs9]>>vGjA97)fE[]z{>R:d`uu_Q@!D]m-A6vaA' );
define( 'LOGGED_IN_SALT',   'SR&F!9X[>xA{Zb1J)N%Bf31xip/a6BlG8$5Vofz@x[op.u_g-P(~z[t*h@:[2q1a' );
define( 'NONCE_SALT',       '?!kn/Mi/khs1!/Ig[6.9+,A_d=Ch|i%AB_%aJT8^r<1*9fOt6gI-05 u6xDnXUo@' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
