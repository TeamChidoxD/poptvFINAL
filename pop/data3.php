<?php
$host= 'localhost';
$user = 'root';
$password = 'Dafuck77';
$db = 'poptv';

$conection = @mysqli_connect($host,$user,$password,$db);

if(!$conection){
    echo "Error en la conexion";
}
//query to get data from the table
$query = sprintf("SELECT ubicacion, COUNT(ubicacion) AS cantidad FROM visitante, prog WHERE visitante.id_prog = prog.id_show GROUP BY ubicacion;");

//execute query
$result = mysqli_query($conection,$query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conection->close();

//now print the data
print json_encode($data);