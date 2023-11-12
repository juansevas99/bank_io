<div class="col">
    <main id="test" class="text-center  m-3">
        <div>
            <button class="btn btn-danger"><a href="<? echo URL?>test/delete/1">Borrar</a> </button>
        </div>
        <div>
            <button class="btn btn-warning"><a href="<? echo URL?>test/create/1">Crear</a> </button>
        </div>

        <div style="overflow-x: scroll;" >
                <table id="tabla-admin" class="table my-3" style="width: auto; margin: auto;"> 
                    <thead class="cabecera small ">

                    </thead>

                    <tbody class="cuerpo small">


                    </tbody>
                </table>
                <nav aria-label="pagination" class="">
                    <ul id="pagination" class="pagination">

                       
                    </ul>
                </nav>
            </div>

            <div>
                <form class="d-flex" action="<? echo URL?>test/create" method="POST" >
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
            </div>

            <div id="popoverUpdate" class="position-absolute h-100 w-100 top-0  d-none" style="background-color: rgb(0, 0, 0,0.4);">
        <div onclick="updateAdmin()" class="btn-dark btn">Cerrar
        </div>
        <div class="d-flex">
            <div class="m-auto bg-light p-5">
        </div>
    </div>
    </main>
    

</div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>