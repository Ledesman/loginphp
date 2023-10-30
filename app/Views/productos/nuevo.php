<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                            </div>

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>categorias/insertar" autocomplete="off"> 
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">Ingrese nombre de Categoria</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre de la categoria">
            </div>
          
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>categorias" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>