@extends('layouts.appcliente')
@section('titulo','añadir cliente')
@section('contenido')
<form class="form-goup" method="POST" action="/clientes/{{$cliente->slug}}" enctype="multipart/form-data"> 
	@method('put')
	@csrf
	<div class="form-group">
		<label for="">CI</label>
		<input type="text" name="carnet" class="form-control" value="{{$cliente->ci}}">
	</div><div class="form-group">
		<label for="">Nombres</label>
		<input type="text" name="nombres" class="form-control" value="{{$cliente->nombres}}">
	</div><div class="form-group">
		<label for="">Apellidos</label>
		<input type="text" name="apellidos" class="form-control" value="{{$cliente->apellidos}}">
	</div><div class="form-group">
		<label for="">Direccion</label>
		<input type="text" name="direccion" class="form-control" value="{{$cliente->direccion}}">
	</div><div class="form-group">
		<label for="">Telefono</label>
		<input type="text" name="telefono" class="form-control" value="{{$cliente->telefono}}">
	</div>

	<div class="form-group">
			<label for="text">Palabra Clave</label>
			<input type="text" name="slug" class="form-control" value="{{$cliente->slug}}">
		</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

