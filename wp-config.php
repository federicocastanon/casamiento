<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpressdb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Kpjws&G$8-*V_Bma4nvwfFd)L$~$i3E~|JpkMgkPsS:gAPPeBl_4s[xJee<HXmRI');
define('SECURE_AUTH_KEY', 'oz$./^4|Qi$@Q[K+u 9?|kW$!f+Gb,d}Vt{Qu}RoCDKZsI~iQ+9~v81NfbziyJ0y');
define('LOGGED_IN_KEY', 'dmaU,7GDvWOsjF>R^~>X&u9hRmyKeNvaovr^82O#_.j!Z-,um,OJ!<;;C5Nbn,GM');
define('NONCE_KEY', '$`WdoH.TTLUp~)u4Nt:rtJ}^K$i8ptx|a0sE#;1/Vc1g<v0&ZB=,f`4v&vEd:u(=');
define('AUTH_SALT', 'G+e@>JT#!h6Ec[l8B/gkvoo.4^qJw-5G zC@T=X7V<g-)s2O)T4y1WN|vH|^wV:*');
define('SECURE_AUTH_SALT', ',Y^4$Jn$ET@?@b1DrK2w_jvD[S|0?RT91+Q/[g_hBrF!4-+d1@)cB(EW6VB0z6@2');
define('LOGGED_IN_SALT', '<Rv(2w8M{gq]vFp e,:ms=&O:NTJjgaJ.{%i}xz6&p2qd9oW}i]I<ANMl{ICtrXQ');
define('NONCE_SALT', 'Tk@dbL.YB6`H[0ORirA9KZ!godyiI, :baM4@s qTEUzZLd%A]H+5,smsu*lC[iQ');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cas_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

