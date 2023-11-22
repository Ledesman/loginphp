
<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>productosNuevo">Crear</a>
                                <i class="fas fa-table mr-1"></i>
                               
                        <a class="btn btn-warning" href="<?php echo base_url(); ?>productos/eliminados">Eliminados</a>
                        
                                <h1><?php echo $titulo; ?></h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Borrar</th>

                        </tr>
                                </thead>
                                        
                                        <tbody>
                                <?php foreach ($datos as $dato ) { ?>
                                
                              <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['codigo']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                        <td><?php echo $dato['descripcion']; ?></td>
                        <td><?php echo $dato['imagen']; ?></td>
                        <td><?php echo $dato['cantidad']; ?></td>
                        <td><?php echo $dato['precio']; ?></td>

                        <td><a class="btn btn-primary" href="<?php echo base_url().'productos/editar/'. $dato['id']; ?>" >
                        <i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td><a data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar Unidad" class="btn btn-danger" href="#" data-href="<?php echo base_url().'productos/eliminar/'. $dato['id']; ?>" >
                        <i class="fas fa-trash"></i></a></td>
                    
                         
                                </tr>
                              
                              
                                    <?php  }  ?>
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
    


<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea eliminar el producto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ligth" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-ligth" data-dismiss="modal">No</button>

        <a  class="btn btn-danger btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>

    </div>
   
</div>