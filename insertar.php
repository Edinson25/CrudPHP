<?php
include("conexion.php");
$con=conectar();

$cod_capacitacion=$_POST['cod_capacitacion'];
$nombre=$_POST['nombre'];
$cupos=$_POST['cupos'];



$sql="INSERT INTO alumno VALUES('$cod_capacitacion','$nombre','$cupos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pag_admin.php");
    
}else {
}
?>