<?php

try {
    $bdd = new PDO('mysql:host=localhost; dbname=charte; charset=utf8', 'root', '');
    //echo "a";
} catch (Exception $e) {
    die('Une erreur et survenue: ' . $e->getMessage());
}