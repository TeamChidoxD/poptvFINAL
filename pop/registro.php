<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/NewLogo-N.png"/>
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=css/bootstrap.min.css type=""/>
        <script src="js/funciones.js"></script>
        <script src="jquery-3.4.1.min.js"></script>
    </head>
    <body>      
            <div class="container"> 
            <form id="frmajax">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre de usuario</label>
                        <input class="form-control" id="usuario" name="usuario" placeholder="usuario">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nombre</label>
                      <input class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label>Correo</label>
                      <input class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                    </div>
                    
                  </form>  
                  <button id="registrar" class="btn btn-primary">Registrarse</button>
                </div>      
    </body>

</html>

<script type="text/javascript">
$(document).ready(function(){
    $('#registrar').click(function(){
        var datos=$('#frmajax').serialize();
        $.ajax({
            type:"POST",
            url:"insertar.php",
            data:datos,
            success:function(r){
                if(r==1){
                    alert("Registro Exitoso");
                }else{
                    alert("Fallo el registro");
                }
            }
        });
        return false;
    });
});
</script>