@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.pelicula') }}
@endsection


@section('main-content')
	<!-- Content Header (Page header) -->
	<section class="content-header" style="margin-bottom: 10px;">
	    <h1>
	        @yield('contentheader_title', 'Peliculas')
	        <small>@yield('contentheader_description')</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
	        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
	    </ol>
	</section>
	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">Datos de la Pelicula</div>

					<div class="panel-body">
						<div class="form-group row">
							<div class="col-sm-6">
								{!! Form::label('Nombre', 'Nombre de la pelicula') !!}
								{!! Form::text('Nombre', $peliculas->Nombre, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
							<div class="col-sm-6">
								{!! Form::label('Descripcion', 'Descripción de la pelicula') !!}
								{!! Form::text('Descripcion', $peliculas->Descripcion, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
						</div> 

						<div class="form-group row">
							<div class="col-sm-6">
								{!! Form::label('Estreno', 'Estreno de la pelicula') !!}
								{!! Form::date('Estreno', $peliculas->Estreno, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
							<div class="col-sm-6">
								{!! Form::label('Genero', 'Género de la pelicula') !!}
								{!! Form::text('Genero', $peliculas->Genero, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-6">
								{!! Form::label('Director', 'Director de la pelicula') !!}
								{!! Form::text('Director', $peliculas->Director, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
							<div class="col-sm-6">
								{!! Form::label('Clase', 'Clase de la pelicula') !!}
								{!! Form::text('Clase', $peliculas->Clase, ['class' => 'form-control', 'readonly' => true]) !!}
							</div>
						</div>

						<div class="btn-group col-md-12 col-md-offset-5">
							<a href="{{ route('peliculas.edit', $peliculas->id) }}" class="btn btn-primary">Modificar</a>
							<a href="{{ route('peliculas.index') }}" class="btn btn-default">Volver</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection