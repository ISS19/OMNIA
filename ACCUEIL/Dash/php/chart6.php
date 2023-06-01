<?php
require('database.php');

$query = "SELECT label, value FROM polar_data_6";
$stmt = $bdd->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$labels = [];
$values = [];

foreach ($data as $row) {
  array_push($labels, $row['label']);
  array_push($values, $row['value']);
}
?>