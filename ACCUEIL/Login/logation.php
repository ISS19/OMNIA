<?php
include "connexDB.php";

if(isset($_POST['conn']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['regions']) AND !empty($_POST['mdp']))
    {
        $nom = $_POST['nom'];
        $region = $_POST['regions'];
        $mdp = $_POST['mdp'];
        $connex = $db->prepare('SELECT * FROM utilisateur WHERE NomUt = ? and Region=? and MdpUt=?');
        $connex->execute(array($nom, $region, $mdp));
        if ($connex->rowCount() > 0) {
            $_SESSION['auth'] = true;
            $_SESSION['nom'] = $nom;
            $_SESSION['pass'] = $mdp;
            $_SESSION['region'] = $region;
            $_SESSION['idUt'] = $connex->fetch()['idUt'];
        }
    }
    else
    {
        $err = "Veuillez remplir tout les champs";
    }

    if(isset($_SESSION['idUt']))
    {
        header('Location: ../Dash/fijerena'.$_SESSION['idUt'].'.php');
    }
}
?>