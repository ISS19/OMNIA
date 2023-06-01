<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notifs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$stock_bas = 10;

$sql = "SELECT stock FROM vins WHERE nom_vin = :nom"; // Mbola soloina
$stmt = @$pdo->prepare($sql);
$stmt->bindParam(':nom_vin',$nom_vin);
$stmt->execute();
$stock_vin = $stmt->fetchColumn();

if ($stock_vin < $stock_bas) {
    echo "<div class='icon-alert'>
        <i class='bi bi-bell-fill'></i>
        <span>Le niveau de stock pour ce vin est bas!</span>
    </div>";
};
?>
</body>
</html>