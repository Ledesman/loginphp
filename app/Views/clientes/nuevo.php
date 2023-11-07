<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                           
                                <i class="fas fa-table mr-1"></i>
                                <h1><?php  echo $titulo; ?></h1>
                            </div>

    <form lass="form-group" method="POST" action="<?php echo base_url(); ?>clientes/insertar" autocomplete="off"> 
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
            <label for="">Ingrese nombre del cliente</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del cliente">
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Ingrese direccion del cliente</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion del cliente">
            </div> 
             <div class="col-12 col-sm-6">
            <label for="">Ingrese telefono del cliente</label>
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono del cliente">
            </div> 
             <div class="col-12 col-sm-6">
            <label for="">Ingrese correo del cliente</label>
              <input type="correo" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo del cliente">
            </div>
        </div>
    </div>
    
    <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary">Volver</a>
  
  <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
</div>