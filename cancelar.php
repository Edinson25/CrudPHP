<?php

include("conexion.php");
$con=conectar();

$cod_capacitacion=$_GET['id'];
$cupos=$_GET['cupos'];



$sql="UPDATE alumno SET  cupos= $cupos + 1 WHERE cupos='$cupos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pag_user.php");
    }
?>


