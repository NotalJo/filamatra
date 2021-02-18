<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'filamatra' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cgmwDEQor[:<{=!woV<$%uQ5@<9UV:zEAL#t_8cp1<1M>T:G|`Twa20Q86!at(E ' );
define( 'SECURE_AUTH_KEY',  '!U//Fsq7m1@m{1c]TH>q7~nO?zw|3~(.>8(%^=a}.mz?~3Ko!HX;uDj^nzr}7PY0' );
define( 'LOGGED_IN_KEY',    '>B<0P&-p9C,$0`tlkl[-TMUG3Aa8zJ$@Ce^>x}Zzh^$zUjLW[_`j)W)Y#X.=0<4X' );
define( 'NONCE_KEY',        '#+!-cOHHtW6R%,-XjlGKuh&C#I|@=$5V!kVN5PJ51yJx2+sy?Y2J~2X!3A|7`8]a' );
define( 'AUTH_SALT',        'X]T5qQ`M8QkT,k3JdT{fc-NQ-RZ&M10.xyDOvr1YCx0 #k[BS7eolEP4IGEy`^xA' );
define( 'SECURE_AUTH_SALT', 'zxBW}}h#+#A|683Oo0i)KA>2Fa>j7=A6[k9?pZ{u`cHWNS]yvVeb)dK,rD#+wx;*' );
define( 'LOGGED_IN_SALT',   '2HHDyw0VcN/1-!LNIMNG^a=ecdC!-B|yy^}9mV%3O:^D1.xvc}R;@h6ut:6u@g1o' );
define( 'NONCE_SALT',       'OBmn5~Deq3]? w}K3Oe~$=q#YU@fz7D8bG6%z8ScKQi#@gE(`.3)&F4&#u?o^d*o' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
