       
<div id="contenido" class="col">
    <main id="gestionInventario" class="m-3">        
            <h1>

                <?php
                echo $titulo; //Verificar si esto debe ser una desicion de Front o  de back
                ?>
            </h1>
            <div>

            <div class="d-block d-lg-flex justify-content-between">
                
                
                <div class="d-flex align-items-center">
                    
                    <button class="btn">Otros Filtros</button>
                    <input class="form-control" type="select">
                    <button class="btn"  name="" id="">Search</button>
                </div>
            </div>
            <div style="overflow-x: scroll;">
                <table id="tabla-admin" class="table my-3" >
                    <thead class="cabecera">
                        
                    </thead>

                    <tbody class="cuerpo">

                       
                    </tbody>
                </table>
                <nav aria-label="pagination" class="">
                    <ul id="pagination" class="pagination">

                       
                    </ul>
                </nav>
            </div>
        </div>
            

        </main>
        </div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>