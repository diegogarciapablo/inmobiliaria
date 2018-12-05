@extends('layouts.appcliente')
@section('titulo','añadir cliente')
@section('contenido')

<form class="form-goup" method="POST" action="/clientes" enctype="multipart/form-data"> 
	@csrf
	<div class="form-group">
		<label for="">CI</label>
		<input type="text" name="carnet" class="form-control">
	</div><div class="form-group">
		<label for="">Nombres</label>
		<input type="text" name="nombres" class="form-control">
	</div><div class="form-group">
		<label for="">Apellidos</label>
		<input type="text" name="apellidos" class="form-control">
	</div><div class="form-group">
		<label for="">Direccion</label>
		<input type="text" name="direccion" class="form-control">
	</div><div class="form-group">
		<label for="">Telefono</label>
		<input type="text" name="telefono" class="form-control">
	</div>
	<div class="form-group">
		<label for="">foto</label>
		<input type="file" name="foto" class="form-control-file">
	</div>
	<div class="form-group">
			<label for="text">palabra clave</label>
			<input type="text" name="slug" class="form-control">
		</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

