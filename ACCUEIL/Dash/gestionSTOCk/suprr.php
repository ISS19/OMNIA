<?php
require_once "database.php"; // Inclure le fichier de connexion à la base de données

// Vérifier si l'ID du stock de vin a été passé en paramètre dans l'URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Requête pour supprimer le stock de vin correspondant à l'ID
    $sql = "DELETE FROM stock_vin WHERE id=:id";

    // Préparation de la requête
    $stmt = $db->prepare($sql);

    // Liaison des paramètres de la requête
    $stmt->bindParam(":id", $id);

    // Exécution de la requête
    try {
        $stmt->execute();
        echo "Le stock de vin a été supprimé avec succès.";
    } catch(PDOException $e) {
        echo "Erreur lors de la suppression du stock de vin: " . $e->getMessage();
    }
}
?>