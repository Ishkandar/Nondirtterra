<?php
/** 
 * Les configuracions bàsiques del WordPress.
 *
 * Aquest fitxer té les següents configuracions: configuració de MySQL, prefix de taules,
 * claus secretes, idioma del WordPress i ABSPATH. Trobaràs més informació 
 * al Còdex (en anglès): {@link http://codex.wordpress.org/Editing_wp-config.php Editant
 * el wp-config.php}. Les dades per a configurar MySQL les pots obtenir del
 * teu proveïdor d'hostatjament de web.
 *
 * Aquest fitxer és usat per l'script de creació de wp-config.php durant la
 * instal·lació. No cal que usis el web, pots simplement copiar aquest fitxer
 * sota el nom "wp-config.php" i omplir-lo amb els teus valors.
 *
 * @package WordPress
 */

// ** Configuració de MySQL - Pots obtenir aquestes informacions del teu proveïdor de web ** //
/** El nom de la base de dades per al WordPress */
define('DB_NAME', 'nondirtterra');

/** El teu nom d'usuari a MySQL */
define('DB_USER', 'root');

/** La teva contrasenya a MySQL */
define('DB_PASSWORD', '');

/** Nom del host de MySQL */
define('DB_HOST', 'localhost');

/** Joc de caràcters usat en crear taules a la base de dades. */
define('DB_CHARSET', 'utf8mb4');

/** Tipus d'ordenació en la base de dades. No ho canvïis si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvia-les per frases úniques diferents!
 * Les pots generar usant el {@link http://api.wordpress.org/secret-key/1.1/salt/ servei de claus secretes de WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '$4+%*4Roq3ZYL{s/OV F8QC~K=lLY0PY6[/qrQ64ym{j4)3@ts,UI{`w4UAE3IBN');
define('SECURE_AUTH_KEY', 'O*nO]Z{H#Vi-n7^9v:XpBYO0iCKf/s0J{dI&GDwYBlUM-bN/m%ioZ&()9dOQguX,');
define('LOGGED_IN_KEY', '%<{#*fjv]$f3YMD+KaY=8Yb|UIm4OLk-lZDYgIrNT[@@R$YN=XNuL {~;U5~vTL-');
define('NONCE_KEY', 'YEUMcb7,BwCUV*?u]!urgc)Q#J_mvcX8G`~QAz)w<L3r2;)77[M&o5_L60{Ul;:(');
define('AUTH_SALT',        '+DCCR/<|A3cC$lIu#ukCI~nY$3g&OW| V[14m^I:?u,Li|3$FN$BRtkC-E~xEn|I');
define('SECURE_AUTH_SALT', 'My]%n+O|&Ug7%<&^O=?qXm2ED!e;15UDZHzB.mG7jv87T]J!ox8XG9/<<<]/qj]9');
define('LOGGED_IN_SALT',   'rOrP  <B$SM$/>e1.GWrUE|X*EQV52qoouHoKDZ2%mTc,EkyqST&TL%dl0K09|VU');
define('NONCE_SALT',       'e-&u?dj,,O-22e/%(8G&u>}4HL+Dco}#>n%T6MmavS2m 1xE>w}0K_J5V8]13B,e');
/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Pots tenir múltiples instal·lacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix  = 'wp_';


/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 *
 * Per informació sobre altres constants que es poden utilitzar per depurar,
 * visiteu el còdex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Això és tot, prou d'editar - que bloguis de gust!

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');
