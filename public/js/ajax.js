// $(document).ready(function () {
   
        
// });
// function buscarProducto(e, tagCodigo, codigo){
//   var enterKey = 13;

//   if (codigo =! '') {
//     if (e.which == enterKey) {
//         $.ajax({
//         //   type: "GET",
//         url: '<?php echo base_url(); ?>/productos/buscarPorCodigo/' + codigo,
//         dataType:'json',
//         data:{
//         codigo:codigo
//                 }.done(function(resp){
//         if(resp==0){
//             $(tagCodigo).val('');
//             }else
//             {
//                 $(tagCodigo).removeClass('has-error');
//             }     

//             $('#resultado_error').html(resultado.error);
//             if (resultado.existe) {
//               $('#id_producto').val(resultado.datos.id);
//               $('#nombre').val(resultado.datos.nombre);
//               $('#cantidad').val(1);
//               $('#precio').val(resultado.datos.precio);
//               $('#subtotal').val(resultado.datos.precio);
//               $('#cantidad').focus();
//             }else{
//             $('#id_producto').val('');
//             $('#nombre').val('');
//             $('#cantidad').val('');
//             $('#precio').val('');
//             $('#subtotal').val('');
//             }
//           }
        
//       });
//     }
//   }

// }


// $(document).ready(function () {
       
//        $("#btn_input").click(function(){
//         let valor = $("#codigo").val();
//         console.log(valor);

//         $.ajax({
//             type: "POST",
//            url: '<?php echo base_url(); ?>'+ compras/buscarPorCodigo ,
//            dataType:'json',
//            data: {
//             valor: valor
//            },
//            success: function(dato){
//             let resultado = JSON.stringify(dato);
//               $("#nombre").text(resultado);
//             }
//        });
//        });   
        
// });

//  <script>
      $(document).ready(function () {
          
        
      });
      function buscarProducto(e, tagCodigo, codigo){
        var enterKey =13;

        if (codigo =! '') {
          if (e.which == enterKey) {
            $.ajax({
               type: "POST",
              url: '<?php echo base_url(); ?>productos/buscarPorCodigo/' + codigo,
              dataType:'json',
              success: function(resultado){
                if (resultado == 0) {
                  $(tagCodigo).val('');
                }else{
                  $(tagCodigo).removeClass('has-error');

                  $('#resultado_error').html(resultado.error);
                  if (resultado.existe) {
                    $('#id_producto').val(resultado.datos.id);
                    $('#nombre').val(resultado.datos.nombre);
                    $('#cantidad').val(1);
                    $('#precio').val(resultado.datos.precio);
                    $('#subtotal').val(resultado.datos.precio);
                    $('#cantidad').focus();
                  }else{
                  $('#id_producto').val('');
                  $('#nombre').val('');
                  $('#cantidad').val('');
                  $('#precio').val('');
                  $('#subtotal').val('');
                  }
                }
              }
            });
          }
        }

      }

// </script> 
