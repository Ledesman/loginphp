

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

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>clientes/actualizar" autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <input type="text" id="id" name="id" value="<?php echo $datos['id']?>" hidden>
            <label for="">Ingrese nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del cliente"
              value="<?php echo $datos['nombre']?>">
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Direccion del cliente</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion del cliente"
              value="<?php echo $datos['direccion']?>">
            </div> 
             <div class="col-12 col-sm-6">
            <label for="">Telefono del cliente</label>
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono del cliente"
              value="<?php echo $datos['telefono']?>">
            </div> 
             <div class="col-12 col-sm-6">
            <label for="">Correo del cliente</label>
              <input type="correo" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo del cliente"
              value="<?php echo $datos['correo']?>">
            </div>
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>