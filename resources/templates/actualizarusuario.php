
<form action="http://localhost/project_1/user/confirmUpdate" method="POST">

        <input name="id" type="hidden" class="form-control" value=<?php echo $data[0]['id_usuario']?> ><div>
    <div class="form-group">
        <label for="">Nombre de Usuario</label>
        <input name="usuario" type="text" class="form-control" value=<?php echo $data[0]['usuario']?>></div>
    <div class="form-group">
        <label for="">Correo Electronico</label>
        <input name="correo" type="text" class="form-control" value=<?php echo $data[0]['correo']?>></div>
   <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Actualizar</button>
        </div>
</form>