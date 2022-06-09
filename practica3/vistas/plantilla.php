<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Problema UI</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="vistas/components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vistas/dist/css/style.css">
  <link rel="stylesheet" href="vistas/components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vistas/components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/components/datatables.net-bs/css/responsive.bootstrap.min.css">


  <script src="vistas/components/jquery/dist/jquery.min.js"></script>
  <script src="vistas/components/bootstrap/dist/js/bootstrap.min.js"></script>

  
  <script src="vistas/components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <script src="vistas/components/sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body>
  
  <div class="wrapper">
      
    <?php

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "usuarios"){

        include "modulos/".$_GET["ruta"].".php";

      }
      
    }else{
      
      include "modulos/usuarios.php";
    
    }
  

    ?>

  </div>


<script src="vistas/js/usuarios.js"></script>

</body>
</html>
