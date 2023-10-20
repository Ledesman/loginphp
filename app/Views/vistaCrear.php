<div class="container">
        <h1>Creando Productos</h1>
        
        <div class="row">
            <div class="col-sm-12">
       <form method="POST" action="<?php echo base_url().'/crear' ?>">
            <label for="nombre">Nombre del Producto</label>
            <input class="form-control" type="text" name="nombre" id="nombre">

            <label for="descripcion">Descripcion del Producto</label>
            <input class="form-control"  type="text" name="descripcion" id="descripcion"> 

            <label for="imagen">Imagen del Producto</label>
            <input class="form-control"  type="text" name="imagen" id="imagen">

            <label for="cantidad">Cantidad</label>
            <input class="form-control"  type="text" name="cantidad" id="cantidad">

            <label for="precio">Precio</label>
            <input class="form-control"  type="text" name="precio" id="precio">
            <br>
            <button  class="btn btn-primary">Crear</button>
        </form>
            </div>
        </div>
    </div>
    <hr>