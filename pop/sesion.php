<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/NewLogo-N.png"/>
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=css/bootstrap.min.css type=""/>
        <script src="js/funciones.js"></script>
    </head>
    <body>
        <div class="container">
                <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Titulo">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="categoria">Categoría</label>
                            <select class="form-control" id="categoria">
                                <option selected>Escoger una</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fecha">Fecha de emisión</label>
                          <input type="text" class="form-control" id="fecha" placeholder="AAAA/MM/DD">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-2">
                            <label for="temporadas">Temporadas</label>
                            <input type="text" class="form-control" id="temporadas">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="elenco">Elenco</label>
                            <input type="text" class="form-control" id="elenco">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="salir.php" class="btn btn-danger" style="width:30%">Salir</a>
                      </form>
        </div>
    </body>
