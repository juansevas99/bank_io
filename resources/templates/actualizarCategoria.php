
<form action="http://localhost/project_1/category/confirmUpdate" method="POST">

<input name="id_categoria_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_categoria']?> ><div>

<div class="form-group">
<label for="">Nombre de categoria</label>
<input name="nombre_categoria_set" type="text" class="form-control" value=<?php echo $data[0]['nombre_categoria']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>