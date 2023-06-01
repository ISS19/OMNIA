<?php
$host="localhost";
$user="root";
$password="";
$database="charte";

$bdd=new PDO("mysql:host=$host;dbname=$database", $user, $password);

$result=$bdd->query("SELECT * FROM admine WHERE id = 1");
$row=$result->fetch(PDO::FETCH_ASSOC);