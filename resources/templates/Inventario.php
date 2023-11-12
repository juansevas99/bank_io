 
        <!--Tarjeta 1 -->
        <div class="row">
        <div class="col">
            <div class="cuerpo-tarjeta">
                <div class="foto">
                    <img src="<? echo URL?>assets/media/Entradas.jpg" alt="">

                </div>
                <b>ENTRADAS</b><br>
                <a href="<?php echo URL?>inputRequest/view" > Lista de entradas</a><br>
                <a href="<? echo URL?>routes/request"> Crear Entrada</a><br>
                <a href="#"> Reportes</a><br>
                
            </div>

            <div class="descripcion">
               
            </div>
        </div>

  
    <!--Tarjeta 2-->
    <div class="col">
        <div class="cuerpo-tarjeta">
            <div class="foto">
                <img  src="<? echo URL?>assets/media/Salidas2.jpg" alt="">


            </div>
            <b>SALIDAS</b><br>
            <a href="<?php echo URL?>salida/vista"> Visualizar Lista</a><br>
            <a href="<? echo URL?>routes/request"> Crear Salida</a><br>
            <a href="#"> Reportes</a><br>
            
        </div>

        <div class="descripcion">
        
        </div>
    </div>
        </div>
       
</div>



<style>
    
  .foto img{width: 100%;
}

section{
    display: flex;
    justify-content: center;}

.cuerpo-tarjeta{

    font-family:  'Roboto', sans-serif;
    font-size: 12px;
    width: 280px;
    border: solid grey 1px;
    display: flex;
    flex-direction: column;
    border-radius: 5px;
    margin: 100px;
    
   }

.desdripcion {

    padding: 12px;
    margin-buttom 10px;
}

</style>



</body>

</html>

