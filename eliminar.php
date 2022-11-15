<?php

include("conexion.php");
$con=conectar();

$cod_capacitacion=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_capacitacion='$cod_capacitacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pag_admin.php");
    }
?>