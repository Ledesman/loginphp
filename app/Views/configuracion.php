
<div class="container">
            <div class="card mb-4">
            
                            <div class="card-header">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>unidadesNuevo">Crear</a>
                                <i class="fas fa-table mr-1"></i>
                               
                        <a class="btn btn-warning" href="<?php echo base_url(); ?>eliminados">Eliminados</a>
                        
                                <h1><?php echo $titulo; ?></h1>
                            </div>
                            <div class="container">
  <form lass="form-group" method="POST" action="<?php echo base_url(); ?>configuracion/actualizar"
   autocomplete="off"> 
    <?php csrf_field();?>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
           <?php foreach ($datos as $dato ) { ?>
            
           
            <label for="">Nombre de la tienda</label>
              <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" placeholder="Ingrese nombre"
             value="<?php echo $dato['nombre']; ?>" />
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Mensaje de la tienda</label>
              <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" placeholder="Ingrese nombre"
             value="<?php echo $dato['Tiket_leyenda']; ?>" />
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Referencia de la tienda</label>
              <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" placeholder="Ingrese nombre"
             value="<?php echo $dato['Tienda_rfc']; ?>" />
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Telefono de la tienda</label>
              <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" placeholder="Ingrese nombre"
             value="<?php echo $dato['Tienda_telefono']; ?>" />
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Email de la tienda</label>
              <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" placeholder="Ingrese nombre"
             value="<?php echo $dato['Tienda_email']; ?>" />
            </div>
            <div class="col-12 col-sm-6">
            <label for="">Direccion de la tienda</label>
            <textarea class="form-control" id="Tienda_direccion" name="Tienda_direccion" rows="10" cols="50"><?php echo $dato['Tienda_direccion']?></textarea>
            
            </div>
        </div>
    </div>
     <?php  }  ?>
    <a href="<?php echo base_url(); ?>configuracion"  class="btn btn-success">Volver</a>
  

  <a class="btn btn-primary" href="<?php echo base_url().'configuracion/editar/'. $dato['id']; ?>"><i class="fas fa-pencil-alt"></i>Editar</a>
    </form>
</div>
                                      
                                
                                
                              
                       

    </div>
   
</div>


