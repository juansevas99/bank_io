
<form action="http://localhost/project_1/type_outputs/confirmUpdate" method="POST">

<input name="id_tipo_salida_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_tipo_salida']?> ><div>

<div class="form-group">
<label for="">Tipo de Salida</label>
<input name="nombre_tipo_salida_set" type="text" class="form-control" value=<?php echo $data[0]['nombre_tipo_salida']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>