<?php
$host= 'localhost';
$user = 'root';
$password = 'Dafuck77';
$db = 'poptv';

$conection = @mysqli_connect($host,$user,$password,$db);

if(!$conection){
    echo "Error en la conexion";
}
?>