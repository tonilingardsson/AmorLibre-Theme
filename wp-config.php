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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'UW|@~,6>_U,!n`6Mq*hvg+E!|.wYwJ!lBB@*5}whh^*zN*)LoW*VrLf$[?2z!#ih');
define('SECURE_AUTH_KEY', 'asZ[;tC>%W4zFJqF_h[U_>Inq6[zUiw~gHv,2>p3XD`_$-wWjZ]j*`L8RUaa*@RD');
define('LOGGED_IN_KEY', 'fJ,M ^wFc@EA75L;$#yAgByBCv-gR17lvg.jjNE%L^39Hmm+](QLi.rwt5/]Y,fq');
define('NONCE_KEY', 'ux%u+PQL&^D%^/qB},5Lyf8St1DT&F*J8it^gZc7&5K7DC,0%0pn/T5u#MxR2l,,');
define('AUTH_SALT', 'at}m&*S=D>l6l|R?Mklf. ;!^7RvvE a$}8eAbpwpxB!oD*`$UZNC7^IOy)VRgDM');
define('SECURE_AUTH_SALT', 'Z9Gayp2-fU=.-Cqo^*PDEu3~fQ=5-v7ym<{$9$xcqL?)z8i7j7PTqlZ`=zdYrwzd');
define('LOGGED_IN_SALT', '31(@Iq;CUBrti{@1s7,B1DTNAWklF`:xiWl./vHk^Y2~n,Pr@Cs+8<nRXKWoUbu<');
define('NONCE_SALT', '}UrMz<+9#H3eucKD55 &3+`[a)&lzpJ2}]-Rce;N<J!~3lT)ckh?-#~6p;[Ia~Xk');

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

