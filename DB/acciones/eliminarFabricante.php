<?php
include ('../conec.php');
$codigoFabricante = $_GET['id'];/*print_r($GET)*/
$eliminarFabricante = "DELETE FROM fabricante WHERE codigo = $codigoFabricante";
$resultado = mysqli_query($conexion,$eliminarFabricante);
/*saltar a carpeta*/
header('location: ../fabricantes.php');
?>