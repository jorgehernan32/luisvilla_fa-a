<?php
include ('../conec.php');
$codigoproducto = $_GET['id'];/*print_r($GET)*/
$eliminarproducto = "DELETE FROM producto WHERE codigo = $codigoproducto";
$resultado = mysqli_query($conexion,$eliminarproducto);
/*saltar a carpeta*/
header('location: ../productos.php');
?>