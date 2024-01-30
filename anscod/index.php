<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Validation</title>
</head>
<body>
    <h2>Formulaire de Validation</h2>
    
    <?php
    // Afficher des messages d'erreur ou de succès
    if (isset($message)) {
        echo "<p>$message</p>";
    }

    // Inclure le fichier de configuration
    require_once 'config.php';

    // Inclure le fichier de connexion à la base de données
    require_once 'db_connection.php';

    // Connexion à la base de données
    $connexion = connect_db();

    // Récupérer les URLs à partir de la configuration
    $url_local = $config_urls['url_local'];
    $url_en_ligne = $config_urls['url_en_ligne'];

    // Requête SQL pour récupérer l'URL de wp_users
    $resultat = $connexion->query("SELECT `user_url` FROM `wp_users` WHERE `user_url` = '$url_local'");

    // Vérifier si l'URL existe dans la base de données
    if ($resultat->num_rows > 0) {
        $url_default = $url_en_ligne;
    } else {
        $url_default = $url_local;
    }
    ?>

    <H1> Ce liens n'est pas dans la base de donnée : <?php echo $url_default; ?></H1>
    <form action="traitement.php" method="post">
        <label for="nouvelle_url">Nouvelle URL :</label>
        <span><?php echo $url_default; ?></span>
        <input type="hidden" name="nouvelle_url" id="nouvelle_url" value="<?php echo $url_default; ?>" required>
        <input type="submit" value="Valider">
    </form>

    <?php
    // Fermer la connexion lorsque vous avez terminé
    $connexion->close();
    ?>
</body>
</html>
