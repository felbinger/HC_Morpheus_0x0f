<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch diese Datei nach "wp-config.php" kopieren, alle fehlenden Werte
 * ergänzen und die Installation anschließend starten.
 *
 * @package WordPress
 */

// ** MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. ** //
/** Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', '0x0f');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '0RQ7wl51Semdbo7UhoV2');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'hc-db');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8mb4');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K#4Q#6Wr3(X,oLB9*f/|#H:tOL[iDsDuor&M&}9Y[sQOz5482J,%f<4:&:|I6;J<');
define('SECURE_AUTH_KEY',  '`9TSdcG-2=moj?P59YpW,7q6Go;K>GIu_jY:?_Mryb%YR=8!^#2uo6eKjdy1,C A');
define('LOGGED_IN_KEY',    'b`:E3wEYJy k%VP_q(D80CHst6[qv0tVL&}|+Avb&7-DdmN/D~L6Z_&22(}RNF),');
define('NONCE_KEY',        '@SbP.|k nJlMOa],&r 5MMQ|atEFv,$LxqLqFx}*L@p>$f-jRM+GqEy,_irst|f9');
define('AUTH_SALT',        'ZNudJ79vTu 79OrA}P{UeX*)xi`J}Jf0_LOcS(c,<|<|o|j^]EIkUf#Cu}Ob|,tE');
define('SECURE_AUTH_SALT', 'fcC<PI~$=CmgNA`BiO-zC+_`H;s$U,?TDfp^cYT+1=Y+*a,~1/g2+<Q+_Rv5w/f}');
define('LOGGED_IN_SALT',   'r(Zq3=4Z!(MsG@-[?-Z=$X}jy`nBS+1Bt1Rzj+**RT-A`U0(Pfw_D=wWKb3|L+Wm');
define('NONCE_SALT',       'D3]xk(T.<+PnkgLmANg)6&nwa *za$>B<5V3. +db64}O*lXv(wb;M:K^~#*kb[)');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WPSITEURL','http://185.244.192.170:20016');
define('WPHOME','http://185.244.192.170:20016');
