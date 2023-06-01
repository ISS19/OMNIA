<!DOCTYPE html>
<html>
<head>
	<title>Système de gestion de stock de vin par point de vente</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Système de gestion de stock de vin par point de vente</h1>
	</header>
	<main>
		<section>
			<h2>Afficher les stocks de vin par point de vente</h2>
			<form method="POST" action="affichage.php">
				<label for="point_de_vente">Point de vente:</label>
				<select name="point_de_vente" id="point_de_vente">
					<option value="tous">Tous les points de vente</option>
					<option value="Paris">Paris</option>
					<option value="Lyon">Lyon</option>
					<option value="Marseille">Marseille</option>
				</select>
				<input type="submit" value="Afficher">
			</form>
		</section>
		<section>
			<h2>Rechercher des stocks de vin</h2>
			<form method="POST" action="recherche.php">
				<label for="recherche">Rechercher:</label>
				<input type="text" name="recherche" id="recherche">
				<input type="submit" value="Rechercher">
			</form>
			<?php include("recherche.php"); ?>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 - Système de gestion de stock de vin par point de vente</p>
	</footer>
</body>
</html>
