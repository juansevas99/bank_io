<div  class="col">
    <main id="crearSalida" class="m-3">

    <h1>

        <?php
        echo $titulo; //Verificar si esto debe ser una desicion de Front o  de back
        ?>
    </h1>

    <form action="<?php echo URL?>movimiento/crear" method="POST">

        <br>
        <br>
        
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input name="cantidad" type="text" class="form-control">
        </div>  
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input name="precio_unitario" type="text" class="form-control">
        </div>   
        <div class="form-group">
            <label for="estado_id_estado">Estado</label>
            <select class="form-control" name="estado_id_estado" id="">
                <option  value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="producto_id_producto">Producto</label>
            <select class="form-control" name="producto_id_producto" id="">
                <option  value="">Seleccione</option>
            </select>
        </div>
    
        <input name="id_orden_compra" type="hidden" class="form-control" value="<?php echo $titulo['referencia']?>">
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="crear" name="crear">Crear</button>
        </div>

    </form>
</main>
</div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>