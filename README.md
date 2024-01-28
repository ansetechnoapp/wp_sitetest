# wp_sitetest


Dans la base de donnée :
- vérifier les liens siteurl et home dans la table wp_options
- vérifier les liens user_url dans la table wp_users

// ** Réglages MySQL - sur hébergeur hostinger nom du site https://txbest.online/sitetest/ ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_sitetest' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );