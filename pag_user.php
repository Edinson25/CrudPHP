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
     <title>VaidrollTeamLogin7</title>
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
</head>

<body>
    
<div class="container mt-5">
                    <div class="row d-flex justify-content-center aling-items-center vh-100"> 
                        
                        
                        
                        <div class="col-md-8 text-center">

                        <div class="card form-lista ">
                            <div class="card-body">
                               
                                <h1 class="text-center">¡Bienvenido!</h1>
                                <p class="text-center">Aqui encontraras las capacitaciones disponibles</p>
                                <table class="table text-center" >
                                    <thead class="table-success table-striped" >
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cupos</th>
                                            <th></th>
                                            <th></th>
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
                                                    <th><a href="cupos.php?cupos=<?php echo $row['cupos'] ?>" id="suscribe" class="btn btn-info">Inscribirse</a></th>
                                                    <th><a href="cancelar.php?cupos=<?php echo $row['cupos'] ?>" class="btn btn-danger">Cancelar</a></th>
                                                                                         
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


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="app.js"></script>
</body>
</html>