<?php
include("conexion.php");
$con=conectar();

$usu=$_POST['txtusuario'];
$pass=$_POST['txtpassword'];
$rol=$_POST['rol'];



$sql="INSERT INTO login VALUES('$usu','$pass','$rol')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.html");
    
}else {
}
?>