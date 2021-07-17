<?php
$host = "localhost";
$user = "root";
$password="Maansi3#";
$database = "pms";



$con=mysqli_connect($host, $user, $password, $database);


if(mysqli_connect_errno() >0){
    
    echo "error in db";
 
    exit;
}
?>