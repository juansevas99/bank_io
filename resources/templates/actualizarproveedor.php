

<form action="http://localhost/project_1/supplier/confirmUpdate" method="POST">

<input name="id_proveedor_where"  value="<?php echo $data[0]['id_proveedor']?>" type="hidden" class="form-control" ><div>

<div class="form-group">
<label for="">Nombre del Proveedor</label>
<input name="nombre_proveedor_set" type="text" class="form-control" value=<?php echo $data[0]['nombre_proveedor']?>></div>

<div class="form-group">
<label for="">Correo Electronico</label>
<input name="correo_set" type="text" class="form-control" value=<?php echo $data[0]['correo']?>></div>

<div class="form-group">
<label for="">Documento</label>
<input name="documento_set" type="text" class="form-control" value=<?php echo $data[0]['documento']?>></div>

<div class="form-group">
<label for="">Telefono</label>
<input name="telefono_set" type="text" class="form-control" value=<?php echo $data[0]['telefono']?>></div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary">Actualizar</button>
</div>
</form>