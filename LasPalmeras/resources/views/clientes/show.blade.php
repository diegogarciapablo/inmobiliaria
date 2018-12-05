@extends('layouts.appcliente')
@section('titulo','cliente especifico')
@section('contenido')
<div class="card text-center" style="width: 18rem; margin-top: 50px">
	<img class="card-img-top rounded-circle mx-auto d-block" style="height: 120px; width: 100px; background-color: #EFEFEF; margin:20px" src="/imagenes/{{$cliente->foto}}" alt="Card image cap">
	<div class="card-body">
		<h5 class="card-title">{{$cliente->nombres}} {{$cliente->apellidos}}</h5>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">direccion: {{$cliente->direccion}}</li>
			<li class="list-group-item">telefono: {{$cliente->telefono}}</li>
			<li class="list-group-item">carnet: {{$cliente->ci}}</li>
		</ul>
		<a href="/clientes/{{$cliente->slug}}/edit" class="btn btn-primary">Editar</a>
		
	</div>
	    {!!Form::open(['route'=>['clientes.destroy',$cliente->slug],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
</div>
@endsection