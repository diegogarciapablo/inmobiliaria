@extends('layouts.appcliente')
@section('titulo','añadir articulo')
@section('contenido')
<form class="form-group" method="POST" action="/articulos" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
			<label for="">tipo</label></br>
<select name="tipo" class="form-control">
	<option selected value="0"> Elige una opción </option>
   <option value="electrodomestico">electrodomestico</option> 
   <option value="dispositivo tecnologico">dispositivo tecnologico</option> 
   <option value="joya">joya</option>
   <option value="vehiculo">vehiculo</option> 
   <option value="mueble">mueble</option> 
   <option value="otro">otro</option> 
</select>
</div>
		<div class="form-group">
			<label for="">valor</label>
			<input type="text" name="valor" class="form-control">
			</div>
		<div class="form-group">
			<label for="text">ci cliente</label>
			<input type="text" name="ci_cliente" class="form-control">
			</div>
		<div class="form-group">
			<label for="text">descripcion</label>
			<input type="text" name="descripcion" class="form-control">
			</div>
		<div class="form-group">
			<label for="text">fecha hoy</label>
			<input type="text" name="fecha_hoy" class="form-control">
			</div>
		<div class="form-group">
			<label for="text">fecha limite</label>
			<input type="text" name="fecha_lim" class="form-control">
		</div>
		<div class="form-group">
		<label for="">foto</label>
		<input type="file" name="foto" class="form-control-file">
	</div>
	
		<button type="submit" class="btn btn-primary">Guardar</button>
</form>
		
@endsection