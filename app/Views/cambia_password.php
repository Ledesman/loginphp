<?php
$user_sesion = session();

?>
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

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>actualizar_pass" autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <?php echo session('usuario'); ?>
            <label for="">Ingrese nombre</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese nombre"
              value="<?php echo $usuario['usuario']?>" disabled>
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Contraseña</label>
              <input type="password" class="form-control" id="password"  name="password" placeholder="Nombre Corto"
           >
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Nombre</label>
              <input type="text" class="form-control" id="type"  name="type" placeholder="Nombre Corto"
              value="<?php echo $usuario['type']?>">
            </div>
        </div>
    </div>

    <a href="<?php echo base_url(); ?>usuarios" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>
    <?php  if (isset($mensaje)) { ?>
                              <div class="alert alert-success">
                              <?php echo $mensaje; ?>
                              </div>
                            <?php }?>
    </form>

</div>
</div>