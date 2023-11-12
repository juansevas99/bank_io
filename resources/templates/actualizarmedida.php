
<form action="http://localhost/project_1/measure/confirmUpdate" method="POST">

<input name="id_medida_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_medida']?> ><div>

<div class="form-group">
<label for="">Nombre de Medida</label>
<input name="nombre_medida_set" type="text" class="form-control" value=<?php echo $data[0]['nombre_medida']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>