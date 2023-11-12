<div  class="col">
    <main id="crearSalida" class="m-3">

    <h1>

        <?php
        echo $titulo['titulo'] //Verificar si esto debe ser una desicion de Front o  de back
        ?>
    </h1>

    <form action="http://localhost/project_1/outputs/create" method="POST">

        <br>
        <br>
        
        <div class="form-group">
            <label for="">Referencia de Salidas</label>
            <input name="referencia_salidas" type="text" class="form-control">
        </div>  
        <div class="form-group">
            <label for="">Cantidad</label>
            <input name="cantidad_salidas" type="text" class="form-control">
        </div>   
        <div class="form-group">
            <label for="">Tipo Salida</label>
            <select class="form-control" name="id_tipo_salida" id="">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Referencia Orden de compra</label>
            <input name="id_orden_compra" type="text" class="form-control" value="<?php echo $titulo['referencia']?>" disabled>
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