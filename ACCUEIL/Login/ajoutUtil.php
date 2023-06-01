<?php
include "connexDB.php";
if(isset($_POST['enregistrer']))
{
    if(!empty($_POST['cle']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['adresse']) AND !empty($_POST['cin']) AND !empty($_POST['regions']) AND !empty($_POST['mdp']))
    {
        $cle = $_POST['cle'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cin = $_POST['cin'];
        $region = $_POST['regions'];
        $mdp = $_POST['mdp'];

        $ajout = $db->prepare("INSERT INTO utilisateur(cle, NomUt, PrenomUt, AdresseUt, CINUt, Region, MdpUt) VALUES (:cle, :NomUt, :PrenomUt, :AdresseUt, :CINUt, :Region, :MdpUt)");
        $ajout->execute(array(
            ":cle" => $cle,
            ":NomUt" => $nom,
            ":PrenomUt" => $prenom, 
            ":AdresseUt" => $adresse, 
            ":CINUt" => $cin, 
            ":Region" => $region, 
            ":MdpUt" => $mdp
        ));
        
    } 
}
?>