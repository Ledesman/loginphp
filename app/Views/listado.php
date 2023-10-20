
  

   
    <div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                            <a class="btn btn-primary" href="<?php echo base_url('/vistaCrear')?>">Crear</a>
                                <i class="fas fa-table mr-1"></i>
                                <h1>Estamos el listado</h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
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
                                        </thead>
                                        
                                        <tbody>
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

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
    
    </div>
   
</div>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
</html> -->