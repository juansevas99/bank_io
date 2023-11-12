
<form action="http://localhost/project_1/type_entries/confirmUpdate" method="POST">

<input name="id_tipos_entrada_where" type="hidden" class="form-control" value=<?php echo $data[0]['id_tipos_entrada']?> ><div>

<div class="form-group">
<label for="">Tipo de Entrada</label>
<input name="nomnre_tipos_entrada_set" type="text" class="form-control" value=<?php echo $data[0]['nomnre_tipos_entrada']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>