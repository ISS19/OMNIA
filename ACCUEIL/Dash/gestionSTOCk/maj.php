<?php
require_once "database.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    @$id = $_POST["id"];
    @$nom_produit = $_POST["nom_produit"];
    @$quantite = $_POST["quantite"];
    @$prix = $_POST["prix"];
    @$point_de_vente = $_POST["point_de_vente"];

    $sql = "UPDATE stock_vin SET nom_produit=:nom_produit, quantite=:quantite, prix=:prix, point_de_vente=:point_de_vente WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom_produit", $nom_produit);
    $stmt->bindParam(":quantite", $quantite);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":point_de_vente", $point_de_vente);

    try {
        $stmt->execute();
        echo "Le stock de vin a été modifié avec succès.";
    } catch(PDOException $e) {
        echo "Erreur lors de la modification du stock de vin: " . $e->getMessage();
    }
} else {
    // Si le formulaire n'a pas été soumis, récupérer les informations de la ligne à modifier
    @$id = $_GET['id'];
    $sql = "SELECT * FROM stock_vin WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);
    $stock_vin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Afficher le formulaire avec les informations pré-remplies
    ?>
    <?php
}
?>
