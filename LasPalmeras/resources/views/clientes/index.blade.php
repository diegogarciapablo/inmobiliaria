@extends('layouts.appcliente')
@section('titulo','listado de clientes')
@section('contenido')

<div class="row">
	@foreach($clientes as $cliente)

	<div class="col-sm">
		<div class="card text-center" style="width: 18rem; margin-top: 50px">
			<img class="card-img-top rounded-circle mx-auto d-block" style="height: 120px; width: 100px; background-color: #EFEFEF; margin:20px" src="imagenes/{{$cliente->foto}}" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{$cliente->nombres}} {{$cliente->apellidos}}</h5>
			</div>
			
			<div class="card-body">
				<a href="/clientes/{{$cliente->slug}}" class="btn btn-primary" >mas informacion</a>
			</div>
		</div>
	</div>

	@endforeach

</div>
@endsection