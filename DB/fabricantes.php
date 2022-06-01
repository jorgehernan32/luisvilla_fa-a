<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <!--Titulo-->
    <title>Fabricantes</title>
</head>

<body>
<h3>crear fabricante</h3>
    <form action="registrofabricante.php" method="POST">
        <div class="mb-3">
            <label class="from-label">Ingresa el nombre del fabricante</label>
            <input type="text" class="form-control" name="nomFabricante"/>
            <div class="form-text"></div>
        </div>
        <input type="submit" name="enviar" value="Insertar fabricante" class="btn btn-primary"></botton>
    </form>

    <!--INICIO TABLA-->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>

        <tbody>
        <?php
          include('conec.php'); // Conexion a la base de datos 
          $consulta = "SELECT * FROM fabricante";
          $resultado =mysqli_query($conexion,$consulta);
          while($fila =mysqli_fetch_array($resultado)){
          ?>
          <tr>
            <th scope="row"><?php echo $fila["codigo"]?></th>
            <td><?php echo $fila["nombre"]?></td>

            <!--boton de eliminar-->
            <td>
              <a target="_self" href="acciones/eliminarfabricante.php?id=<?php echo $fila["codigo"]?>">
              <i class="bi bi-trash text-danger"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>
            </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    <!--FIN TABLA-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>