<?php
require('./php/chart.php');
include ("gestionSTOCk/AjoutStock.php");
include('../Login/logation.php');
require ("gestionSTOCk/maj.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
  body{
    background: url("../img/HEHE.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
    #header{
      height: 100px;
      background: #eaeaea;
    }
    .sidebar{
      padding-top: 22px;
    }
    #param{
      background:rgb( 0 0 0 /50%);
      margin-top: 180px;
      color:white;
    }
    .add{
      background: transparent;
      color:white;
    }
</style>

</head>

<body>
 

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" >

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Vinral  <?php echo @$_SESSION['region'];?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="">
        <input type="text" name="recherche" id="recherche" placeholder="Recherche stock d'un produit" title="Enter search keyword">
        <button type="submit" title="Search" name="srch"><i class="bi bi-search"></i></button>
      </form>
      <?php include("gestionSTOCk/recherche.php"); ?>
    </div><!-- End Search Bar -->

    

    <nav class="header-nav ms-auto">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="a.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"> <?php echo $_SESSION['nom'];?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> <?php echo @$_SESSION['nom'];?></h6>
              <span>Responsable</span>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="php/deconnexion.php" >
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexion</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item"><hr>
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-house"></i>
      <span>Accueil</span>
    </a><hr>
  </li>
  <li class="nav-item" onclick="ajout()">
    <a class="nav-link collapsed">
      <i class="bi bi-pen"></i>
      <span>Produits vendue</span>
    </a><hr>
  </li>
  <li class="nav-item" class="sl">
    <a class="nav-link collapsed" data-bs-toggle="dropdown">
      <i class="bi bi-file-text"></i>
      <span class="d-none d-md-block dropdown-toggle ps-2">Gestion des stockes</span>
    </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <a class="dropdown-item d-flex align-items-center">
                <span onclick="reap()">Réapprovisionnement</span>
              </a>  
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center">
                <span onclick="modif()">Modification des stock</span>
              </a>
            </li>
        </ul>
      <hr>
    </li>

  <li class="nav-item" id="affiche" onclick="aficher()">
    <a class="nav-link collapsed">
      <i class="bi bi-grid"></i>
      <span>Tableau de bord</span>
    </a><hr>
  </li><li class="nav-item" id="affiche" onclick="aficher()">
    <a class="nav-link collapsed" href="https://meet.jit.si/MaSalleDeVisioconference">
      <i class="bi bi-camera-video"></i>
      <span>Appel vidéo</span>
    </a><hr>
  </li><!-- End Dashboard Nav -->
</ul>
</aside>
  <?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['increment_value']) and !empty($_POST['label'])) {
    // Récupère les nouvelles valeurs à partir du formulaire
    $label = $_POST['label'];
    $increment_value = $_POST['increment_value'];
    
    // Récupère la valeur actuelle à partir de la base de données
    $query = "SELECT value FROM polar_data WHERE label = :label";
    $stmt = $bdd->prepare($query);
    $stmt->execute([
      'label' => $label
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    @$current_value = $result['value'];

    // Ajoute la valeur entrée dans le formulaire à la valeur actuelle
    @$new_value = $current_value + @$increment_value;

    // Met à jour la valeur dans la base de données
    $query = "UPDATE polar_data SET value = :value WHERE label = :label";
    $stmt = $bdd->prepare($query);
    $stmt->execute([
      'value' => $new_value,
      'label' => $label
    ]);
  } else {
    $er = "Ajouter quelques choses svp!";
  }
}
?>

<!-- Formulaire pour ajouter une valeur à la valeur stockée dans la base de données -->
<form method="post" id="param">
  <div><h2>Ajout vin vendu</h2></div>
  <div class="div1">
    <input type="text" id="label" name="label" placeholder="Nom du vin vendue" class="add">
  </div>

  <div class="div1">
    <input type="text" id="increment_value" name="increment_value" placeholder="Litre du vin vendue" class="add">
  </div>

  <div class="div1">
    <input type="submit" name="btn1" value="Ajouter" class="ajout">
  </div>
  <?php echo '<p style="color:orange;">' . @$er .'</p>'?>
  
</form> <!-- Fin Formulaire -->

<!--réapprovisionnement-->
<form method="POST" id="reappre">
  <h2>Réaprovisionnement</h2>
  <input type="text" id="nom" name="nom_produit" required placeholder="Nom du produit"><br><br>
  <input type="number" id="quantite" name="quantite" required placeholder="Quantité en stock"><br><br>
  <input type="number" id="prix" name="prix" step="0.01" required placeholder="prix"><br><br>
  <input type="text" id="prix" name="point_de_vente" step="0.01" required placeholder="Point de vente"><br><br>
  <input type="submit" value="Ajouter" class="hehe">
</form> 

<!--Recherche stock
  <section id="sect2">
    <h2>Rechercher des stocks de vin</h2>
    <form method="POST" action="recherche.php">
      <label for="recherche">Rechercher:</label>
      <input type="text" name="recherche" id="recherche">
      <input type="submit" value="Rechercher">
    </form>
    <?php include("gestionSTOCk/recherche.php"); ?>
  </section>-->

<!--Modification des stocke-->
  <section id="sect3">
		<h2>Modifier le stock</h2>
        <form method="post">
        <input name="id" value="<?php echo @$stock_vin['id']; ?>" placeholder="Identifiant du vin"> <br>
        <input type="text" name="nom_produit" value="<?php echo @$stock_vin['nom_produit']; ?>" placeholder="Nom du vin"><br>
        <input type="text" name="quantite" value="<?php echo @$stock_vin['quantite']; ?>" placeholder="Quantiter du vin"><br>
        <input type="text" name="prix" value="<?php echo @$stock_vin['prix']; ?>" placeholder="Prix du vin"><br>
        <input type="text" name="point_de_vente" value="<?php echo @$stock_vin['point_de_vente']; ?>" placeholder="Point de vente"><br>
        <input type="submit" value="Modifier" class="aaa">
    </form>
	</section>

<!--Affichage
	<section id="sect4">
		<h2>Liste des produits</h2>
      <?php
      // Connexion à la base de données avec PDO
      $db = new PDO('mysql:host=localhost;dbname=stock', 'root', '');

      // Requête SQL pour sélectionner tous les produits
      $stmt = $db->prepare("SELECT * FROM stock_vin");
      $stmt->execute();

      // Affichage du tableau des stocks
      echo "<table>";
      echo "<tr><th>Nom du produit</th><th>Quantité en stock</th><th>Prix</th><th>Point de Vente</th></tr>";
      while ($row = $stmt->fetch()) {
          echo "<tr>";
          echo "<td>" . $row['nom_produit'] . "</td>";
          echo "<td>" . $row['quantite'] . "</td>";
          echo "<td>" . $row['prix'] . " €</td>";
          echo "<td>" . $row['point_de_vente'] . " €</td>";
          echo "</tr>";
      }
      echo "</table>";?>
  </section>-->

<section style="display:none;" id="dash">
  <div style="margin-top: 60px;;display: flex;">
    <div class="col-lg-8" style="margin: 10px 0px 10px 280px;">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="margin-left: 65px;">Litre de Vin Vendu par type</h5>

            <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>

            <script>
            document.addEventListener("DOMContentLoaded", () => {
            var labels = <?php echo json_encode($labels); ?>;
            var values = <?php echo json_encode($values); ?>;
  
            new Chart(document.querySelector('#polarAreaChart'), {
              type: 'polarArea',
              data: {
                labels: labels,
                datasets: [{
                  label: 'My First Dataset',
                  data: values,
                  backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(255, 205, 86)',
                    'rgb(201, 203, 207)',
                    'rgb(54, 162, 235)'
                    ]
                  }]
                }
              });
            });
            </script>
          </div>
        </div>
      </div>
     </div>
    </div>
  </section>
<script>
  function aficher(){
    document.getElementById('dash').style.display="block";
    document.getElementById('param').style.display="none";
    document.getElementById('reappre').style.display="none";
    document.getElementById('sect3').style.display="none";
  }
  function ajout(){
    document.getElementById('dash').style.display="none";
    document.getElementById('param').style.display="grid";
    document.getElementById('reappre').style.display="none";
    document.getElementById('sect3').style.display="none";
  }
  function reap(){
    document.getElementById('dash').style.display="none";
    document.getElementById('param').style.display="none";
    document.getElementById('reappre').style.display="block";
    document.getElementById('sect3').style.display="none";

  }
  function modif(){
    document.getElementById('dash').style.display="none";
    document.getElementById('param').style.display="none";
    document.getElementById('reappre').style.display="none";
    document.getElementById('sect3').style.display="block";
  }
</script>
   
  <!-- Vendor JS Files -->
  <script src="Docs/jquery-3.6.1.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>