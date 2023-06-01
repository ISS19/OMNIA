<?php
$host = "localhost"; // Nom d'hôte de la base de données
$dbname = "charte"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données

// Connexion à la base de données en utilisant PDO
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les erreurs PDO
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    die();
}
?>