<?php
include "ajoutUtil.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Q.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/Libs/aos/aos.css">
    <link rel="stylesheet" href="./assets/Libs/font/bootstrap-icons.css">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style3.css">
    <title>inscription</title>
</head>
<body>
        <header id="header">
            
            <div class="toggle-menu">
            </div>
            <ul class="menu" data-aos="fade-left" data-aos-delay="80" data-aos-duration="1500">
                <li class="azerty"><a href="">A propos</a></li>
                <li class="azerty"><a href="APIGoogleMap/GoogleMap.php">Localisation</a></li>
                <li class="azerty"><a href="http://127.0.0.1:5000">Question ?</a></li>
                <li class="buy_li"><a>S'authentifier</a></li>
            </ul>
        </header>
    <form action="" method="post">
        <div id="forme">
            <div class="header">Inscription</div>
            <div class="inp"><i class="fa fa-key" id="con"></i><input type="password" name="cle" id="" placeholder="Clé" class="enter"></div>
            <div class="inp"><i class="fa fa-pen" id="con"></i><input type="text" name="nom" id="" class="enter" placeholder="Votre nom"></div>
            <div class="inp"><i class="fa fa-pen" id="con"></i><input type="text" name="prenom" id="" class="enter" placeholder="Votre prenom"></div>
            <div class="inp"><i class="fa fa-pen" id="con"></i><input type="text" name="adresse" id="" class="enter" placeholder="Votre adresse"></div>
            <div class="inp"><i class="fa fa-pen" id="con"></i><input type="text" name="cin" id="" class="enter" placeholder="Votre CIN"></div>
            <div class="inp"><i class="fa fa-key" id="con"></i><input type="password" name="mdp" id="" placeholder="Mots de passe" class="enter"></div>
            <div class="inp"><i class="fa fa-pen" id="con"></i><select name="regions" class="enter">
                <option value="Antananarivo">Point de vente</option>
                <option value="Antananarivo">Antananarivo</option>
                <option value="Antsiranana">Antsiranana</option>
                <option value="Fianarantsoa">Fianarantsoa</option>
                <option value="Mahajanga">Mahajanga</option>
                <option value="Toamasina">Toamasina</option>
                <option value="Toliara">Toliara</option>
                <option value="Amoron'i Mania">Amoron'i Mania</option>
                <option value="Analamanga">Analamanga</option>
                <option value="Atsinanana">Atsinanana</option>
                <option value="Atsimo-Andrefana">Atsimo-Andrefana</option>
                <option value="Atsimo-Atsinanana">Atsimo-Atsinanana</option>
                <option value="Atsinanana">Atsinanana</option>
                <option value="Betsiboka">Betsiboka</option>
                <option value="Boeny">Boeny</option>
                <option value="Bongolava">Bongolava</option>
                <option value="Diana">Diana</option>
                <option value="Haute-Matsiatra">Haute-Matsiatra</option>
                <option value="Ihorombe">Ihorombe</option>
                <option value="Itasy">Itasy</option>
                <option value="Melaky">Melaky</option>
                <option value="Menabe">Menabe</option>
                <option value="Sava">Sava</option>
                <option value="Vakinankaratra">Vakinankaratra</option>
              </select></div>
            <div class="header"><input type="submit" value="enregistrer" name="enregistrer" class="envoi" style="margin-top: 25px;"></div>
            <a href="login.php" class="aza">J'ai déjà un compte</a>
        </div>
    </form>
    
</body>
</html>