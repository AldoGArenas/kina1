@extends('main')
@section('content')
<div class="container">
    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
		<span>PRODUCTOS INDUSTRONIC</span>
	</h2>
	<!-- Nav pills -->
	<ul class="nav nav-pills">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="pill" href="#home1">tipo de producto</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
		</li>
		@if (Auth::check()) 
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#createProduct">Crear producto</a>
			</li>
			<li class="nav-item">
				{{-- <a class="nav-link" data-toggle="pill" href="#createProduct">Crear producto</a> --}}
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
		<div class="tab-pane container active" id="home1">.1..</div>
		<div class="tab-pane container fade" id="menu1">..2.</div>
		<div class="tab-pane container fade" id="menu2">..3.</div>
		<div class="tab-pane container fade" id="createProduct">
			{!! Form::open(['route' => 'productos.store', 'enctype'=>'multipart/form-data']) !!}
					<div class="form-group row">
						<div class="col-6">
							<label for="nombre" class="col-form-label">Nombre del Producto</label>
							<input id="nombre" type="text" class="form-control  name="nombre">
						</div>
						<div class="col-6">
							<label for="modelo" class="col-form-label">Modelo</label>
							<input id="modelo" type="text" class="form-control  name="modelo">
						</div>
						<div class="col-6">
							<label for="categoria" class="col-form-label">Categoria/Tipo</label>
							<input id="categoria" type="text" class="form-control  name="categoria">
						</div>
						<div class="col-6">
							<label for="existencia" class="col-form-label">Existencia</label>
							<input id="existencia" type="text" class="form-control  name="existencia">
						</div>
						<div class="col-12">
							<label for="imagenes" class="col-form-label">Imagenes</label>
							{!! Form::file('imagenes', ['class' => '']) !!}
						</div>
						<div class="col-12">
							<label for="descripcion" class="col-form-label">Descripción</label>
							<input id="descripcion" type="text" class="form-control  name="descripcion">
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
