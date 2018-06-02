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
define('DB_NAME', 'wp-extended');

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
define('AUTH_KEY',         'N?(XQG?,i]&Uo4irM-6C.tPoVMd~VM#lOBcQc. *@f/M2,<p[X~fATggT!`o#@8_');
define('SECURE_AUTH_KEY',  '>O3L5sklP6.Yh5+:6#.VgJj%DBVo@XaF.u56}ZS!Yx5]>w;yrtpMgI3A+jo{rZkM');
define('LOGGED_IN_KEY',    '71edbhf(T>=_R0D9xi&}J$5,sy,su p#bEuhn63_k6FlzgMqzao+rWO/pC]hcd}g');
define('NONCE_KEY',        '.VCtl663+xe!tMf%1IBU%.~T9-)ZW.g,X3cDd9/ALghc@;gP0!vnj95gL$KUUkLa');
define('AUTH_SALT',        '6_&mat @Qs]>Ju <?Y(AKbY&>RCz]]CG,,]ThmzHz]gGfapo_oe}Glvzs$yPOA,5');
define('SECURE_AUTH_SALT', 'DQ`GT#^VJ+UX*Sxj`~t:*CV#}$XnKaFZF@sqVs>p)UR`2&6GY}u-MM[0HaJr9LD%');
define('LOGGED_IN_SALT',   'YX[iUL4uC4H665x#C{[yei^o::&K)[![_HBK`v8#:E|,y__G99!Se|?X5TtJ=AWB');
define('NONCE_SALT',       'TkiW$XzQ011n] 5R&)8#uE!y60>Jo}LK,+EhX/@45@pWeyPRiaoSrJVP4kMxMY0=');

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
