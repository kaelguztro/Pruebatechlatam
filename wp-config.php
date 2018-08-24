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
define('DB_NAME', 'techlatam');

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
define('AUTH_KEY', '#=R?WI`>hbk?M9wG0 =-MPVTvWTm*p~eu=yn^l7y6Zn4R}OYcmU),jy$j 3_oCZy');
define('SECURE_AUTH_KEY', '7V30<F63T@OMs^m/O7zmchoAKn})hG]pm|OlEb$A{@5bldDO5m9H]b_o9|q/mZDz');
define('LOGGED_IN_KEY', '~8?d TXA%rf)B.{lM(bE55&?Rh~g#%g)V4c,#MMzxW!kYEQ>,R>aWhjW v#=~3tZ');
define('NONCE_KEY', 'a.wP64*U=xAZ$):M#WufXR[.?ZI[?TzLg~J_H}D-~,HnFnJ7[(&ej`Kh?bLEkr.:');
define('AUTH_SALT', '^`+9*~_IBg?J8@#]~l2.v/@FN9ZE+KyjSZxJHGT}tKW: B5kI>8N4sAb?OP=%5e0');
define('SECURE_AUTH_SALT', '+(=G3w4$wBs}CHXX%CwH88e2.;72`o8gi}eNkXm7+spovD]k@>^`gBS/z~3@6fC7');
define('LOGGED_IN_SALT', ';S{r`E>I:jPR7XBvgj0UhwnP?N{yzl B-bxXtV%wofB?;|p./1w]65u.~22I6pFy');
define('NONCE_SALT', 'NP<I^cqw3bc5)+ER| YF*j!(ju2+Ln4Rg/RrGWF+u<f  _4-s@&xvf@f@ 6m;OGU');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

