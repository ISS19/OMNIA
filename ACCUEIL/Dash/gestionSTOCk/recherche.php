<?php
require_once "database.php"; // Inclure le fichier de connexion à la base de données

// Vérifier si le formulaire de recherche a été soumis
if (isset($_POST["srch"])) {
    // Récupérer les données du formulaire
    @$recherche = $_POST["recherche"];

    // Requête pour rechercher les stocks de vin correspondant à la recherche
    $sql = "SELECT * FROM stock_vin WHERE nom_produit LIKE :recherche OR point_de_vente LIKE :recherche ORDER BY nom_produit ASC";

    // Préparation de la requête
    $stmt = $db->prepare($sql);

    // Liaison des paramètres de la requête
    $recherche_param = "%$recherche%";
    $stmt->bindParam(":recherche", $recherche_param);

    // Exécution de la requête
    try {
        $stmt->execute();
        $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage des résultats de la recherche
        foreach ($resultats as $resultat) {
            echo $resultat["nom_produit"] . " => ";
            echo "Quantité en stock: " . $resultat["quantite"];
        }
    } catch(PDOException $e) {
        echo "Erreur lors de la recherche de stocks de vin: " . $e->getMessage();
    }
}
?>