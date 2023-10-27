<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                            </div>

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>unidades/insertar" autocomplete="off"> 
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">Ingrese nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Nombre Corto</label>
              <input type="text" class="form-control" id="nombre_corto"  name="nombre_corto" placeholder="Nombre Corto">
            </div>
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>unidades" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>