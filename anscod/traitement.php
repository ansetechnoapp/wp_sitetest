<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la nouvelle URL soumise
    $nouvelle_url = isset($_POST['nouvelle_url']) ? $_POST['nouvelle_url'] : '';

    // Vérifier si l'URL est vide
    if (empty($nouvelle_url)) {
        $message = "Veuillez entrer une nouvelle URL.";
    } else {
        // Inclure le fichier de connexion à la base de données
        require_once 'db_connection.php';

        // Connexion à la base de données
        $connexion = connect_db();

        // Requêtes de mise à jour pour la table wp_options
        $requete_option_1 = "UPDATE `wp_options` SET `option_value` = '$nouvelle_url' WHERE `wp_options`.`option_id` = 1";
        $requete_option_2 = "UPDATE `wp_options` SET `option_value` = '$nouvelle_url' WHERE `wp_options`.`option_id` = 2";

        // Exécuter les requêtes
        if ($connexion->query($requete_option_1) === TRUE && $connexion->query($requete_option_2) === TRUE) {
            $message = "Mise à jour réussie pour les options.";
        } else {
            $message = "Erreur lors de la mise à jour des options : " . $connexion->error;
        }

        // Requête de mise à jour pour la table wp_users
        $requete_user = "UPDATE `wp_users` SET `user_url` = '$nouvelle_url' WHERE `wp_users`.`ID` = 1";

        // Exécuter la requête
        if ($connexion->query($requete_user) === TRUE) {
            $message .= " Mise à jour réussie pour la table wp_users.";
        } else {
            $message .= " Erreur lors de la mise à jour de la table wp_users : " . $connexion->error;
        }

        // Fermer la connexion
        $connexion->close();
        echo "modification réussir";
    }
}
?>
<?php
if (isset($_SERVER['HTTP_REFERER'])) {
    $previousPage = $_SERVER['HTTP_REFERER'];
} else {
    $previousPage = '/';
}

echo '<form method="post" action="' . htmlspecialchars($previousPage, ENT_QUOTES, 'UTF-8') . '">';
echo '<button type="submit">Revenir à la page précédente</button>';
echo '</form>';
?>