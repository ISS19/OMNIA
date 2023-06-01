<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tableau des stocks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Tableau des stocks</h1>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="ajouter.php">Ajouter un produit</a></li>
				<li><a href="modif.php">Modifier le stock</a></li>
			</ul>
		</nav>
	</header>

	<section>
		<h2>Liste des produits</h2>
        <?php
        // Connexion à la base de données avec PDO
        $db = new PDO('mysql:host=localhost;dbname=stock', 'root', '');

        // Requête SQL pour sélectionner tous les produits
        $stmt = $db->prepare("SELECT * FROM stock_vin");
        $stmt->execute();

        // Affichage du tableau des stocks
        echo "<table>";
        echo "<tr><th>Nom du produit</th><th>Quantité en stock</th><th>Prix</th><th>Point de Vente</th></tr>";
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['nom_produit'] . "</td>";
            echo "<td>" . $row['quantite'] . "</td>";
            echo "<td>" . $row['prix'] . " €</td>";
            echo "<td>" . $row['point_de_vente'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </section>
    </body>
    </html>
