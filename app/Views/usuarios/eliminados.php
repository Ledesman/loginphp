
<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                               
                        <a class="btn btn-warning" href="<?php echo base_url(); ?>unidades"">Unidades</a>
                        
                                <h1><?php echo $titulo; ?></h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                         <th>Nombre Corto</th>
                         <th></th>
                       
                     
                                </thead>
                                        
                                        <tbody>
                                <?php foreach ($datos as $dato ) { ?>
                                
                              <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                        <td><?php echo $dato['nombre_corto']; ?></td>
                        <!-- <td><a class="btn btn-primary" href="<?php echo base_url().'unidades/reingresar/'. $dato['id']; ?>" >
                        <i class="fas fa-arrow-alt-circle-up"></i></a>
                        </td> -->
                        <td><a class="btn btn-primary" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Reingresar la Unidad" class="btn btn-danger" href="#" data-href="<?php echo base_url().'unidades/reingresar/'. $dato['id']; ?>" >
                        <i class="fas fa-arrow-alt-circle-up"></i></a></td>
                        
                    
                         
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
        <h5 class="modal-title" id="exampleModalLabel">Reincresar Unidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea reingresar esta unidad?</p>
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