
<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>categoriasNuevo">Crear</a>
                                <i class="fas fa-table mr-1"></i>
                               
                        <a class="btn btn-warning" href="<?php echo base_url(); ?>categorias/eliminados">Eliminados</a>
                        
                                <h1><?php echo $titulo; ?></h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                     
                         <th></th>
                        <th></th>
                     
                                </thead>
                                        
                                        <tbody>
                                <?php foreach ($datos as $dato ) { ?>
                                
                              <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                       
                        <td><a class="btn btn-primary" href="<?php echo base_url().'categorias/editar/'. $dato['id']; ?>" >
                        <i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td><a class="btn btn-danger" href="<?php echo base_url().'categorias/eliminar/'. $dato['id']; ?>" >
                        <i class="fas fa-trash"></i></a></td>
                        <td>
                         
                                </tr>
                              
                              
                                    <?php  }  ?>
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
    
    </div>
   
</div>