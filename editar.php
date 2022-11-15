<?php

include("conexion.php");
$con=conectar();

$cod_capacitacion=$_POST['cod_capacitacion'];
$nombre=$_POST['nombre'];
$cupos=$_POST['cupos'];

$sql="UPDATE alumno SET  cupos='$cupos', nombre='$nombre' WHERE cod_capacitacion='$cod_capacitacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pag_admin.php");
    }
?>