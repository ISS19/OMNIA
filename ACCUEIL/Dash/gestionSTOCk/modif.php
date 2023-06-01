<?php require 'maj.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Modifier le stock</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Modifier le stock</h1>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="ajouter.php">Ajouter un produit</a></li>
				<li><a href="tableau.php">Tableau des stocks</a></li>
			</ul>
		</nav>
	</header>

	<section>
		<h2>Modifier le stock</h2>

        <form method="post">
        <label>Id du produit:</label>
        <input name="id" value="<?php echo @$stock_vin['id']; ?>"> <br>
        <label>Nom du produit:</label>
        <input type="text" name="nom_produit" value="<?php echo @$stock_vin['nom_produit']; ?>"><br>
        <label>Quantité:</label>
        <input type="text" name="quantite" value="<?php echo @$stock_vin['quantite']; ?>"><br>
        <label>Prix:</label>
        <input type="text" name="prix" value="<?php echo @$stock_vin['prix']; ?>"><br>
        <label>Point de vente:</label>
        <input type="text" name="point_de_vente" value="<?php echo @$stock_vin['point_de_vente']; ?>"><br>
        <input type="submit" value="Modifier">
    </form>
	</section>

	<footer>
		<p>Système de gestion de stock de vin</p>
	</footer>
</body>
</html>
