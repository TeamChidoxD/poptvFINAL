<?php
require_once "conexion.php";
        $query = mysqli_query($conection, "SELECT * FROM prog");
        $result = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!--<link rel="icon" href="images/NewLogo-N.png"/>-->
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=css/bootstrap.min.css type=""/>

    </head>
    <body>
        <?php while($data = mysqli_fetch_array($query)): ?>
        <div class="card text-center">
        <div class="card-header">
        <h3><?php echo $data["titulo"]; ?></h3>
        </div>
        <div class="card-body">
            <h6 class="card-title"><b><label>Título: </label> </b><?php echo $data["titulo"]; ?></h6>
            <p class="card-text">
                <label><b>Categoría: </b></label> <?php echo $data["categoria"]; ?> 
                <br> 
                <label><b>Temporadas: </b></label> <?php echo $data["temporadas"]; ?> 
                <br> 
                <label><b>Descripción: </b></label> <?php echo $data["descripcion"]; ?>
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <?php endwhile; ?>
    </body>
</html