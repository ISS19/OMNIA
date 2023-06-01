<?php

require ('database.php');

$sql = "SELECT*FROM utilisateur";
$stmt = $bdd->prepare($sql);
$stmt->execute();
