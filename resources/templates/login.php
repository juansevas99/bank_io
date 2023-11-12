<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>
   
    <div class="container w-50  "  style="margin-top: 40px; ">
        <div class="row ">
              
            </div>
            <div class="col rounded shadow  p-3 " style="width: 450px; margin: auto; border: solid 1px #039c8a; height: 610px;" >
                <div class="text-end">
                    <img src="<? echo URL?>assets/media/IMR SOLUTIONS Logo.png" width="200px" style="margin-top: -50px;">
                </div>
               
                <h2 class="fw-bold  text-center " style="margin-bottom: 30px; margin-top: -30px; font-family:  'Roboto', sans-serif; ">Inicio de Sesión</h2>
                
              
                <!-- login-->

                <form action="#">
                    <div class="mb4-4">
                        <label for="email" class="form-label " style="font-family:  'Roboto', sans-serif;">Correo electronico</label>
                        <input type="email" class="form-control" name="Nombre" >
                    </div>
                    <div class="mb4-4">
                        <label for="password" class="form-label" style="font-family:  'Roboto', sans-serif;">Password</label>
                        <input type="password" class="form-control" name="Password" >
                    </div>
                    <div class="mb4-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input"> 
                         <label for="connected" class="form-check-label" style="font-family:  'Roboto', sans-serif;">Mantenerme Conectado</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-info btn-iniciar-sesion " style="font-family:  'Roboto', sans-serif;"> Iniciar sesion</button>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta <a href="#">Registrarse</a></span> <br>
                        <span><a href="#" style="font-family:  'Roboto', sans-serif;">Recuperar password</a></span>
                    </div>
                </form>
            
                <!-- separar la exturctura-->
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12"style="font-family:  'Roboto', sans-serif;" >Iniciar sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <button class="btn btn-outline-primary w-100 my-1">
                            <div class="row align-items-center">
                              <div class="col-2">
                                  <img src="<? echo URL?>assets/media/facebook.png" width="32px" alt="">
                              </div>
                               <div class="col-10 text-center" style="font-family:  'Roboto', sans-serif;">
                                   facebook
                               </div>

                            </div>
                        </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                  <div class="col-2">
                                      <img src="<? echo URL?>assets/media/google.jpg" width="32px" alt="">
                                  </div>
                                   <div class="col-10 text-center" style="font-family:  'Roboto', sans-serif;">
                                       Google
                                   </div>
    
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
    
    
</body>
</html>