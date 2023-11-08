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

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>configuracion/actualizar" autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <input type="text" id="id" name="id" value="<?php echo $datos['id']?>" hidden>
            <label for="">Ingrese nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre"
              value="<?php echo $datos['nombre']?>">
            </div>
            <div class="col-12 col-sm-6">
           
            <label for="">Ingrese leyenda</label>
              <input type="text" class="form-control" id="Tiket_leyenda" name="Tiket_leyenda" placeholder="Ingrese nombre"
              value="<?php echo $datos['Tiket_leyenda']?>">
            </div>
            <div class="col-12 col-sm-6">
           
           <label for="">Ingrese referencia</label>
             <input type="text" class="form-control" id="Tienda_rfc" name="Tienda_rfc" placeholder="Ingrese nombre"
             value="<?php echo $datos['Tienda_rfc']?>">
           </div>
           <div class="col-12 col-sm-6">
           
           <label for="">Ingrese telefono</label>
             <input type="text" class="form-control" id="Tienda_telefono" name="Tienda_telefono" placeholder="Ingrese nombre"
             value="<?php echo $datos['Tienda_telefono']?>">
           </div>
            <div class="col-12 col-sm-6">
           
           <label for="">Ingrese email</label>
             <input type="text" class="form-control" id="Tienda_email" name="Tienda_email" placeholder="Ingrese nombre"
             value="<?php echo $datos['Tienda_email']?>">
           </div>
           
           <div class="col-12 col-sm-6">
           
           <label for="">Ingrese direccion</label>
           <textarea class="form-control" id="Tienda_direccion" name="Tienda_direccion"><?php echo $datos['Tienda_direccion']?></textarea>
            
           </div>
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>configuracion" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>