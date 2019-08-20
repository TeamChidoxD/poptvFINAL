<?php
$alert="";
session_start();
if(!empty($_SESSION['active']))
{
    header('location: sesion.php');

}else{

if(!empty($_POST))
{
    if($_POST && (empty($_POST['usuario']) || empty($_POST['contrasena'])))
    {
        $alert = "Ingrese su usuario y contraseña";
    }else{
        require_once "conexion.php";
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $query = mysqli_query($conection, "SELECT * FROM administrador WHERE usuario = '$usuario' AND contrasena ='$contrasena'");
        $result = mysqli_num_rows($query);

        if($result > 0){
            $data = mysqli_fetch_array($query);

            $_SESSION['active'] = true;
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['correo'] = $data['correo'];
            $_SESSION['usuario'] = $data['usuario'];
            $_SESSION['contrasena'] = $data['contrasena'];

            header('location: sesion.php');
        }
        else{
            $alert = 'Datos incorrectos';
            session_destroy();
            
        }
    }
}
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!--<link rel="icon" href="images/NewLogo-N.png"/>-->
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=css/bootstrap.min.css type=""/>
        <script src="js/funciones.js"></script>
    </head>
    <body>
        <div class="container mx-auto" style="width: 400px;">
            <form method="post" >
                <div class="form-group">
                  <label>Usuario</label>
                  <input type="user" class="form-control" name="usuario" placeholder="Ingresa usuario">
                </div>
                <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
                </div>
                <div class="alert"> <?php echo isset($alert)? $alert : ''; ?> </div>
                <button value= "INGRESAR" class="btn btn-primary">Iniciar</button>

                <a class="btn btn-primary" href="registro.php">Registrase</a>
                <a type="submit" class="btn btn-primary" href="ver.php">Visitante</a>
              </form> 
        </div>
    
</body>
</html>
