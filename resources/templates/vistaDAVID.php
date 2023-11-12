<style>

button.accordion {
    background-color:#0ec0ab;
    color: black;
    cursor: pointer;
    padding: 12px;
    width: 135px;
    border: solid 0.3px #039c8a;
    outline: none;
    font-size: 16px;
    transition: 0.4s;
    margin-left: 15px;
    margin-bottom: 10px;
    
    
}

button.accordion.active, button.accordion:hover {
    background-color: #039c8a;
    border-radius: 5px;
    color: white;
}

div.panel {
    
    max-height: 0;
    overflow: hidden;
    transition: 0.9s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 10;
    max-height: 1000px;
}

</style>

<main id="crearProducto">

<nav aria-label="breadcrumb" >
                <ol class="breadcrumb pan" >
                  <li class="breadcrumb-item" ><a href="<? echo URL?>">Inventario</a></li>
                  <li class="breadcrumb-item"><a href="<? echo URL?>product/list">Productos</a></li>
                  <li class="breadcrumb-item"><a href="<? echo URL?>product/create">Detalles</a></li>
                 
                </ol>
              </nav>
              <h3 class="pt-3"><?php echo $titulo ?></h3>
            <!-- imagenes de productos -->
            
            <img class="ml-2 mt-5" src="<? echo URL?>assets/media/productos.png" width="280px" alt="">

              <!-- cuerpo donde se creo todas las busquedas principal derecha   -->
             
                   
                    
                    <div class="card-body">
                      
                    <form class="d-flex" action="<? echo URL?>product/create" method="POST" >
    <div class="col-5 m-3">
            <div class="form-group">
                <label for="">Referencia</label>
                <input name="referencia_producto" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Producto</label>
                <input name="nombre_producto" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Estado</label>
                <select class="form-control" name="estado_id_estado" id="" >
                    <option value="1">Activo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Categoria</label>
                <select name="categoria_id_categoria" class="form-control">
                    <option value="">Seleccione</option>
                </select>
            </div>
    </div>
    <div class="col-5 m-3"> 
            <div class="form-group">
                <label for="">Proveedor</label>
                <select class="form-control" name="proveedor_id_proveedor" id="">
                    <option value="">Seleccione</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Stock inicial</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="">Marca</label>
                <select class="form-control" name="marca_id_marca" id="">
                    <option value="">Seleccione</option>
                </select>
            </div>
            <div class="form-group">

                <label for="">Imagen de producto</label>
                <input type="file">
            </div>
            
            </div>    
    


    
                <div class="form-group">
                    <button class="accordion" type="submit">Crear</button>
                
                </div>

                </form>     

                       <!-- cuerpo donde se creo todas las busquedas principal izquierda   -->
  
                  
        
                  
                 
                </div>

               
                
                <button class="accordion">Añadir Detalles</button>
                
                <div class="panel">
                <div class="row row-cols-1 row-cols-md-2 g-1 mt-1 ml-1">
                        <div id="atributos" name="<?php echo isset($titulo)?:"" ?>">

                        </div>
                </div>
               
                </div>
               
          </div>
        </div>

</main>

     