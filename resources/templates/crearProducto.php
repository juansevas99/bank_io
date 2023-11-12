<div id="contenido" class="col">
    <main id="crearProducto" class="text-center  m-3">
    <h1>

        <?php
        echo $titulo //Verificar si esto debe ser una desicion de Front o  de back
        ?>
    </h1>

    <form action="<?php echo URL?>product/create" method="POST">

        <br>
        <br>
        
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
            <select class="form-control" name="estado_id_estado" id="">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            <select name="categoria_id_categoria" class="form-control">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Proveedor</label>
            <select class="form-control" name="proveedor_id_proveedor" id="">
                <option value="">Seleccione</option>

            </select>
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
        <div class="form-group">
            <button type="submit" value="crear" name="crear">Crear</button>
        </div>

    </form>
</main>

</div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>