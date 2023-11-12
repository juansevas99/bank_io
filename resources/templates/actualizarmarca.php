
<form action="http://localhost/project_1/brand/confirmUpdate" method="POST">

<input name="id_marca_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_marca']?> ><div>

<div class="form-group">
<label for="">Nombre de marca</label>
<input name="nombre_set" type="text" class="form-control" value=<?php echo $data[0]['nombre']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>