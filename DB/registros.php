<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>registros</title>
</head>
<body>
    <h3>Crear registro</h3>
<!--FORMULARIO-->
    <form action="registrore.php" method="POST">
            <div class="mb-3">
                <label class="from-lable">Ingresa tu nombre</label>
                <input type="text" class="form-control" name="nom" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu apellido paterno</label>
                <input type="text" class="form-control" name="apellidopa" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu apellido materno</label>
                <input type="text" class="form-control" name="apellidoma" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu telefono</label>
                <input type="number" class="form-control" name="telefonoRegistro" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu correo</label>
                <input type="text" class="form-control" name="correoRegistro" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu usuario</label>
                <input type="text" class="form-control" name="usuarioRegistro" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa tu password</label>
                <input type="text" class="form-control" name="passRegistro" required/>
            </div>
            <input type="submit" name="enviar" value="Insertar" class="btn btn-primary"></botton>
        </form>
<!--INICIO DE TABLA-->
<table class="table">
            <thead>
                <tr>
                    <th scoope="col">Nombre</th>
                    <th scoope="col">Apellido paterno</th>
                    <th scoope="col">Apellido materno</th>
                    <th scoope="col">Telefono</th>
                    <th scoope="col">Correo</th>
                    <th scoope="col">Usuario</th>
                    <th scoope="col">Password</th>
                    <th scoope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('conec.php');//print_r($_POST);
                $consulta ="SELECT * FROM registro";
                $resultado = mysqli_query($conexion,$consulta);
                while($fila = mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?php echo $fila["nom"]?></td>
                    <td><?php echo $fila["apellidopa"]?></td>
                    <td><?php echo $fila["apellidoma"]?></td>
                    <th><?php echo $fila["telefonoRegistro"]?></th>
                    <td><?php echo $fila["correoRegistro"]?></td>
                    <td><?php echo $fila["usuarioRegistro"]?></td>
                    <td><?php echo $fila["passRegistro"]?></td>
                    
                </tr>
                <!--boton para eliminar-->
                
                </tr>
                <tr></tr>
            <?php } ?>
            </tbody>
        </table>
        <!--FIN TABLA(anyrs)-->
        <!--Option 1: Bootstrap Bundle with Popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>