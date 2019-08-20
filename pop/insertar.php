<?php
$nombre = $correo = $usuario = $contrasena = "";
$conexion =mysqli_connect('localhost', 'root','Dafuck77', 'poptv');
$nombre = $_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql = "INSERT INTO administrador (nombre, correo, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

echo mysqli_query($conexion, $sql);

?>