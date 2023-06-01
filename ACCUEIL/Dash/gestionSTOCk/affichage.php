<?php
require_once "database.php"; // Inclure le fichier de connexion à la base de données

// Requête pour récupérer tous les stocks de vin
$sql = "SELECT * FROM stock_vin ORDER BY nom_produit ASC";

// Exécution de la requête
try {
    $stmt = $db->query($sql);
    $stocks_vin = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Erreur lors de la récupération des stocks de vin: " . $e->getMessage();
}

// Affichage des stocks de vin
foreach ($stocks_vin as $stock_vin) {
    echo "Nom du produit: " . $stock_vin["nom_produit"] . " - ";
    echo "Quantité en stock: " . $stock_vin["quantite"] . " - ";
    echo "Prix: " . $stock_vin["prix"] . " - ";
   
    echo "Point de vente: " . $stock_vin["point_de_vente"] . "<br><br>";    
}
?>