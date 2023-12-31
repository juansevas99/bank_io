<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilosindex.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="<? echo URL?>assets/media/logo.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 

    
  <title>Document</title>
</head>


<style>
    body{
    font-family: 'Open Sans', sans-serif;
}





.contenedor{
    width: 100%;
    max-width: 1200px;
    overflow: hidden;
    margin: auto;
    padding: 60px 0;
}

header{
    height: 100vh;
    background-image: linear-gradient(120deg, rgba(213, 252, 121, 0.253) 0%, rgba(150, 230, 161, 0.199) 100%), url(img/2equipos.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position:center ;
}

.head{
    text-align: center;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color:#fff;
}
.head img{
    padding-top: 250px;
}

.hamburger{
    position: fixed;
    top: 30px;
    right: 30px;
    background: #fff;
    width: 40px;
    height: 40px;
    cursor: pointer;
    border-radius: 10px;
    box-shadow: 0 0 6px rgba(0, 0, 0, .5);
}

.menu-navegacion{
    position: fixed;
    top: 0;
    right: 0;
    width: 30vw;
    height: 100%;
    background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%);
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    /*transition: transform .3s ease-in-out;*/
    transform: translate(110%);
    box-shadow: 0 0 6px rgba(0, 0, 0, .5);
}

.spread{
    transform: translate(0);
}

.menu-navegacion a{
    color: #fff;
    text-decoration: none;
}

.titulo{
    font-size: 65px;
    margin-bottom: 15px;
}

.copy{
    font-weight: 300;
    font-size: 25px;
}

.subtitulo{
    text-align: center;
    font-weight: 300;
    color: black;
    margin-bottom: 40px;
    font-size: 40px;
}

.contenedor-servicio{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
}

.contenedor-servicio img{
    width: 40%;
}

.checklist-servicio{
    width: 45%;
}

.service{
    margin-bottom: 20px;
}

.n-service{
    margin-bottom: 7px;
    color: black;
}

.number{
    display: inline-block;
    background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%);
    width: 30px; ;
    height: 30px;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    font-weight: 700;
    line-height: 30px;
    margin-right: 5px;
}

.gallery{
    background: #f2f2f2;
}

.contenedor-galeria{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

.img-galeria{
    object-fit: contain;
    width: 30%;
    display: block;
    margin-bottom: 15px;
    box-shadow: 0 0 6px rgba(0, 0, 0, .5);
    cursor: pointer;
}

.imagen-light{
    position: fixed;
    background: rgba(0, 0, 0, .6);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translate(100%);
    transition: transform .2s ease-in-out;
}

.show{
    transform: translate(0);
}

.agregar-imagen{
    object-fit: contain;
    width: 60%;
    border-radius: 10px;
    transform: scale(0);
    transition: transform .3s .2s;
}

.showImage{
    transform: scale(1);
}

.close{
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    cursor: pointer;
}

.expert{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
}

.cont-expert{
    width: 30%;
    text-align: center;
    margin-bottom: 20px;
}

.cont-expert img{
    width: 80%;
    display: block;
    margin: auto;
}

.n-expert{
    display: inline-block;
    margin-top: 20px;
    width: 100%;
    font-weight: 400;
}

footer{
    background: #039c8a;
    padding-bottom: 0.1px;
}

.footer-content{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-top: 60px;
    padding-bottom: 40px;
}

.contact-us{
    width: 40%;
    color: #fff;    
}

.brand{
    font-weight: 500;
    font-size: 40px;
}

.brand+p{
    font-weight: 500;
}

.social-media{
    width: 50%;
    display: flex;
    justify-content: flex-end;
}

.social-media-icon{
    display: inline-block;
    margin-left: 20px;
    width: 60px;
    height: 60px;
    border: 1px solid #fff;
    border-radius: 50%;
    text-align: center;
    color: #fff;
}

.social-media-icon:hover{
    background: #fff;
    color: black;
}

.social-media-icon i{
    font-size: 30px;
    line-height: 60px;
}

.line{
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    height: 2px;
    background: #fff;
    margin-bottom: 60px;
}

@media screen and (max-width: 980px){
    .contenedor{
        width: 100%;
        height: -10%;
        
    }
   
   .head img{
        width:90%;
        
        
    }

}


</style>



<body>
      <header class="header" id="inicio">
    <img src="<?php echo URL?>assets/media/menus.svg" alt="" class="hamburger">
    <nav class="menu-navegacion">
      <a href="#inicio">Inicio</a>
      <a href="#servicio">Servicio</a>
      <a href="#portafolio">Portafolio</a>
      <a href="#expertos">Expertos</a>
      <a href="#contacto">Contacto</a>
      <a href="#" data-toggle="modal" data-target="#ingresar">Ingresar</a>
    </nav>
<div class="contenedor head">
<img src="<?php echo URL?>assets/media/LOGOCORTO.png"  width="800px" alt="Responsive image">
  <!-- <h1 class="titulo"><img src="http://localhost:/IOIMR/assets/media/IMR.png" width="70%"></div></h1> -->
  <p class="copy"></p>
</div>
</header>
<main>
  <section class="contenedor" id="servicio">
    <h2 class="subtitulo">Nuestro servicio</h2>
    <div class="contenedor-servicio">
      <img src="<?php echo URL?>assets/media/Finance analytics _Monochromatic.svg"  alt="">
      <div class="checklist-servicio">
<div class="service">
<h3 class="n-service"><span class="number">1</span>Inventario</h3>
<p>Lleve las cuentas claras de su inventario. lo que en realidad tiene, lo que entra y sale. </p>
</div>
<div class="service">
<h3 class="n-service"><span class="number">2</span>Facturación</h3>
<p>Puede expedir de manera fisica y digital el soporte de venta como lo es factura legal, recibo o tiquete POS</p>
</div>
<div class="service">
<h3 class="n-service"><span class="number">3</span>Reportes</h3>
<p>Mantengase informado. Con un solo clic puede ver informes y reportes de ventas, inventarios, pagos y deudas</p>
</div>
      </div>
    </div>
  </section>
  <section class="gallery" id="portafolio">
    <div class="contenedor">
      <h2 class="subtitulo">Galeria</h2>
      <div class="contenedor-galeria">
        <img src="<?php echo URL?>assets/media/2equipos.jpg" alt="hola" class="img-galeria">
        <img src="<?php echo URL?>assets/media/cajaperro.jpg" alt="" class="img-galeria">
        <img src="<?php echo URL?>assets/media/cajas.jpg" alt="" class="img-galeria">
        <img src="<?php echo URL?>assets/media/graficacelularmarker.jpg" alt="" class="img-galeria">
        <img src="<?php echo URL?>assets/media/reportesolo.jpg" alt="" class="img-galeria">
        <img src="<?php echo URL?>assets/media/calculadoracel.jpg" alt="" class="img-galeria">      
      </div>
    </div>
  </section>
  <section class="imagen-light">
    <img src="<?php echo URL?>assets/media/x.svg" alt="" class="close">
    <img src="<?php echo URL?>assets/media/cajasoscuro.jpg" alt="" class="agregar-imagen">
  </section>
<section class="contenedor" id="expertos">
  <h2 class="subtitulo">Expertos en:</h2>
  <section class="expert">
    <div class="cont-expert">
      <img src="<?php echo URL?>assets/media/Finance analytics _Outline.svg" alt="">
      <h3 class="n-expert">Inventario</h3>
    </div>
    <div class="cont-expert">
      <img src="<?php echo URL?>assets/media/Finance analysis _Flatline.svg" alt="">
      <h3 class="n-expert">Facturación</h3>
    </div>
    <div class="cont-expert">
      <img src="<?php echo URL?>assets/media/Finance analysis _Outline.svg" alt="">
      <h3 class="n-expert">Ventas</h3>
    </div>
  </section>
</section>  
<br>
<br>

<div  id="ingresar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" > 
<div style="margin-top: 40px; background:white;     width: max-content; margin:auto">
        <div class="row ">
              
            </div>
            <div class="col rounded shadow  p-3 " style="width: 450px; margin: auto; border: solid 1px #039c8a; height: 610px;" >
                <div class="text-end">
                <!-- <img src="http://localhost/IOIMR/assets/media/LOGOCORTO.png" width="700px" class="img-fluid" alt="Responsive image"> -->
                    <img src="<?php echo URL?>assets/media/IMR SOLUTIONS Logo.png" width="200px" style="margin-top: -50px;">
                </div>
               
                <h2 class="fw-bold  text-center " style="margin-bottom: 30px; margin-top: -30px; font-family:  'Roboto', sans-serif; ">Inicio de Sesión</h2>
                
              
                <!-- login-->

                <form action="<?php echo URL?>user/login" method="POST">
                    <div class="mb4-4">
                        <label for="email" class="form-label " style="font-family:  'Roboto', sans-serif;">Correo electronico</label>
                        <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="mb4-4">
                        <label for="password" class="form-label" style="font-family:  'Roboto', sans-serif;">Password</label>
                        <input type="password" class="form-control" name="password" >
                    </div>
                    <div class="mb4-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input"> 
                         <label for="connected" class="form-check-label" style="font-family:  'Roboto', sans-serif;">Mantenerme Conectado</label>
                    </div>
                    <input type="hidden" name="login" value="sent">

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
                                  <img src="<?php echo URL?>assets/media/facebook.png" width="32px" alt="">
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
                                      <img src="<?php echo URL?>assets/media/google.jpg" width="32px" alt="">
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


</div>
    <br>
<br>
<br>
<br>
</main>
<footer id="contacto">
  <div class="contenedor footer-content">
    <div class="contact-us">
      <h2 class="brand">IMR SOLUTIONS</h2>
      <p> © Todos los derechos reservados propiedad de IMR SOLUTIONS </p>
    </div>
    <div class="soacial-media">
      <a href="./" class="social-media-icon">
        <i class='bx bxl-facebook'></i>
      </a>
      <a href="./" class="social-media-icon">
        <i class='bx bxl-twitter' ></i>
      </a>
      <a href="./" class="social-media-icon">
        <i class='bx bxl-instagram' ></i>
      </a>
    </div>
  </div>
  <div class="line"></div>
</footer>





<script>
//console.log(hamburger)
//console.log(menu)
    const hamburger = document.querySelector('.hamburger') 
const menu = document.querySelector('.menu-navegacion')




hamburger.addEventListener('click', ()=>{
    menu.classList.toggle("spread")
})

window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != menu && e.target !=hamburger ){

        menu.classList.toggle("spread")
    }

})

//lightbox//

const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLight = document.querySelector('.agregar-imagen')
const contenedorLight = document.querySelector('.imagen-light')
const hamburger1 = document.querySelector('.hamburger') 

console.log(imagenes)
console.log(imagenesLight)
console.log(contenedorLight)

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    })
})

contenedorLight.addEventListener('click', (e)=>{
    if(e.target !== imagenesLight){
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImage')
        hamburger1.style.opacity = '1'
    }
})

const aparecerImagen = (imagen)=>{
    imagenesLight.src=imagen
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage')
    hamburger1.style.opacity = '0'
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>