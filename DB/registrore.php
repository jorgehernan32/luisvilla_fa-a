<?php
include('conec.php');
if(isset($_POST['enviar'])){

    $nom = $_POST['nom'];
    $apellidopa = $_POST['apellidopa'];
    $apellidoma = $_POST['apellidoma'];
    $telefonoRegistro= $_POST['telefonoRegistro'];
    $correoRegistro = $_POST['correoRegistro'];
    $usuarioRegistro = $_POST['usuarioRegistro'];
    $passRegistro = $_POST['passRegistro'];
    
    $insertar = "INSERT INTO registro (nom,apellidopa,apellidoma,telefonoRegistro,correoRegistro,usuarioRegistro,passRegistro) VALUE ('$nom','$apellidopa','$apellidoma','$telefonoRegistro','$correoRegistro','$usuarioRegistro','$passRegistro')";
    $resultado = mysqli_query ($conexion,$insertar);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
    header('Location: registros.php');
}
?>
