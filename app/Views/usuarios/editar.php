<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                          <!-- <?php $this->validation = \Config\Services::validation (); ?>  -->
                          <?php  if (isset($validation)) { ?>
                              <div class="alert alert-danger">
                              <?php echo $validation->listErrors(); ?>
                              </div>
                            <?php }?>
                              </div>
                        </div>

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>usuarios/actualizar" autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>" />
            <label for="">Ingrese usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su Usuario"
            value="<?php echo $usuario['usuario']?>"" >
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Contraseña</label>
              <input type="text" class="form-control" id="password"  name="password" placeholder="Contraseña"
              value="<?php echo $usuario['password']?>">
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Nombre</label>
              <input type="text" class="form-control" id="type"  name="type" placeholder="Nombre "
              value="<?php echo $usuario['type']?>"">
            </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">cajas</label>
              <select class="form-control" id="id_caja" name="id_caja">
                <option>Seleccionar caja</option>
            <?php  foreach ($cajas as $caja ) { ?>
              <option  value="<?php echo $caja['id']; ?>"><?php echo $caja['nombre']; ?></option>
              
            <?php } ?>
            </select>
            
             
            </div>
            
            </div>
            <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">Rol</label>
              <select class="form-control" id="id_rol" name="id_rol">
                <option>Seleccionar tipo de rol</option>
            <?php  foreach ($roles as $rol ) { ?>
              <option  value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre']; ?></option>
              
            <?php } ?>
            </select>
            
             
            </div>
            
            </div>
    </div>
    
    <a href="<?php echo base_url(); ?>usuarios" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>