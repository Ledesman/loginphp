<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                                <?php $this->validation = \Config\Services::validation (); ?> 
                              </div>
<div class="container">
  <form lass="form-group" method="POST" action="<?php echo base_url(); ?>productos/insertar" autocomplete="off"> 
    <?php csrf_field();?>

    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">Ingrese Nombre del Producto</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del Producto"
             >
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Ingrese Descripcion</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese Descripcion">
            </div> 
            <div class="col-12 col-sm-6">
            <label for="">Ingrese url Imagen</label>
              <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Ingrese URL Imagen">
            </div> 
            <div class="col-12 col-sm-6">
            <label for="">Ingrese la Cantidad</label>
              <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese Cantidad">
            </div> 
            <div class="col-12 col-sm-6">
            <label for="">Ingrese Precio</label>
              <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese Precio">
            </div>
        </div>
    </div>
    </div>
    
    <div class="container">
      <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">unidad</label>
              <select class="form-control" id="id_unidad" name="id_unidad" required>
                <option value="">Selecione unidad</option>
                <?php foreach ($unidades as $unidad)  { ?>
                  <option value="<?php echo $unidad['id']; ?>">
                  <?php echo $unidad['nombre']; ?>
                </option>
                <?php } ?>
              </select>
          </div>
            
            <div class="col-12 col-sm-6">
            <label for="">Categorias</label>
            <select class="form-control" id="id_categoria" name="id_categoria" required>
                <option value="">Selecione unidad</option>
                <?php foreach ($categorias as $categoria)  { ?>
                  <option value="<?php echo $categoria['id']; ?>">
                  <?php echo $categoria['nombre']; ?>
                </option>
                <?php } ?>
              </select>
          </div>
    </div>
      <br>
    <a href="<?php echo base_url(); ?>productos" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>
    </div>
    


</div>
</div>