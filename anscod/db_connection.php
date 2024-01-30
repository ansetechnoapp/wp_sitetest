<?php
require_once 'db_config.php';

// Fonction de connexion à la base de données
function connect_db() {
    global $db_config;

    $connexion = new mysqli(
        $db_config['host'],
        $db_config['utilisateur'],
        $db_config['mot_de_passe'],
        $db_config['base_de_donnees']
    );

    if ($connexion->connect_error) {
        die("Échec de la connexion à la base de données : " . $connexion->connect_error);
    }

    return $connexion;
}
?>
