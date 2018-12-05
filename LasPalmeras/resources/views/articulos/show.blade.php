@extends('layouts.appcliente')
@section('titulo','articulo especifico')
@section('contenido')
<div class="card text-center" style="width: 18rem;">
			<img class="card-img-top rounded-circle mx-auto d-block" style="height: 120px; width: 100px; background-color: #EFEFEF; margin:20px" src="/imagenes/{{$articulo->foto}}" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{$articulo->tipo}}</h5>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">valor: {{$articulo->valor}}</li>
					<li class="list-group-item">cod_cliente: {{$articulo->ci_cliente}}</li>
					<li class="list-group-item">descripcion: {{$articulo->descripcion}}</li>
					<li class="list-group-item">fecha inicial: {{$articulo->fecha_hoy}}</li>
					<li class="list-group-item">fecha limite: {{$articulo->fecha_lim}}</li>
				</ul>
				<a href="/articulos/{{$articulo->id}}/edit" class="btn btn-primary" >editar</a>
			</div>
				{!!Form::open(['route'=>['articulos.destroy',$articulo->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
		</div>
		@endsection