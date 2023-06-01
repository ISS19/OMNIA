<?php 
require('./php/config.php');
require('tableau.php');

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

  <!-- Google map implication -->
  <link rel="stylesheet" href="APIGoogleMap/leaflet.css">
  <script src="APIGoogleMap/leaflet.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" integrity="sha512-NxO6q3XJcGp+ZENOVvZJ/V6hLk6J1V6+5+t5U5V7HJX9N2V7z+iMvjqZp7/y0hL4HL/C7dBg+0G65FGW8gCvZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js" integrity="sha512-kRvzbzRUaQcLlQLoybm6ThR+wFdrMyD6h5U6XltN6Lnb0pj3E3A86h/16ltNOG4E4liKZpew7mJ0nk+EYhSgOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    table{
      border-collapse: collapse;
    }
    th{
      color: brown;
    }
    td{
      border: 1px solid black;
      padding: 10px;
    }
  </style>
</head>

<body style=" background-image: url(./BG.png);;background-size: cover;background-repeat: no-repeat;">
 

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">VINRAL</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn" onmouseenter="zaza()"></i>
        </div><!-- End Logo -->

        
    <nav class="header-nav ms-auto" style="margin-left:780px;">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/relia.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo @$row['nom']?> <?php echo @$row['prenom']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo @$row['nom']?> <?php echo @$row['prenom']?></h6>
              <span>Administrateur</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-key"></i>
                <span onclick="randomTxt()">Generateur de clé</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
          
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav" style="margin-top: 20px;"  onclick="mapis()">
      <hr>
      <li class="nav-item" style="margin-bottom: 20px;" onclick="mapisation()">
        <a class="nav-link collapsed" href="APIGoogleMap/GoogleMap.html">
          <i class="bi bi-geo-alt"></i>
          <span style="font-size: 14px;font-weight: 700;color: #582549;" class="span">Localisation</span>
        </a>
        
      </li>
      <hr>
      <li class="nav-item" style="margin-bottom: 20px;" >
        <a class="nav-link collapsed" href="https://meet.jit.si/MaSalleDeVisioconference">
          <i class="bi bi-camera-video-fill"></i>
          <span style="font-size: 14px;font-weight: 700;color: #582549;" class="span">Appel Video</span>
        </a>
      </li><hr>
      <li class="nav-item" onclick="aficher()"  style="margin-bottom: 20px;">
        <a class="nav-link collapsed">
          <i class="bi bi-grid"></i>
          <span style="font-size: 14px;font-weight: 700;color: #582549;" class="span">Tableau de Bord</span>
        </a>
      </li><hr>
      <li class="nav-item" onclick="afiche()" style="margin-bottom: 20px;">
        <a class="nav-link collapsed">
          <i class="bi bi-pencil"></i>
          <span style="font-size: 14px;font-weight: 700;color: #582549;" class="span">Gestion utilisateur</span>
        </a>
      </li><hr>
      <!-- End Dashboard Nav -->
    </ul>
    </aside>
    <section  id="dash" style="display: none;" >
        <div style="margin-top: 55px;display: flex;margin-left:20%;">
          <div class="col-lg-4" style="margin: 10px 0px 10px 10px;">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Stock de vin : </h5>
    
                <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    var quantite = <?php echo json_encode($quantite); ?>;
                    var pointV = <?php echo json_encode($pointV); ?>;

                    new Chart(document.querySelector('#polarAreaChart'), {
                      type: 'polarArea',
                      data: {
                        labels: pointV,
                        datasets: [{
                          label: 'My First Dataset',
                          data: quantite,
                          backgroundColor: [
                            'rgb(255, 99, 132)' ,
                            'rgb(75, 192, 192)',
                            'rgb(255, 205, 86)',
                            'rgb(201, 203, 207)',
                            'rgb(54, 162, 235)',
                          ]
                        }]
                      }
                    });
                  });
                </script>
                
    
              </div>
            </div>
          </div>
    </section>
    <section class="container" id="tab" style="margin-top: 78px;display: none;">
      <form action="#" method="post">
        <input type="text" name="search" id="search" placeholder="Veuillez Rechercher">
        <button type="submit"><i class="bi bi-search"></i></button>
      </form>
    <title>Tableau stylé</title>
	<style>
    form{
      margin-bottom:40px;
      margin-left:70%;
      display:inline-block;
      position:relative;
    }
    input[type="text"]{
      padding:8px;
      font-size:16px;
      border:none;
      border-radius:4px;
      outline:none;

    }
    button[type="submit"]{
      position:absolute;
      top: 0;right: 0;
      padding:8px 12px;
      background-color:#582549;
      color:white;
      font-size:16px;
      border:none;
      border-radius:0 4px 4px 0;
      cursor:pointer
    }
    button[type="submit"]:hover{
      background-color:red;
    }
		table {
			border-collapse: collapse;
			font-family: Arial, sans-serif;
			color: black;
			margin: auto;
      background:none;
      background:cover;
      background: rgb(255 255 255 /65%);
		}

		table .th {
			background: rgb(163 102 10 0.5);
			text-align: center;
			padding: 8px;
			font-weight: bold;
			border: none;
      color:#582549;
      width: 200px;
		}

		table td {
			padding: 8px;
			border: 1px solid #582549;
      text-align: center;
      margin-right:8px;
			font-weight: lighter;
		}


		table tr:hover {
			background-color: rgb(255 255 255 /25%);
      
			font-weight: bold;
		}
    .btn{
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        height:30px;
        width:100px;;
      }
      .btn:hover{
        border-color: #3e8e41;
      }
      .iza{
        color:red;
      }
	</style>


	<table>
		<thead>
			<tr>
				<th class="th">Nom</th>
				<th class="th">Prenom</th>
				<th class="th">Point de vente</th>
        <th class="th">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
      <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
				<td><?php echo @$row['NomUt']?></td>
				<td><?php echo @$row['PrenomUt']?></td>
				<td><?php echo @$row['Region']?></td>
         
        <?php 
        if (isset($_GET['supprimer']) && $_GET['supprimer'] == 'oui') {
          @$id = $_GET['idUt'];

          $requeteDelete = "DELETE FROM utilisateur WHERE idUt = :idUt";
          $state = $bdd->prepare($requeteDelete);
          $state->bindValue(':idUt', @$id, PDO::PARAM_INT);
          $state->execute();
        }
    

        $ssql = "SELECT idUt , cle , NomUt , PrenomUt, AdresseUt, CINUt, Region, MdpUt FROM utilisateur";
        $result = $bdd->query($ssql);
        echo "<td><a class='iza' href='?supprimer=oui&idUt=".  @$row['idUt'] . "'>Supprimer</a></td>";
        ?> 
			</tr>
      <?php
        }
        ?>
		</tbody>
	</table>

      

    </section>
<script>
  var dashboard = document.getElementById("dash");
  var tabi = document.getElementById("tab");
  var mapi = document.getElementById("mapeta");
  var gest = document.getElementById("gest");

  function aficher(){
    dashboard.style.display = "block";
    tabi.style.display="none";
    mapi.style.display="none";
    gest.style.display="none";
  }
  function afiche(){
    tabi.style.display="block";
    dashboard.style.display="none";
    mapi.style.display="none";
    gest.style.display="none";
  }
  function mapisation()
  {
    tabi.style.display="none";
    dashboard.style.display="none";
    mapi.style.display="block";
    gest.style.display="none";
  }
</script>
<script src="js.js"></script>
   
  <!-- Vendor JS Files -->
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




<?php if(qsjkfhsd){
?>

<html></html>

<?php
}
?>