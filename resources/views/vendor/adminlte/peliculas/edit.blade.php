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
					<div class="panel-heading">Modificar Pelicula</div>

					@include('vendor.adminlte.layouts.errors')

					<div class="panel-body">
						{!! Form::model($peliculas, ['route' => ['peliculas.update', $peliculas->id], 'method' => 'PUT']) !!}

							@include('vendor.adminlte.peliculas.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection