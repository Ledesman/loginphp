<?php
$user_sesion = session();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.png" />

  <script src="<?php echo base_url(); ?>/js/jquery-3.6.0.min.js"></script>
    <title>Inicio</title>
    
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=""><?php echo session('usuario'); ?>-Pizerria Ibarreta</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/listado') ?>"><i class="fas fa-shopping-basket"></i>Ver Lista<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/clientes') ?>"><i class="fas fa-users"></i>Ver clientes<span class="sr-only">(current)</span></a>

    </ul>  
    <ul class="nav-item dropdown">
    <!-- <li class="nav-item "> -->
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-expanded="false"><i class="fas fa-tachometer-alt"></i>Producto</a>
    <div class="dropdown-menu">
    <a class="nav-link" href="<?php echo base_url('/categorias') ?>"><i class="fas fa-window-restore"></i>Categorias<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/unidades') ?>"><i class="fas fa-window-maximize"></i>Unidades<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/productos') ?>"><i class="fas fa-tv"></i>Productos<span class="sr-only">(current)</span></a>
      <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div> -->
</ul>
   
<ul class="nav-item dropdown">
    <!-- <li class="nav-item "> -->
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-expanded="false"><i class="fas fa-tools"></i>Administracion</a>
    <div class="dropdown-menu">
    <a class="nav-link" href="<?php echo base_url('/configuracion') ?>"><i class="fa fa-cogs"></i>Configuracion<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/usuarios') ?>"><i class="fas fa-window-maximize"></i>Usuarios<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/loginP') ?>"><i class="fas fa-tv"></i>LoginP<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/cambiarPass') ?>"><i class="fas fa-tv"></i>Cambair Contraseña<span class="sr-only">(current)</span></a>

      <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>-->
    </div> 
</ul>
<ul class="nav-item dropdown">
    <!-- <li class="nav-item "> -->
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-expanded="false"><i class="fa fa-cash-register"></i>Compras</a>
    <div class="dropdown-menu">
    <a class="nav-link" href="<?php echo base_url('compras/nuevo') ?>"><i class="fa fa-credit-card"></i>Nueva Compra<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?php echo base_url('/compras') ?>"><i class="fa fa-cart-plus"></i>Compra<span class="sr-only">(current)</span></a>
      

      <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>-->
    </div> 
</ul>
 
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="dropdown-item" href="<?php echo base_url('/salir') ?>" ><i class="fas fa-user fa-fw"></i><?php echo session('usuario'); ?>Salir <span class="sr-only">(current)</span></a>
        
    </ul>
  
  </div>
</nav>
  <h1>Estas en el Inicio</h1>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>