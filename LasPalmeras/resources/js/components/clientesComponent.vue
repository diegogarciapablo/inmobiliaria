<template>
	<div class="row">
	<div class="col-sm">
		<div class="card text-center" style="width: 18rem; margin-top: 50px">
			<img class="card-img-top rounded-circle mx-auto d-block" style="height: 120px; width: 100px; background-color: #EFEFEF; margin:20px" src="imagenes/" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">clienteNombre</h5>
			</div>
			
			<div class="card-body">
				<a href="/clientes/" class="btn btn-primary" >mas informacion</a>
			</div>
		</div>
	</div>
</div>
</template>
<script>
	export default{
		mounted() {
            console.log('Component mounted.')
        }
	}
  </script>