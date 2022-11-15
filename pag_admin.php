<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AppCapacitacion</title>
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="tables.css">


</head>

<body>
    
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <div class="card " style="width: 18rem;">
                                <div class="card-body form-añadir rounded">
                            
                                    <h3 class="text-center">Ingrese datos</h3>
                                        <form action="insertar.php" method="POST">
            
                                            <input type="number" class="form-control mb-3" name="cod_capacitacion" placeholder="Codigo capacitacion">
                                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                            <input type="number" class="form-control mb-3" name="cupos" placeholder="Cupos">    
                                            <input type="submit" class="btn btn-success w-100">
                                                                            
                                        </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card border-0" style="width: auto;">
                                    <div class="card-body ">
                                
                                        <table class="table text-center" >
                                            <thead class="table-success table-striped" >
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Cupos</th>
                                                    <th><ion-icon name="create-outline" class="fs-5 fw-bold"></ion-icon></th>
                                                    <th><ion-icon name="trash-outline" class="fs-5 fw-bold"></ion-icon></th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_array($query)){
                                                    ?>
                                                        <tr>
                                                            <th><?php  echo $row['cod_capacitacion']?></th>
                                                            <th><?php  echo $row['nombre']?></th>
                                                            <th><?php  echo $row['cupos']?></th>
                                                            <th><a href="actualizar.php?id=<?php echo $row['cod_capacitacion'] ?>" class="btn btn-info">Editar</a></th>
                                                            <th><a href="eliminar.php?id=<?php echo $row['cod_capacitacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                                        </tr>
                                                    <?php 
                                                        }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-end my-5">

                                <a href="index.html" class="btn btn-warning  w-25">Salir</a>

                            </div>
                        </div>

                    </div>  
            </div>


</table>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>