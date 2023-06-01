<?php
require_once "database.php"; // Inclure le fichier de connexion à la base de données

// Vérifier si le formulaire a été soumis
if (isset($_POST["btn1"])) {
    // Récupérer les données du formulaire
    @$nom_produit = $_POST["nom_produit"];
    @$quantite = $_POST["quantite"];
    @$prix = $_POST["prix"];
    @$point_de_vente = $_POST["point_de_vente"];

    // Requête pour ajouter le stock de vin
    $sql = "INSERT INTO stock_vin (nom_produit, quantite, prix, point_de_vente) VALUES (:nom_produit, :quantite, :prix, :point_de_vente)";

    // Préparation de la requête
    $stmt = $db->prepare($sql);

    // Liaison des paramètres de la requête
    $stmt->bindParam(":nom_produit", $nom_produit);
    $stmt->bindParam(":quantite", $quantite);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":point_de_vente", $point_de_vente);

    // Exécution de la requête
    try {
        $stmt->execute();
        //echo "Le stock de vin a été ajouté avec succès.";
    } catch(PDOException $e) {
        //echo "Erreur lors de l'ajout du stock de vin: " . $e->getMessage();
    }
}
?>
