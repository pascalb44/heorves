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
define( 'DB_NAME', "heorvezheorvez" );


/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "heorvezheorvez" );


/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "Yy57ZTUMGPm3ZXf" );


/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "heorvezheorvez.mysql.db" );


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
define( 'AUTH_KEY',         'htlvr;h%WhVCP88#eWD}+^Bg)1.V.UN~v}CokD4nb|8IFtaUMSyHa]>E6eiH45tO' );

define( 'SECURE_AUTH_KEY',  '7{_4{pnBU^q7ceGh_rT,lH[@Gcz9v<^)UuZMU*g?oLH4Wr0`FR]Q.1Ua@GI}qK;I' );

define( 'LOGGED_IN_KEY',    'wQCrLd13XRX;IBraXQ^c&C:!p|) rEmZV(cgdybyWuu;QrPmg)gn/#W^dCfM[Igu' );

define( 'NONCE_KEY',        'N%M&3(*uN$us>zGPzc&~md0u3soU8[zg%EG!;(0F#UMlF<qc$#ey2:@`,O[Au8bK' );

define( 'AUTH_SALT',        '5=3:{1L5COJa]nhyQyv0%cSjUD6umA]JxTbn49j Ib:B+t[$qu|6gfUnZAQrwbnL' );

define( 'SECURE_AUTH_SALT', '!@oX%g_(x_)_bT=1q5u^ngDno<Ad?`tOw<6i0RrU>,.u5k%T@sjnJkdMV5RXx*Vq' );

define( 'LOGGED_IN_SALT',   'WLGnN;@/fBYHg 4xHWdLD(2L(YUA,*6~rf@$k/N!nMu#*v Qk_e*/S[X[5sw12WL' );

define( 'NONCE_SALT',       'dtv#:,Mr62`0:H=R~RS`dT/N_hkK/@ QqM/xR5zo{0,f!Y c1]uw.H<xF!kW?QLY' );

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
