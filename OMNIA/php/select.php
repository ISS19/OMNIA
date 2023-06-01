<?php
require "../database.php";

$sql1 = $bdd->prepare("SELECT value FROM polar_data");
$sql2 = $bdd->prepare("SELECT value FROM polar_data_2");
$sql3 = $bdd->prepare("SELECT value FROM polar_data_3");
$sql4 = $bdd->prepare("SELECT value FROM polar_data_4");
$sql5 = $bdd->prepare("SELECT value FROM polar_data_5");
$sql6 = $bdd->prepare("SELECT value FROM polar_data_6");

$sql1 ->execute(array());
$sql2 ->execute();
$sql3 ->execute();
$sql4 ->execute();
$sql5 ->execute();
$sql6 ->execute();
?>