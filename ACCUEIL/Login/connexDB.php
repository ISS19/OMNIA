<?php
@session_start();
$user = "root";
$pass = "";

try{
    $db = new PDO("mysql:host=localhost; dbname=charte",$user, $pass);
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
