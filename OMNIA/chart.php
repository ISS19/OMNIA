<?php
require('database.php');

$query = "SELECT quantite, point_de_vente FROM stock_vin";
$stmt = $bdd->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$quantite = [];
$pointV = [];

foreach ($data as $row) {
  array_push($quantite, $row['quantite']);
  array_push($pointV, $row['point_de_vente']);
}
?>