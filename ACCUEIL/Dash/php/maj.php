<?php // Système de Mis a jour Polar Chart
try {
    $bdd = new PDO('mysql:host=localhost; dbname=charte; charset=utf8', 'root', '');
    //echo "a";
} catch (Exception $e) {
    die('Une erreur et survenue: ' . $e->getMessage());
}

$query = "SELECT label, value FROM polar_data";
$stmt = $bdd->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$labels = [];
$values = [];

foreach ($data as $row) {
  array_push($labels, $row['label']);
  array_push($values, $row['value']);
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupère les nouvelles valeurs à partir du formulaire
  $new_values = [
    $_POST['value1'],
    $_POST['value2'],
    $_POST['value3'],
    $_POST['value4'],
    $_POST['value5'],
  ];
  
  // Met à jour $values avec les nouvelles valeurs
  $values = $new_values;

  // Met à jour les valeurs dans la base de données
  $query = "UPDATE polar_data SET value = :value WHERE label = :label";
  $stmt = $bdd->prepare($query);

  for ($i = 0; $i < count($new_values); $i++) {
    $stmt->execute([
      'value' => $new_values[$i],
      'label' => $labels[$i]
    ]);
  }
}
?>