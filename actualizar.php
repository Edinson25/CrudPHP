<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE cod_capacitacion='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="tables.css">
    </head>
    <body>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="width: auto;">
                                <div class="card-body">
                                        <form action="editar.php" method="POST">

                                            <h1 class=" text-center" >¡Aqui puedes actualizar los datos!</h1>
                                            <label for="">Nombre de capacitacion</label>
                                            <input type="hidden" name="cod_capacitacion" value="<?php echo $row['cod_capacitacion']  ?>">

                                            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                            <label for="">Cupos</label>
                                            <input type="text" class="form-control mb-3" name="cupos" placeholder="cupos" value="<?php echo $row['cupos']  ?>">


                                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
    </body>
</html>