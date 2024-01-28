<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_site1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'R>swy~f_G^liI{f)~K=J5`L%V1dk^~wpz~6uyg.gno#B5*6K{Wzq9%3oV+illBW0' );
define( 'SECURE_AUTH_KEY',  ',jl-zDQ~gA]C7{L`5,_?sko<ibR#h_k&W,wl.qz p%7|]qy5e=rt)|nx{Gh{h+fG' );
define( 'LOGGED_IN_KEY',    'w5Quk|Lm5jXuCi@iM>?g20~(F>B:6vDcBt@z[`(`UobKWt&LXa?6]6hm]M40xyVQ' );
define( 'NONCE_KEY',        ':4p;0.?*po]Mu3c6r6!1 <G;a>[{]Kc_w@Gi5wJy;S;.LI@H6>QMCc^$V XsG0&p' );
define( 'AUTH_SALT',        'Y-k~U1P^0>v?O5ZRdBpCO]<ju+V2pZyNpPaF!6bP~N0CUy!+Y]=P,8-a ~~S^~vu' );
define( 'SECURE_AUTH_SALT', ']-]*%ui=!w|Nv~Bd_m!|(gCbkT%JdxQ=VO2+~@-Z:pS1,d<)-j3k[#pMji`KZ!@;' );
define( 'LOGGED_IN_SALT',   '9+aZ8o6U3kf]H~ :=&9sZeZW_fX9(($CM)&m}:VgkOXwK{SXn)9Gkxt5TO+|[t:2' );
define( 'NONCE_SALT',       'CnNS)@]PHWiHb?S.c ]<(;sT^iS614S.3NLU2mJJb%?-{m]CEjz8KIH,E=m&l`F&' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
