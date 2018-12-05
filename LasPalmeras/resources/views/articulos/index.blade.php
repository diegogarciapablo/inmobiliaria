@extends('layouts.appcliente')
@section('titulo','listado de articulos')
@section('contenido')
<div class="row">
	@foreach($articulos as $articulo)

	<div class="col-sm">
		<div class="card text-center" style="width: 18rem;">
			<img class="card-img-top rounded-circle mx-auto d-block" style="height: 120px; width: 100px; background-color: #EFEFEF; margin:20px" src="imagenes/{{$articulo->foto}}" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{$articulo->tipo}}</h5>
				<ul class="list-group list-group-flush">
					
					<li class="list-group-item">fecha limite: {{$articulo->fecha_lim}}</li>
				</ul>
				<a href="/articulos/{{$articulo->id}}" class="btn btn-primary">ver mas</a>
			</div>
		</div>
	</div>

	@endforeach

</div>
@endsection