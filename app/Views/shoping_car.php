<html>
<head>
    <title>Codeigniter Shopping Cart with Ajax JQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
 <br /><br />
 
 <div class="col-lg-6 col-md-6">
  <div class="table-responsive">
   <h3 align="center">Codeigniter Shopping Cart with Ajax JQuery</h3><br />
   <?php
   foreach($datos as $row)
   
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
      <img src="'.base_url().'imagen/'.$row->imagen.'" class="img-thumbnail" /><br />
     <h4>'.$row->nombre.'</h4>
     <h4 name="descripcion" id="descripcion">'.$row->descripcion.'</h4>

     <h3 class="text-danger">$'.$row->precio.'</h3>
     <input type="text" name="codigo" class="form-control codigo" id="'.$row->codigo.'" /><br />
     <input type="text" name="cantidad" class="form-control cantidad" id="'.$row->cantidad.'" /><br />
     <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->nombre.'" data-price="'.$row->precio.'" data-productid="'.$row->id.'" />Add to Cart</button>
    </div>
    ';
   }
   ?>
      
  </div>
 </div>
 <div class="col-lg-6 col-md-6">
  <div id="cart_details">
   <h3 align="center">Cart is Empty</h3>
  </div>
 </div>
 
</div>
</body>
</html>
<script>
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var id = $(this).data("id");
  var nombre = $(this).data("nombre");
  var precio = $(this).data("precio");
  var cantidad = $(this).data("cantidad");
  var descripcion = $(this).data("descripcion");

  var codigo = $('#' + id).val();
  if(codigo != '' && codigo > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/add",
    method:"POST",
    data:{id:id, nombre:nombre, precio:precio, cantidad:cantidad, descripcion:descripcion },
    success:function(data)
    {
     alert("Product Added into Cart");
     $('#cart_details').html(data);
     $('#' + id).val('');
    }
   });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     alert("Product removed from Cart");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/clear",
    success:function(data)
    {
     alert("Your cart has been clear...");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

});
</script>