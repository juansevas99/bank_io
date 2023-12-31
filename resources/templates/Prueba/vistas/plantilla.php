
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema facturacion</title>


   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href=" https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo URL ?>resources/templates/Prueba/vistas/asses/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL ?>resources/templates/Prueba/vistas/asses/dist/css/adminlte.min.css">
  <link rel="stylesheet" href=" <?php echo URL ?>resources/templates/Prueba/vistas/asses/dist/css/plantilla.css">


  <script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/producto.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/producto_crear.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/user.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/categoria.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/atributo.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/proveedor.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/roles.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/pedido_entrada.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/pedido_salida.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/inventario.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/crearEntrada.js"></script>
<script src="<?php echo URL?>resources/templates/Prueba/vistas/asses/dist/js/crearMovimiento.js"></script>

<script>

       function CargarContenido(pagina_php,contenedor,ruta,id=null){
         URL='https://ioimr-prueba.herokuapp.com/';
        // URL='https://ioimr-prueba.herokuapp.com/';
        fetch(URL+pagina_php) // Error de seguridad: Puede desplegar la vista sin inicio de
            .then(function(response) {
              return response.text();
        })
  .then(function(body) {
    document.querySelector('.'+contenedor).innerHTML = body;

     if (ruta=="producto"){
      listaProductos()
     }
     else if(ruta=="producto_crear"){
      producto_crear();

     }

     else if(ruta=="usuario"){

      listaUsuarios();


     }
     else if(ruta=="categoria"){
      listaCategoria();

     }
     else if(ruta=="atributo"){
      listaAtributo();

     }
     else if(ruta=="crearuser"){

      user_crear();

     }
     else if(ruta=="proveedor"){

       listaProveedor();

      }
      else if(ruta=="roles"){

       listaroles();

      }
      else if(ruta=="input"){

        listaCompras();

      }
      else if(ruta=="crearMovimientoEntrada"){

        crearMovimientoEntrada();

     }


      else if(ruta=="crearoutput"){

        retrieveAllData(id)
        crearEntrada();


     }
      else if(ruta=="outputs"){

        listaSalidas();

     }
     else if(ruta=="inventario"){

      listainventario();

    }



  });}

</script>
  <!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo URL ?>resources/templates/Prueba/vistas/asses/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URL ?>resources/templates/Prueba/vistas/asses/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src=" <?php echo URL ?>resources/templates/Prueba/vistas/asses/dist/js/adminlte.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php
       include "modulos/navbar.php";
       include "modulos/aside.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


<?php
       include "home.php";



  ?>
  <input name="content" value="<?php echo  isset ($vista[0])?$vista[0]:null?>" type="hidden">
  <input name="ruta" value="<?php echo  isset ($vista[1])?$vista[1]:null?>" type="hidden">

  </div>
  <!-- /.content-wrapper -->

  <?php

       include "modulos/footer.php";

  ?>
</div>

<script>
   ruta=document.querySelector('[name="content"]').getAttribute("value");
  source=document.querySelector('[name="ruta"]').getAttribute("value");

  if (ruta){
    CargarContenido(ruta,'content-wrapper',source);

  }

  </script>


</body>
</html>
