<?php

try{
    $user ="root";
    $pass ="";
    $bdd =new PDO('mysql:host=localhost;dbname=charte', $user, $pass);

} catch (PDOExeption $e) {
    print "Erreur! / ". $e->getMessage() . "<br/>";
    die();
}

?>