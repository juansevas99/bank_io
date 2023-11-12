       
<div id="contenido" class="col">
    <main id="planeacion" class="m-3">        
            <h1>

                <?php
                echo $titulo; //Verificar si esto debe ser una desicion de Front o  de back
                ?>
            </h1>
            <form action="http://localhost/project_1/purchaseOrder/create" method="POST">
                <div class="input-form">
                    <label for="">Cantidad</label>
                    <input type="text" name="cantidad" class="form-control">
                </div>
                <div class="input-form">
                    <label for="">Precio Unitario</label>
                    <input type="text" name="precioUnitario" class="form-control">
                </div>
                <div class="input-form">
                    <label for="">Producto</label>
                    <select class="form-control" name="producto_id_producto" id="">
                        <option value="">Seleccione</option>
                    </select>
                </div>
                <div class="input-form">
                    <label for="">Proveedor</label>
                    <select class="form-control" name="proveedor_id_proveedor" id="">
                        <option value="">Seleccione</option>
                    </select>
                </div>
                 <div class="input-form">
                    <button class="btn btn-primary" name="crear" value="crear" type="submit">Crear</button>
                </div>
            </form>

        </main>
        </div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>