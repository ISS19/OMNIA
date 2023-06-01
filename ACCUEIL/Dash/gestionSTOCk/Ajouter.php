<?php
include "AjoutStock.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <!--Ajout de stocke-->
<form method="POST">
  <label for="nom">Nom du produit :</label>
  <input type="text" id="nom" name="nom_produit" required><br><br>
  <label for="quantite">Quantité en stock :</label>
  <input type="number" id="quantite" name="quantite" required><br><br>
  <label for="prix">Prix :</label>
  <input type="number" id="prix" name="prix" step="0.01" required><br><br>
  <label for="prix">Point de Vente :</label>
  <input type="text" id="prix" name="point_de_vente" step="0.01" required><br><br>
  <input type="submit" value="Ajouter">
</form> 
</body>
</html>
