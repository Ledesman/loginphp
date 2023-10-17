<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Listado</title>
  </head>
  <body>
  

    <div class="container">
        <h1>Creando Productos</h1>
        <div class="row">
            <div class="col-sm-12">
       <form method="POST" action="<?php echo base_url().'/crear' ?>">
            <label for="nombre">Nombre del Producto</label>
            <input class="form-control" type="text" name="nombre" id="nombre">

            <label for="descripcion">Descripcion del Producto</label>
            <input class="form-control"  type="text" name="descripcion" id="descripcion"> 

            <label for="imagen">Imagen del Producto</label>
            <input class="form-control"  type="text" name="imagen" id="imagen">

            <label for="cantidad">Cantidad</label>
            <input class="form-control"  type="text" name="cantidad" id="cantidad">

            <label for="precio">Precio</label>
            <input class="form-control"  type="text" name="precio" id="precio">
            <br>
            <button  class="btn btn-primary">Crear</button>
        </form>
            </div>
        </div>
    </div>
    <hr>
    
    <div class="container">
        <h1>Estamos el listado</h1>
         <div class="row">
        <div class="col-sm-12">
        <div class="table table-responsive">
            <table  class="table table-striped">
                <tr>
                
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>
                      Editar
                    </th>
                    <th>
                      Borrar
                    </th>
                </tr>
                <?php foreach ($datos as $key):  ?>
                    <tr>
                        <td><?php echo $key->nombre ?></td>
                        <td><?php echo $key->descripcion ?></td>
                        <td><img src="" alt="ima" srcset=""><?php echo $key->imagen ?></td>
                        <td><?php echo $key->cantidad ?></td>
                        <td><?php echo $key->precio ?></td>
                        <td>
                         <a class="btn btn-info" href="<?php echo base_url().'/obtenerNombre/'.$key->id ?>">Editar</a>
                        </td>
                        <td>
                        <a class="btn btn-danger" href="<?php echo base_url().'/eliminar/'.$key->id ?>">Borrar</a>
                        </td>
                    </tr>
                <?php  endforeach?>

            </table>
        </div>
    </div>
    </div>
   
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script type="text/javascript" >
let mensaje = '<?php echo $mensaje ?>';
       
        if (mensaje =='1') {
            
            swal("si!", "Agregado con exito!", "success");
           alert('agregado con exito')
        }else if(mensaje == '0'){
            swal("Atencion!!", "No se pudo agregar", "error");
        } else if(mensaje == '2'){
            swal("Atencion!!", "Actualizado con exito", "success");
        } else if(mensaje == '3'){
            swal("Atencion!!", "Fallo al actualizar", "error");
        }
        else if(mensaje == '4'){
            swal("Exito!", "Eliminado con exito", "success");
        }else if(mensaje == '5'){
            swal("Atencion!!", "Fallo al eliminar", "error");
        }
</script>
   
  </body>
</html>