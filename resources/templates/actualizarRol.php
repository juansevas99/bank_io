
<form action="http://localhost/project_1/rol/confirmUpdate" method="POST">

<input name="id_rol_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_rol']?> ><div>

<div class="form-group">
<label for="">Nombre de Rol</label>
<input name="rol_set" type="text" class="form-control" value=<?php echo $data[0]['rol']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>