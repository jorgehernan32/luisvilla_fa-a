<?php
//datos de la base de datos "bd"
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';
//Query para la conexion a la base de datos "bd"
$conexion = mysqli_connect($hostname,$username,$password,$database);
//validador de conexion de la base de dase de datos "db"
if (mysqli_connect_error()) {
    echo 'conexion fallida';
}else {
    echo 'conexion exitosa';
}
?>