@extends('layouts.appcliente')
@section('titulo','añadir articulo')
@section('contenido')
<form class="form-group" method="POST" action="/articulos/{{$articulo->id}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<div class="form-group">
		

</div>
		<div class="form-group">
			<label for="">valor</label>
			<input type="text" name="valor" class="form-control" value="{{$articulo->valor}}">
			</div>
		<div class="form-group">
			<label for="text">ci cliente</label>
			<input type="text" name="ci_cliente" class="form-control" value="{{$articulo->ci_cliente}}">
			</div>
		<div class="form-group">
			<label for="text">descripcion</label>
			<input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
			</div>

		<div class="form-group">
			<label for="text">fecha limite</label>
			<input type="text" name="fecha_lim" class="form-control" value="{{$articulo->fecha_lim}}">
		</div>

	
		<button type="submit" class="btn btn-primary">Guardar</button>
</form>
		
@endsection