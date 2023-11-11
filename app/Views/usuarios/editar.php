<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                                <?php  if (isset($validation)) { ?>
                              <div class="alert alert-danger">
                              <?php echo $validation->listErrors(); ?>
                              </div>
                            <?php }?>
                              </div>
                            </div>

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>unidades/actualizar" autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <input type="text" id="id" name="id" value="<?php echo $datos['id_usuario']?>" hidden>
            <label for="">Ingrese nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre"
              value="<?php echo $datos['nombre']?>">
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Nombre Corto</label>
              <input type="text" class="form-control" id="nombre_corto"  name="nombre_corto" placeholder="Nombre Corto"
              value="<?php echo $datos['nombre_corto']?>">
            </div>
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>usuarios" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>