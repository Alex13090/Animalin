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
define( 'DB_NAME', 'wordpressV2' );

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
define( 'AUTH_KEY',         ']y +)co*(:ij7-pFR2.LAGOXh#iPY`st8ye>$;a.QL!b38[vyo_u&$Uzg,`Q0|T7' );
define( 'SECURE_AUTH_KEY',  '71LOV0+ 4z/+6v;Q5C7{*1yM8^NbFI5L#yp]hde-k>ZJuIlamNn(W/#Gjm.<OQWx' );
define( 'LOGGED_IN_KEY',    'Ka}u=$1hJgusKAk8`u_9Kmv.oGoS|r ?p_(_E|&eHGNjx6j;Lv3j]e><`Lz6=e-t' );
define( 'NONCE_KEY',        '=|UXA.j+H(QCY(%VuhW9r[G):Qh ~!(kV}g~lsGB~ s*>n17(@(Tj_sq5 NJ<$*r' );
define( 'AUTH_SALT',        '}UdaH5Deh8f}A*B4 ; tQRNmPUyTUpy+iS;M6z1:W3BAv%u+w;]QP0Kn3o1lJrpP' );
define( 'SECURE_AUTH_SALT', '7:`t} x4!IMtX3<uQO^K5XO+-WsSpw+z,Xpe46Cyq:vvrSaKK%c_tP~}[_3BI:0r' );
define( 'LOGGED_IN_SALT',   'Sa<PLf^ASko]}WHHp2.D*j*3_&7fY%6><1$e{Vl+sxv~XM2!GEPlQi%KiWoRL+CX' );
define( 'NONCE_SALT',       '8;)W+FNWrl:g?Z6?<71*j0;LMateqQOsz:!Z3_azQNq`LX@jiVI^<3@~0QCs`f@*' );
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
