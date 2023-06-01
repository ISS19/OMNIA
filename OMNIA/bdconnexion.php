<?php

try{
    $user ="root";
    $pass ="";
    $dbh =new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);

    $req = 'SELECT * from utilisateur';

    foreach($dbh->query($req) as $row){
        print_r($row);
    }
    $dbh = null;
} catch (PDOExeption $e) {
    print "Erreur! / ". $e->getMessage() . "<br/>";
    die();
}

?>