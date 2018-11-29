@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.cine') }}
@endsection


@section('main-content')
	<!-- Content Header (Page header) -->
	<section class="content-header" style="margin-bottom: 10px;">
	    <h1>
	        @yield('contentheader_title', 'Cines')
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
					<div class="panel-heading">Datos del Cine</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-sm-3">
								<img src="{{ $cines->imagenC }}" style="width: 100%; height: 150px;">
							</div>
							<div class="form-group row col-sm-9">
								<div class="col-sm-6">
									{!! Form::label('Nombre', 'Nombre del cine') !!}
									{!! Form::text('nombre', $cines->nombre, ['class' => 'form-control', 'readonly' => true]) !!}
								</div>
								<div class="col-sm-6">
									{!! Form::label('Ubicacion', 'Ubicación del cine') !!}
									{!! Form::text('ubicacion', $cines->ubicacion, ['class' => 'form-control', 'readonly' => true]) !!}
								</div>
							</div> 

							<div class="form-group row col-sm-9">
								<div class="col-sm-6">
									{!! Form::label('Contacto', 'Contacto del cine') !!}
									{!! Form::number('contacto', $cines->contacto, ['class' => 'form-control', 'readonly' => true]) !!}
								</div>
								<div class="col-sm-6">
									{!! Form::label('Pagina', 'Página web del cine') !!}
									{!! Form::text('pagina', $cines->pagina, ['class' => 'form-control', 'readonly' => true]) !!}
								</div>
							</div>
						</div>

						<div class="btn-group col-md-12 col-md-offset-5">
							<a href="{{ route('cines.edit', $cines->id) }}" class="btn btn-primary">Modificar</a>
							<a href="{{ route('cines.index') }}" class="btn btn-default">Volver</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection