<?php
$user = "root";
$pass = "";

try{
    $db = new PDO("mysql:host=localhost; dbname=charte",$user, $pass);
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}


if(isset($_FILES['pdp']) AND !empty($_FILES['pdp']['name']))
{
    $extensionV = 'jpg';
    $extensionUp = strtolower(substr(strrchr($_FILES['pdp']['name'], '.'), 1));

    if($extensionV = $extensionUp)
    {
        $chemin = "avatar".1.".".$extensionUp;
        $photoFini = move_uploaded_file($_FILES['pdp']['tmp_name'], $chemin);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="">Pdp</label>
    <input type="file" name="pdp" id="" name="pdp">
    <input type="submit" value="" name="btn">
    </form>
    <img src="" alt="">
</body>
</html>