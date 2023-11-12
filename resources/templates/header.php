<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URL?>assets/media/logo.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title>  Producto Detalle</title>

     <script src="<?php echo URL?>assets/js/app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    

</head>

<style>

  .navbar{
    background:  #039c8a;
    
  }

  

  .link-light{
    text-decoration: none;
    font-family:  'Roboto', sans-serif;
    
   
  }

  ion-icon{
    
    margin-right: 5px;
    
  }



  /* Estilos para producto detalle  */

  .card{
    border: none;
    font-family:  'Roboto', sans-serif;
  }
 

  .pan{
      background: white; 
      float: right;
         
  }
  .breadcrumb-item a{
    text-decoration: none;
    color: #039c8a ;
    font-size: 17px;
    float: right;
    font-family:  'Roboto', sans-serif;
  }

  .col-sm-9{
      max-height: 100%;
      font-family:  'Roboto', sans-serif;
  }

  .form-control{
    margin: 5px 0px 7px 0px;
  }


  .text-light{
    font-weight: 100px;
    font-family:  'Roboto', sans-serif;
  }


</style>




<body >
    
    <nav class="navbar navbar-expand-sm navbar-dark  " >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            
            <img src="<?php echo URL?>assets/media/LOGOCORTO.png"  width="400px" class="img-fluid" alt="Responsive image">

          </a>

          <button class="navbar-toggler" 
          type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-expanded="true"
          aria-label="Toogle navigation">

              <span class="navbar-toggler-icon "></span>
            </button>
              <div class="f collapse navbar-collapse" id="navbarSupportedContent">
                  <ul  class="  navbar-nav">
                      <li  class="nav-item "><a  class="nav-link lead " href="#"> <ion-icon name="notifications-outline"></ion-icon>News</a></li>
                      <li  class="nav-item "><a  class="nav-link lead"href="<?php echo URL?>user/close"><ion-icon name="close-circle"></ion-icon>Salir</a></li>
                       
              </div>
        </div>
   
       </nav>

        
       
