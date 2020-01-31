@extends('main')
@section('content')
<div class="container">
{{-- <div  id="produc" class="">
		<productosc/>
	
</div> --}}



    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
		<span>PRODUCTOS INDUSTRONIC</span>
	</h2>
	<!-- Nav pills -->
	<ul class="nav nav-pills">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="pill" href="#productos">Productos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="pill" href="#createProduct">Crear producto</a>
		</li>
		@if (Auth::check()) 
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Cerrar sesión') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
				
		@endif
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane container active" id="productos">
			<table style="width:100%">
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Imagen</th>
					<th>Descripcion</th>
				</tr>
				@forelse ($productos as $item)
					<tr>
						<td>{{$item->nombre}}</td>
						<td>{{$item->descripcion}}</td>
						<td>{{$item->precio}}</td>
						<td>
							@foreach ($item->imagenesProducto as $item)
								<img src="{{asset('imagenes/producto/'.$item->imagen)}}">
							@endforeach
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="4">SIN REGISTROS</td>
					</tr>
				@endforelse
			</table>
		</div>
		<div class="tab-pane container fade" id="createProduct">
			{!! Form::open(['route' => 'productos.store', 'enctype'=>'multipart/form-data']) !!}
				<div class="form-group row">
					<div class="col-6">
						<label for="nombre" class="col-form-label">Nombre del Producto</label>
						<input id="nombre" type="text" class="form-control"  name="nombre">
					</div>
					<div class="col-6">
						<label for="precio" class="col-form-label">Precio</label>
						<input id="precio" type="text" class="form-control"  name="precio">
					</div>
					<div class="col-12">
						<label for="imagenes" class="col-form-label">Imagenes</label>
						{!! Form::file('imagenes[]', ['class' => 'file', 'multiple']) !!}
					</div>

					<div class="col-12">
						<label for="descripcion" class="col-form-label">Descripción</label>
						<input id="descripcion" type="text" class="form-control"  name="descripcion">
					</div><br>
					<div class="col-12 float-left">
						{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
	
</div>
@endsection
@push('csss')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endpush
@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endpush