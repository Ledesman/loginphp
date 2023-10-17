<?php 
$id = $datos[0]['id'];
$nombre = $datos[0]['nombre'];
$decripcion = $datos[0]['descripcion'];
$imagen = $datos[0]['imagen'];
$precio = $datos[0]['precio'];
$cantidad = $datos[0]['cantidad'];


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Actualizar</title>
  </head>
  <body>
    <h1>Estamos actualizado</h1>

    <div class="container">
        <h1>Actializando Productos</h1>
         
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>" >
            <input type="text" id="id" name="id" value="<?php echo $id?>" hidden>
                <label for="nombre">Nombre del Producto</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre?>">

            <label for="descripcion">Descripcion del Producto</label>
            <input class="form-control"  type="text" name="descripcion" id="descripcion" value="<?php echo $decripcion?>"> 

            <label for="imagen">imagen del Producto</label>
            <input class="form-control"  type="text" name="imagen" id="imagen" value="<?php echo $imagen?>">

            <label for="cantidad">Cantidad</label>
            <input class="form-control"  type="text" name="cantidad" id="cantidad" value="<?php echo $cantidad?>">

            <label for="precio">Precio</label>
            <input class="form-control"  type="text" name="precio" id="precio" value="<?php echo $precio?>">
            <br>
            <button  class="btn btn-primary">Actualizar</button>
        </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  </body>
</html>