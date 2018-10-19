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
define('DB_NAME', 'wordpress_mv');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'TFA6Tsx<irjzTt<RJ:5vtXb8T.(U Bt?!4iCp(vnz,97U81!F^Yp@j?1z~C2JYQG');
define('SECURE_AUTH_KEY',  'O*xQ.,Lvr0U/|FZO}2iC&`|}m.cU$yklK39r|Hg#j&6Zn{`AAn.!7Io)M||9&nfj');
define('LOGGED_IN_KEY',    'SioOIjo=g>LYt`We;urTWM%QIE0rN:YnRtk]jPeezTB>6]J4PJ@<16%k8dE7N;9c');
define('NONCE_KEY',        '7Y{-WY`syDaTk-[n9UdJv}wK,Rcqk&uS9Y;&Q)}$_IfOmp?_=e-zh5jCqK6OA:HF');
define('AUTH_SALT',        'Ep<7BG._kyyg49t^@41SE!?>%Gpfo]gd0c&SSEEWs`t5gB^]F%X@-LV%~Q p:n]o');
define('SECURE_AUTH_SALT', 'sYb(fbCl=K>^+n^}GQ.H+i.doZDLc5kw)HjB7Nkcz4;}!B`Z+=oMD6>aBu$=bQpi');
define('LOGGED_IN_SALT',   'wb^|Tzn2<,?m.7=$KN,n.}x{R<tAnycod<yNy@%dqd^Enq@n]hGY%To`7L[3,YP=');
define('NONCE_SALT',       'OOrrSylieH6p/8a;z[(G*Gf->}RzCxL3YPs)d98.i-6Xa(cb&t3|=~Q{YIf3:h_<');

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
